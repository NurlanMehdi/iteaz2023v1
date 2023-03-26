<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use App\Models\Employee;
use App\Models\Resource;
use App\Models\Tranings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrainingsController extends Controller
{
    public function index($category = 2)
    {
        $lang = app()->getLocale();
        $data = $this->getAboutData($lang,$category);
        $course = Courses::select('courses_translate.*','courses_item.status')
            ->leftJoin('courses_translate','courses_translate.item_id','=','courses_item.id')
            ->groupBy('item_id')
            ->where('courses_translate.language' ,'=',$lang)
            ->get();

        return view('user.trainings.index',['data'=>$data,'course'=>$course]);
    }

    public function indexTraningInner($itemId)
    {
        $data = Tranings::select('tranings_translate.*','tranings_item.status','tranings_item.category','courses_translate.name as category_name','tranings_item.course_lang','tranings_item.duration','tranings_item.schedule','tranings_item.cert_img','tranings_item.created_at','tranings_item.old_price','tranings_item.price','tranings_item.employee_item_id')
            ->leftJoin('tranings_translate','tranings_translate.item_id','=','tranings_item.id')
            ->leftJoin('courses_translate','courses_translate.item_id','=','tranings_item.category')
            ->groupBy('item_id')
            ->where('tranings_translate.language' ,'=',$lang = app()->getLocale())
            ->where('tranings_translate.item_id' ,'=',$itemId)
            ->first();

        $employee = Employee::select('company_employee_item.*','company_employee_item.status','company_employee_item.img','company_employee.position','company_employee.language','company_employee.item_id')
            ->leftJoin('company_employee','company_employee.item_id','=','company_employee_item.id')
            ->groupBy('item_id')
            ->where('item_id' ,'=',$data->employee_item_id)
            ->where('company_employee.language' ,'=',$lang = app()->getLocale())
            ->first();

        return view('user.trainings.traningInner',['data'=>$data,'employee'=>$employee]);
    }

    public function getAboutData($lang,$category)
    {
        $data = Tranings::select('tranings_translate.*','tranings_item.status','tranings_item.category','courses_translate.name as category_name','tranings_item.course_lang','tranings_item.duration','tranings_item.schedule','tranings_item.cert_img','tranings_item.created_at','tranings_item.old_price','tranings_item.price','tranings_item.employee_item_id')
            ->leftJoin('tranings_translate','tranings_translate.item_id','=','tranings_item.id')
            ->leftJoin('courses_translate','courses_translate.item_id','=','tranings_item.category')
            ->groupBy('item_id')
            ->where('tranings_translate.language' ,'=',$lang)
            ->where('tranings_item.category' ,'=',$category)
            ->where('tranings_item.status' ,'=',1)
            ->paginate(10);

        return $data;
    }
}
