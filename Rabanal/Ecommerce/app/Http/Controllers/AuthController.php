<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth, Redirect;
use App\Models\User;

class AuthController extends Controller
{ 
    protected $request, $user;

    public function __construct(Request $request, User $user)
    {
        $this->request = $request; 
        $this->user = $user; 
    }

    public function index()
    {
        return view('login');
    }

    public function verify()
    {
        if(Auth::attempt($this->request->except('_token'))) {
            if(Auth::user()->account_type == 'admin')
            {
                return Redirect::route('cms.products');
            }
            return Redirect::route('home');
        }

        return back()->withError('Account not found!');
    }

    public function logout()
    {
        Auth::logout();

        return Redirect::route('login');
    }

    public function signup()
    {
        return view('signup');
    }
    public function signup_verify()
    {
        $this->request->merge([
            'account_type' => 'customer',
            'password' => bcrypt($this->request->password)
        ]);
    
        $user =$this->user->create(
            $this->request->except('_token')
        );

        if(!$user){
            return back()->withError('Email addrress already exist');
        }

        Auth::loginUsingId($user->id);

        return Redirect::route('home');

    }
    


}