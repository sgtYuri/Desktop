<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth, Redirect;

class AuthController extends Controller
{
    protected $user, $request;
    
    public function __construct(Request $request,
                                User $user)
    {
        $this->user = $user;
        $this->request = $request;
    }

    public function loginPage()
    {
        return view('login');
    }
    
    public function loginVerify()
    {
        if(Auth::attempt($this->request->except('_token'))){
            // pass
            return Redirect::route('dashboard');
        }

        // fail
        return back()->withError('Wrong login crendentials !');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function logout()
    {
        Auth::logout();

        return Redirect::route('login');
    }
}
