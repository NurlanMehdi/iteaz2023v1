<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function indexCart()
    {
        return view('user.cart.index');
    }

    public function indexBrowsing()
    {
        return view('user.browsingInner');
    }

    public function termsPage()
    {
        return view('user.terms');
    }

    public function siteMapPage()
    {
        return view('user.sitemap');
    }

    public function errorPage()
    {
        return view('user.error');
    }
}
