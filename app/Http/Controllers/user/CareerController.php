<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\CareerTranslate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CareerController extends Controller
{
    public function index()
    {
        $lang = app()->getLocale();
        $data = $this->getAboutData($lang);

        return view('user.career.index',['data'=>$data]);
    }

    public function indexCareerInner($itemId)
    {
        $data = CareerTranslate::where('item_id',$itemId)->where('career_translate.language' ,'=',app()->getLocale())->first();
        return view('user.career.careerInner',['data'=>$data]);
    }

    public function getAboutData($lang)
    {
        $data = Career::select('career_translate.*',DB::raw("(GROUP_CONCAT(language SEPARATOR ',')) as language"),'career_item.work_hours')
            ->leftJoin('career_translate','career_translate.item_id','=','career_item.id')
            ->groupBy('item_id')
            ->where('career_translate.language' ,'=',$lang)
            ->where('career_item.status' ,'=',1)
            ->get();

        return $data;
    }
}
