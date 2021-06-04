<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function aboutus ()
    {
        return view('aboutus');

    }
    public function contact ()
    {
        return view('contact');

    }
    public function services ()
    {
        return view('services');

    }
    public function gallery ()
    {
        return view('gallery');

    }
    public function profileanthony ()
    {
        return view('profileanthony');

    }
    public function profilealbert ()
    {
        return view('profilealbert');

    }
    public function servicescleaning ()
    {
        return view('servicescleaning');

    }
    public function authuserforgotpassword ()
    {
        return view('authuserforgotpassword');

    }
    public function searchproduct ()
    {
        return view('searchproduct');

    }
    public function productsfilterallfree ()
    {
        return view('productsfilterallfree');

    }
    public function members ()
    {
        return view('members');

    }
    public function print ()
    {
        return view('print');

    }

    public function ordercheckout ()
    {
        return view('ordercheckout');

    }
    public function facebookaccountmemberslogin  ()
    {
        return view('facebookaccountmemberslogin ');

    }

}