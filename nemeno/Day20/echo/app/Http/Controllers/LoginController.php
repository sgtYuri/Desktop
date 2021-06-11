<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //declare variable
  protected $request;

  public function __construct(Request $request)
  {
      $this->request = $request;
  }

  public function index()
  {
      return view('app');
  }
    public function login()
    {
        return view('login');
    }
    public function login_verify()
    {
        return dd($this->request->all());
    }
    public function registration ()
    {
        return view('registration');
    }
    
}
