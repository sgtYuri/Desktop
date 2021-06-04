<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;


class TestController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function about_us(){
        return view('about_us');
    }

    public function services(){
        return view('services');
    }

    public function gallery(){
        return view('gallery');
    }


    public function contact(){
        return view('contact');
    }
}