<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $lang = app()->getLocale();
        $data = $this->getAboutData($lang);

        return view('user.company.index',['data'=>$data]);
    }

    public function getAboutData($lang)
    {
        $data = Employee::select('company_employee_item.*','company_employee_item.status','company_employee_item.img','company_employee.position','company_employee.language','company_employee.item_id')
            ->leftJoin('company_employee','company_employee.item_id','=','company_employee_item.id')
            ->groupBy('item_id')
            ->where('company_employee.language' ,'=',$lang)
            ->where('company_employee_item.status' ,'=',1)
            ->get();

        return $data;
    }
}
