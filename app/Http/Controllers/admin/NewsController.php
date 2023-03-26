<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\NewsTranslate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index()
    {
        $data = News::select('news_translate.*',DB::raw("(GROUP_CONCAT(language SEPARATOR ',')) as language"),'news_item.status')
            ->leftJoin('news_translate','news_translate.item_id','=','news_item.id')
            ->groupBy('item_id')
            ->where('news_translate.id' ,'!=','')
            ->get();
        foreach ($data as $key => $val)
        {

            $data[$key]['language'] = explode(',',$val->languageuage);
        }
        return view('admin.pages.news.index',['data'=>$data]);
    }

    public function addNews($id,$key,$lang = '')
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

        return view('admin.pages.news.addNews',['data'=>$data]);
    }

    public function getAboutData($id,$lang)
    {
        $data = News::select('news_item.*','news_translate.language','news_translate.item_id','news_translate.info','news_translate.name')
            ->leftJoin('news_translate','news_translate.item_id','=','news_item.id')
            ->groupBy('item_id')
            ->where('item_id' ,'=',$id)
            ->where('news_translate.language' ,'=',$lang)
            ->first();

        return $data;
    }

    public function saveNews()
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
            $translate = DB::table('news_translate')->where('item_id',$id)->where('language',request()->get('language'))->first();

            DB::table('news_item')->where('id','=',$id)->update([
                'status' => request()->get('status'),
                'category' => request()->get('category'),
                'img' => request()->get('newsImage'),
            ]);

            if ($translate == null){
                $newsTranslate = new NewsTranslate();
                $newsTranslate->item_id = $id;
                $newsTranslate->name = request()->get('name');
                $newsTranslate->info = request()->get('info');
                $newsTranslate->language = request()->get('language');
                $newsTranslate->save();


            }else{
                NewsTranslate::where('item_id','=',$id)->where('language','=',request()->get('language'))->update([
                    'name' => request()->get('name'),
                    'info' => request()->get('info'),
                ]);
            }
        }else{
            if ($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }else {
                $news = new News();
                $news->status = request()->get('status');
                $news->img = request()->get('newsImage');
                $news->category = request()->get('category');
                $news->save();

                $newsTranslate = new NewsTranslate();
                $newsTranslate->item_id = $news->id;
                $newsTranslate->language = request()->get('language');
                $newsTranslate->name = request()->get('name');
                $newsTranslate->info = request()->get('info');
                $newsTranslate->save();
            }
        }

        return redirect('admin/news');
    }

    public function trashNewsInfo($id)
    {
        if (isset($id) && $id > 0){
            $about = News::where('id',$id)->delete();
            $aboutT = DB::table('news_translate')->where('item_id',$id)->delete();
            if ($about && $aboutT)
            {
                return redirect('admin/news');
            }
        }else{
            return redirect('admin/news');
        }
    }

    public function trashNewsOnlyTranslate($id)
    {
        if (isset($id) && $id > 0){
            $news = DB::table('news_translate')->where('id',$id)->delete();
            if ($news)
            {
                return redirect('admin/news');
            }
        }else{
            return redirect('admin/news');
        }
    }
}
