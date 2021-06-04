<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Messages;
use Auth, Redirect;

class AuthController extends Controller
{
    protected $user, $request, $message;
    
    public function __construct(Request $request,
                                User $user,
                                Messages $message)
    {
        $this->user = $user;
        $this->request = $request;
        $this->message = $message;
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
        return view('dashboard')->with([
            'chatmsg' => $this->message->all()
        ]);
    }

    public function logout()
    {
        Auth::logout();

        return Redirect::route('login');
    }

    public function signup_form()
    {
        return view('signup-form');
    }

    public function signup()
    {
        $this->request->validate([
            'fullname' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        User::create([
            'fullname'=> $this->request->fullname,
            'username'=> $this->request->username,
            'password'=> bcrypt($this->request->password)
        ]);       
        
        return Redirect::route('signup.form')->with([
            'success' => 'successfully created!!'
        ]);
    }

    public function sendMessage()
    {
        $this->request->merge([
            'user_id' => Auth::user()->id
        ]);

        $this->message->create(
            $this->request->except('_token')
        );

        return back();
    }
}
