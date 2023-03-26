<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\EmployeeTranslate;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    public function index()
    {
        $data = Employee::select('company_employee.*',DB::raw("(GROUP_CONCAT(language SEPARATOR ',')) as language"),'company_employee_item.status','company_employee_item.name','company_employee_item.surname')
            ->leftJoin('company_employee','company_employee.item_id','=','company_employee_item.id')
            ->groupBy('item_id')
            ->where('company_employee.id' ,'!=','')
            ->get();
        foreach ($data as $key => $val)
        {

            $data[$key]['language'] = explode(',',$val->language);
        }
        return view('admin.pages.company.index',['data'=>$data]);
    }

    public function addEmployee($id,$key,$lang = '')
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

        return view('admin.pages.company.addEmployee',['data'=>$data]);
    }

    public function getAboutData($id,$lang)
    {
        $data = Employee::select('company_employee_item.*','company_employee_item.status','company_employee_item.img','company_employee.position','company_employee.language','company_employee.item_id')
            ->leftJoin('company_employee','company_employee.item_id','=','company_employee_item.id')
            ->groupBy('item_id')
            ->where('item_id' ,'=',$id)
            ->where('company_employee.language' ,'=',$lang)
            ->first();

        return $data;
    }

    public function saveEmployee()
    {
        $validator = validator(request()->all(),[
            'status' => 'nullable|string',
            'language' => 'required|string',
            'name' => 'required|string',
            'surname' => 'required|string',
            'position' => 'required|string',
            'newsImage' => 'required|string'
        ]);

        if (request()->get('item_id') > 0)
        {
            $id = request()->get('item_id');
            $translate = DB::table('company_employee')->where('item_id',$id)->where('language',request()->get('language'))->first();

            DB::table('company_employee_item')->where('id','=',$id)->update([
                'status' => request()->get('status'),
                'name' => request()->get('name'),
                'surname' => request()->get('surname'),
                'img' => request()->get('newsImage'),
            ]);

            if ($translate == null){
                $newsTranslate = new EmployeeTranslate();
                $newsTranslate->item_id = $id;
                $newsTranslate->position = request()->get('position');
                $newsTranslate->language = request()->get('language');
                $newsTranslate->save();
            }else{
                EmployeeTranslate::where('item_id','=',$id)->where('language','=',request()->get('language'))->update([
                    'position' => request()->get('position')
                ]);
            }
        }else{
            if ($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }else {
                $news = new Employee();
                $news->status = request()->get('status');
                $news->name = request()->get('name');
                $news->surname = request()->get('surname');
                $news->img = request()->get('newsImage');
                $news->save();

                $newsTranslate = new EmployeeTranslate();
                $newsTranslate->item_id = $news->id;
                $newsTranslate->language = request()->get('language');
                $newsTranslate->position = request()->get('position');
                $newsTranslate->save();
            }
        }

        return redirect('admin/company');
    }

    public function trashEmployeeInfo($id)
    {
        if (isset($id) && $id > 0){
            $about = Employee::where('id',$id)->delete();
            $aboutT = DB::table('company_employee')->where('item_id',$id)->delete();
            if ($about && $aboutT)
            {
                return redirect('admin/company');
            }
        }else{
            return redirect('admin/company');
        }
    }

    public function trashEmployeeOnlyTranslate($id)
    {
        if (isset($id) && $id > 0){
            $news = DB::table('company_employee')->where('id',$id)->delete();
            if ($news)
            {
                return redirect('admin/company');
            }
        }else{
            return redirect('admin/company');
        }
    }
}
