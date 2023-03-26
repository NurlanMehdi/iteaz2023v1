<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Contacts;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contactData = Contacts::get();

        return view('user.contact.index',['contactData'=>$contactData]);
    }
}
