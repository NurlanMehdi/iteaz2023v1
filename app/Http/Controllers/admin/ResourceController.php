<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Resource;
use App\Models\ResourceTranslate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResourceController extends Controller
{
    public function index()
    {
        $data = Resource::select('resource_translate.*',DB::raw("(GROUP_CONCAT(language SEPARATOR ',')) as language"),'resource_item.status')
            ->leftJoin('resource_translate','resource_translate.item_id','=','resource_item.id')
            ->groupBy('item_id')
            ->where('resource_translate.id' ,'!=','')
            ->get();
        foreach ($data as $key => $val)
        {

            $data[$key]['language'] = explode(',',$val->language);
        }
        return view('admin.pages.resource.index',['data'=>$data]);
    }

    public function addResource($id,$key,$lang = '')
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

        return view('admin.pages.resource.addResource',['data'=>$data]);
    }

    public function getAboutData($id,$lang)
    {
        $data = Resource::select('resource_item.*','resource_translate.language','resource_translate.item_id','resource_translate.info','resource_translate.name')
            ->leftJoin('resource_translate','resource_translate.item_id','=','resource_item.id')
            ->groupBy('item_id')
            ->where('item_id' ,'=',$id)
            ->where('resource_translate.language' ,'=',$lang)
            ->first();

        return $data;
    }

    public function saveResource()
    {
        $validator = validator(request()->all(),[
            'status' => 'nullable|string',
            'language' => 'required|string',
            'category' => 'required|integer',
            'name' => 'required|string',
            'info' => 'required|string',
            'newsImage' => 'required|string'
        ]);
        if (request()->get('item_id') > 0)
        {
            $id = request()->get('item_id');
            $translate = DB::table('resource_translate')->where('item_id',$id)->where('language',request()->get('language'))->first();

            DB::table('resource_item')->where('id','=',$id)->update([
                'status' => request()->get('status'),
                'category' => request()->get('category'),
                'img' => request()->get('newsImage'),
            ]);

            if ($translate == null){
                $newsTranslate = new ResourceTranslate();
                $newsTranslate->item_id = $id;
                $newsTranslate->name = request()->get('name');
                $newsTranslate->info = request()->get('info');
                $newsTranslate->language = request()->get('language');
                $newsTranslate->save();


            }else{
                ResourceTranslate::where('item_id','=',$id)->where('language','=',request()->get('language'))->update([
                    'name' => request()->get('name'),
                    'info' => request()->get('info'),
                ]);
            }
        }else{
            if ($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }else {
                $news = new Resource();
                $news->status = request()->get('status');
                $news->img = request()->get('newsImage');
                $news->category = request()->get('category');
                $news->save();

                $newsTranslate = new ResourceTranslate();
                $newsTranslate->item_id = $news->id;
                $newsTranslate->language = request()->get('language');
                $newsTranslate->name = request()->get('name');
                $newsTranslate->info = request()->get('info');
                $newsTranslate->save();
            }
        }

        return redirect('admin/resource');
    }

    public function trashResourceInfo($id)
    {
        if (isset($id) && $id > 0){
            $about = Resource::where('id',$id)->delete();
            $aboutT = DB::table('resource_translate')->where('item_id',$id)->delete();
            if ($about && $aboutT)
            {
                return redirect('admin/resource');
            }
        }else{
            return redirect('admin/resource');
        }
    }

    public function trashResourceOnlyTranslate($id)
    {
        if (isset($id) && $id > 0){
            $news = DB::table('resource_translate')->where('id',$id)->delete();
            if ($news)
            {
                return redirect('admin/resource');
            }
        }else{
            return redirect('admin/resource');
        }
    }
}
