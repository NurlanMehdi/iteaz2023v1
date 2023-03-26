<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResourceController extends Controller
{
    public function index($category = 0)
    {
        $lang = app()->getLocale();
        $data = $this->getAboutData($lang,$category);

        return view('user.resource.index',['data'=>$data]);
    }

    public function indexResourceInner($itemId)
    {
        $data = resource::select('resource_translate.*','resource_item.created_at')
            ->leftJoin('resource_translate','resource_translate.item_id','=','resource_item.id')
            ->groupBy('item_id')
            ->where('resource_translate.language' ,'=',$lang = app()->getLocale())
            ->where('resource_translate.item_id' ,'=',$itemId)
            ->first();

        $lastresource = resource::select('resource_translate.*','resource_item.created_at','resource_item.img')
            ->leftJoin('resource_translate','resource_translate.item_id','=','resource_item.id')
            ->groupBy('item_id')
            ->where('resource_translate.language' ,'=',$lang = app()->getLocale())
            ->where('resource_translate.item_id' ,'!=',$itemId)
            ->orderByDesc('created_at')
            ->take(2)->get();

        return view('user.resource.resourceInner',['data'=>$data,'lastresource'=> $lastresource]);
    }

    public function getAboutData($lang,$category)
    {
        $data = resource::select('resource_translate.*','resource_item.created_at','resource_item.category','resource_item.img')
            ->leftJoin('resource_translate','resource_translate.item_id','=','resource_item.id')
            ->groupBy('item_id')
            ->where('resource_translate.language' ,'=',$lang)
            ->where('resource_item.category' ,'=',$category)
            ->where('resource_item.status' ,'=',1)
            ->paginate(10);

        return $data;
    }
}
