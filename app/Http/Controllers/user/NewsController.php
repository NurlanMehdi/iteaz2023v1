<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\NewsTranslate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index($category = 0)
    {
        $lang = app()->getLocale();
        $data = $this->getAboutData($lang,$category);

        return view('user.news.index',['data'=>$data]);
    }

    public function indexNewsInner($itemId)
    {
        $data = News::select('news_translate.*','news_item.created_at','news_item.img')
            ->leftJoin('news_translate','news_translate.item_id','=','news_item.id')
            ->groupBy('item_id')
            ->where('news_translate.language' ,'=',$lang = app()->getLocale())
            ->where('news_translate.item_id' ,'=',$itemId)
            ->first();

        $lastNews = News::select('news_translate.*','news_item.created_at','news_item.img')
            ->leftJoin('news_translate','news_translate.item_id','=','news_item.id')
            ->groupBy('item_id')
            ->where('news_translate.language' ,'=',$lang = app()->getLocale())
            ->where('news_translate.item_id' ,'!=',$itemId)
            ->orderByDesc('created_at')
            ->take(2)->get();
        return view('user.news.newsInner',['data'=>$data,'lastNews'=> $lastNews]);
    }

    public function getAboutData($lang,$category)
    {
        $data = News::select('news_translate.*','news_item.created_at','news_item.img')
            ->leftJoin('news_translate','news_translate.item_id','=','news_item.id')
            ->groupBy('item_id')
            ->where('news_translate.language' ,'=',$lang)
            ->where('news_item.category' ,'=',$category)
            ->where('news_item.status' ,'=',1)
            ->paginate(10);

        return $data;
    }
}
