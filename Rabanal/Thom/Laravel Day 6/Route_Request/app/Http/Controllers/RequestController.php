<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class RequestController extends Controller
{

    protected $request;

    public function __contruct(Request $request)
    {
        $this->request = $request;
    }

    public function name()
    {
        return dd($this->request->except('_token'));   
    }

    public function form()
    {

        return view('form');

    }
}
