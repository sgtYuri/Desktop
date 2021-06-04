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

        return $contact ?? dd('no contact');

    }

    public function simple()
    {

        return dd('simple');

    }

    public function redirect()
    {


        return Redirect::route('landing');


    }

    public function landing()
    {


        return dd('redirect');


    }

    public function update($id)
    {
        return dd($id);
    }

    public function submit()
    {


        return Redirect::route('update');


    }

    public function create($id = null)
    {


        return $id ?? dd('redirect');


    }
}
