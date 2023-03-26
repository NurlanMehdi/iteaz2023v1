<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use App\Models\CoursesTranslate;
use App\Models\Employee;
use App\Models\Tranings;
use App\Models\TraningsTranslate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TraningsController extends Controller
{
    public function index()
    {
        $course = Courses::select('courses_translate.*',DB::raw("(GROUP_CONCAT(language SEPARATOR ',')) as language"),'courses_item.status')
            ->leftJoin('courses_translate','courses_translate.item_id','=','courses_item.id')
            ->groupBy('item_id')
            ->where('courses_translate.id' ,'!=','')
            ->get();

        $traning = Tranings::select('tranings_translate.*',DB::raw("(GROUP_CONCAT(language SEPARATOR ',')) as language"),'tranings_item.status')
            ->leftJoin('tranings_translate','tranings_translate.item_id','=','tranings_item.id')
            ->groupBy('item_id')
            ->where('tranings_translate.id' ,'!=','')
            ->get();
        foreach ($course as $key => $val)
        {

            $course[$key]['language'] = explode(',',$val->language);
        }
        foreach ($traning as $key => $val)
        {

            $traning[$key]['language'] = explode(',',$val->language);
        }
        return view('admin.pages.tranings.index',['data'=>$traning,'course'=>$course]);
    }

    //Yeni kursun yaradilmasi ucun olan kodlar bashlangic

    public function addCourse($id,$key,$lang = '')
    {
        if ($key == 'new')
        {
            $data = new \stdClass();
        }elseif ($key == 'edit'){
            $data = DB::table('courses')->where('id',$id)->first();
        }else{
            $data = new \stdClass();
            $data->language = $lang;
            $data->item_id = $id;
        }

        return view('admin.pages.tranings.addCourse',['data'=>$data]);
    }

    public function saveCourse()
    {
        $validator = validator(request()->all(),[
            'status' => 'nullable|string',
            'language' => 'required|string',
            'name' => 'required|string',
        ]);
        if (request()->get('item_id') > 0)
        {
            $id = request()->get('item_id');
            $translate = DB::table('courses_translate')->where('item_id',$id)->where('language',request()->get('language'))->first();

            DB::table('courses_item')->where('id','=',$id)->update([
                'status' => request()->get('status'),
            ]);

            if ($translate == null){
                $coursesTranslate = new CoursesTranslate();
                $coursesTranslate->item_id = $id;
                $coursesTranslate->name = request()->get('name');
                $coursesTranslate->language = request()->get('language');
                $coursesTranslate->save();


            }else{
                CoursesTranslate::where('item_id','=',$id)->where('language','=',request()->get('language'))->update([
                    'name' => request()->get('name'),
                ]);
            }
        }else{
            if ($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }else {
                $courses = new Courses();
                $courses->status = request()->get('status');
                $courses->save();

                $coursesTranslate = new CoursesTranslate();
                $coursesTranslate->item_id = $courses->id;
                $coursesTranslate->language = request()->get('language');
                $coursesTranslate->name = request()->get('name');
                $coursesTranslate->save();
            }
        }


        return redirect('admin/tranings');
    }


    //Yeni kursun yaradilmasi ucun olan kodlar Bitish

    public function trashInfo($id,$key)
    {
        if (isset($id) && $id > 0){
            if ($key == 'course')
            {
                $about = Courses::where('id',$id)->delete();
                $aboutT = CoursesTranslate::where('item_id',$id)->delete();
            }else{
                $about = Tranings::where('id',$id)->delete();
                $aboutT = TraningsController::where('item_id',$id)->delete();
            }

            if ($about && $aboutT)
            {
                return redirect('admin/tranings');
            }
        }else{
            return redirect('admin/tranings');
        }
    }

    public function trashOnlyTranslate($id,$key)
    {
        if (isset($id) && $id > 0){
            if ($key == 'course')
            {
                $news = DB::table('courses_translate')->where('id',$id)->delete();
            }else{
                $news = DB::table('tranings_translate')->where('id',$id)->delete();
                $news = DB::table('tranings_instructors')->where('translate_id',$id)->delete();
                $news = DB::table('tranings_lesson_structure')->where('translate_id',$id)->delete();
            }

            if ($news)
            {
                return redirect('admin/tranings');
            }
        }else{
            return redirect('admin/tranings');
        }
    }

    public function addTranings($id,$key,$lang = 'az')
    {
        $course = Courses::select('courses_translate.*',DB::raw("(GROUP_CONCAT(language SEPARATOR ',')) as language"),'courses_item.status')
            ->leftJoin('courses_translate','courses_translate.item_id','=','courses_item.id')
            ->groupBy('item_id')
            ->where('courses_translate.language' ,'=',$lang)
            ->get();

        $employee = Employee::select('company_employee_item.*','company_employee.position','company_employee.item_id')
            ->leftJoin('company_employee','company_employee.item_id','=','company_employee_item.id')
            ->groupBy('item_id')
            ->where('company_employee.language' ,'=',$lang)
            ->get();

        if ($key == 'new')
        {
            $data = new \stdClass();
        }elseif ($key == 'edit'){
            $data = Tranings::select('tranings_translate.*',DB::raw("(GROUP_CONCAT(language SEPARATOR ',')) as language"),'tranings_item.status','tranings_item.course_lang','tranings_item.duration','tranings_item.schedule','tranings_item.cert_img','tranings_item.old_price','tranings_item.price','tranings_item.employee_item_id')
                ->leftJoin('tranings_translate','tranings_translate.item_id','=','tranings_item.id')
                ->groupBy('item_id')
                ->where('tranings_translate.language' ,'=',$lang)
                ->where('item_id' ,'=',$id)
                ->first();
        }else{
            $data = new \stdClass();
            $data->language = $lang;
            $data->item_id = $id;
        }

        return view('admin.pages.tranings.addTranings',['data'=>$data,'course'=>$course,'employee'=>$employee]);
    }

    public function saveTranings()
    {
        $validator = validator(request()->all(),[
            'status' => 'nullable|string',
            'name' => 'required|string',
            'old_price' => 'required|integer',
            'price' => 'required|integer',
            'language' => 'required|string',
            'course_lang' => 'required|string',
            'course' => 'required|integer',
            'duration' => 'required|string',
            'schedule' => 'required|string',
            'info' => 'required|string',
            'cert_info' => 'required|string',
            'newsImage' => 'required|string',
            'employee' => 'required|integer',
        ]);
        if (request()->get('item_id') > 0)
        {
            $id = request()->get('item_id');
            $translate = DB::table('tranings_translate')->where('item_id',$id)->where('language',request()->get('language'))->first();

            DB::table('tranings_item')->where('id','=',$id)->update([
                'status' => request()->get('status'),
                'course_lang' => request()->get('course_lang'),
                'price' => request()->get('price'),
                'old_price' => request()->get('old_price'),
                'category' => request()->get('course'),
                'duration' => request()->get('duration'),
                'schedule' => request()->get('schedule'),
                'cert_img' => request()->get('newsImage'),
                'employee_item_id' => request()->get('employee'),
            ]);

            if ($translate == null){
                $coursesTranslate = new TraningsTranslate();
                $coursesTranslate->item_id = $id;
                $coursesTranslate->info = request()->get('info');
                $coursesTranslate->cert_info = request()->get('cert_info');
                $coursesTranslate->name = request()->get('name');
                $coursesTranslate->language = request()->get('language');
                $coursesTranslate->save();


            }else{
                TraningsTranslate::where('item_id','=',$id)->where('language','=',request()->get('language'))->update([
                    'info' => request()->get('info'),
                    'cert_info' => request()->get('cert_info'),
                ]);
            }
        }else{
            if ($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }else {
                $courses = new Tranings();
                $courses->status = request()->get('status');
                $courses->price = request()->get('price');
                $courses->old_price = request()->get('old_price');
                $courses->course_lang = request()->get('course_lang');
                $courses->category = request()->get('course');
                $courses->duration = request()->get('duration');
                $courses->schedule = request()->get('schedule');
                $courses->cert_img = request()->get('newsImage');
                $courses->employee_item_id = request()->get('employee');
                $courses->save();

                $coursesTranslate = new TraningsTranslate();
                $coursesTranslate->item_id = $courses->id;
                $coursesTranslate->info = request()->get('info');
                $coursesTranslate->language = request()->get('language');
                $coursesTranslate->name = request()->get('name');
                $coursesTranslate->cert_info = request()->get('cert_info');
                $coursesTranslate->save();
            }
        }


        return redirect('admin/tranings');
    }


}
