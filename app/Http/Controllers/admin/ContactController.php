<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contacts;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Context;

class ContactController extends Controller
{
    public function index()
    {
        $contactData = Contacts::first();
        return view('admin.pages.contact.index',['contactData'=>$contactData]);
    }

    public function saveContactParametrs()
    {
        $validator = validator(request()->all(),[
            'page' => 'nullable|integer',
            'email' => 'nullable|string',
            'phone' => 'required|integer',
            'address' => 'required|string',
            'workingHours' => 'required|string',
            'social-linkedn' => 'required|string',
            'social-facebook' => 'required|string',
            'social-instagram' => 'required|string',
            'social-youtube' => 'required|string',
            'social-telegram' => 'required|string',
        ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
            $social =
                [
                    'linkedn' => \request()->get('social-linkedn'),
                    'facebook' => \request()->get('social-facebook'),
                    'instagram' => \request()->get('social-instagram'),
                    'youtube' => \request()->get('social-youtube'),
                    'telegram' => \request()->get('social-telegram'),
                ];


            $social = json_encode($social);

            $contactData = Contacts::where('page',\request()->get('page'))->first();

            if ($contactData == null) {

                $contact = new Contacts();
                $contact->page = \request()->get('page');
                $contact->email = \request()->get('email');
                $contact->phone = \request()->get('phone');
                $contact->workingHours = \request()->get('workingHours');
                $contact->address = \request()->get('address');
                $contact->social = $social;
                $contact->save();
            }else{

                $update = Contacts::where('id','=',$contactData->id)->update([
                    'page' => request()->get('page'),
                    'email' => request()->get('email'),
                    'phone' => request()->get('phone'),
                    'address' => request()->get('address'),
                    'workingHours' => request()->get('workingHours'),
                    'social' => $social
                ]);
            }

            return $this->index();
        }

    }
}
