<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Redirect;

class RouteController extends Controller
{
    public function index()
    {

        return view('index');

    }

    public function post()
    {

        return dd('this is post page');

    }

    public function home()
    {

        return Redirect::route('contact','4848484');

    }

    public function about()
    {

        return dd('this is about page');

    }

    public function contact($contact = null)
    {

        return !is_null($contact) ? dd($contact) : dd('no contact');

        return $contact ?? dd('no contact');

    }
}
