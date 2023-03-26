<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\CareerTranslate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CareerController extends Controller
{
    public function index()
    {
        $data = Career::select('career_translate.*',DB::raw("(GROUP_CONCAT(language SEPARATOR ',')) as language"),'career_item.status')
            ->leftJoin('career_translate','career_translate.item_id','=','career_item.id')
            ->groupBy('item_id')
            ->where('career_translate.id' ,'!=','')
            ->get();
        foreach ($data as $key => $val)
        {

            $data[$key]['language'] = explode(',',$val->language);
        }
        return view('admin.pages.career.index',['data'=>$data]);
    }

    public function addCareer($id,$key,$lang = '')
    {
        if ($key == 'new')
        {
            $data = new \stdClass();
        }elseif ($key == 'edit'){
            $data = $this->getAboutData($id,$lang);
        }else{
            $data = new \stdClass();
            $data->language = $lang;
            $data->item_id = $id;
        }

        return view('admin.pages.career.addCareer',['data'=>$data]);
    }

    public function getAboutData($id,$lang)
    {
        $data = Career::select('career_item.*','career_translate.language','career_translate.item_id','career_translate.info','career_translate.name')
            ->leftJoin('career_translate','career_translate.item_id','=','career_item.id')
            ->groupBy('item_id')
            ->where('item_id' ,'=',$id)
            ->where('career_translate.language' ,'=',$lang)
            ->first();

        return $data;
    }

    public function saveCareer()
    {
        $validator = validator(request()->all(),[
            'status' => 'nullable|string',
            'language' => 'required|string',
            'work_hours' => 'required|integer',
            'name' => 'required|string',
            'info' => 'required|string'
        ]);
        if (request()->get('item_id') > 0)
        {
            $id = request()->get('item_id');
            $translate = DB::table('career_translate')->where('item_id',$id)->where('language',request()->get('language'))->first();

            DB::table('career_item')->where('id','=',$id)->update([
                'status' => request()->get('status'),
                'work_hours' => request()->get('work_hours'),
            ]);

            if ($translate == null){
                $newsTranslate = new CareerTranslate();
                $newsTranslate->item_id = $id;
                $newsTranslate->name = request()->get('name');
                $newsTranslate->info = request()->get('info');
                $newsTranslate->language = request()->get('language');
                $newsTranslate->save();
            }else{
                CareerTranslate::where('item_id','=',$id)->where('language','=',request()->get('language'))->update([
                    'name' => request()->get('name'),
                    'info' => request()->get('info'),
                ]);
            }
        }else{
            if ($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }else {
                $news = new Career();
                $news->status = request()->get('status');
                $news->work_hours = request()->get('work_hours');
                $news->save();

                $newsTranslate = new CareerTranslate();
                $newsTranslate->item_id = $news->id;
                $newsTranslate->language = request()->get('language');
                $newsTranslate->name = request()->get('name');
                $newsTranslate->info = request()->get('info');
                $newsTranslate->save();
            }
        }

        return redirect('admin/career');
    }

    public function trashCareerInfo($id)
    {
        if (isset($id) && $id > 0){
            $about = Career::where('id',$id)->delete();
            $aboutT = DB::table('career_translate')->where('item_id',$id)->delete();
            if ($about && $aboutT)
            {
                return redirect('admin/career');
            }
        }else{
            return redirect('admin/career');
        }
    }

    public function trashCareerOnlyTranslate($id)
    {
        if (isset($id) && $id > 0){
            $news = DB::table('career_translate')->where('id',$id)->delete();
            if ($news)
            {
                return redirect('admin/career');
            }
        }else{
            return redirect('admin/career');
        }
    }
}
