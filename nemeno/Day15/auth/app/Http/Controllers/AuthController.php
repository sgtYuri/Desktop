<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Message;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Redirect as FacadesRedirect;
use Redirect, Storage, Auth;

class AuthController extends Controller
{
  //declare variable
  protected $request;

  public function __construct(Request $request)
  {
      $this->request = $request;
  }

    public function index ()
    {
        return view('index');
    }
    public function login ()
    {
        return view('login');
    }
    public function registration ()
    {
        return view('registration');
    }
    public function login_verify ()
    {
        $login= Auth::attempt($this->request->except('_token'));

        if($login){
            //redirect to homepage
          return Redirect::route('app');
        }
       return redirect::route('app.login')
                    ->withError('Invalid User Credentials');
    }
    public function registration_verify ()
    {
        /**
         * 1. upload image in storage
         * 2.save on database
         * 3. Redirect user to login
         */
        //upload
        //putFile('folder_name',fileObject)
        $filename =Storage::disk('public')->putFile('avatar', $this->request->file);

        $this->request->merge([
            'avatar' => $filename,
            //encrpt password
            'password' =>bcrypt($this->request->password)
        ]);
        //save to the database
        User::create(
            $this->request->except('file','token')
        );
        //redirect
        return Redirect::route('app.login');
      
    }
    public function logout ()
    {
        Auth::logout();
        return Redirect::route('app.login');
    }

    public function chat ()
    {

        $data = Message::select('messages.*', 'users.avatar', 'users.name')
        ->join('users', 'users.id', 'messages.user_id')
        ->orderBy('messages.created_at','DESC')
        ->get();

       return view('chat')->with([
            'data' => $data
        ]);
    }

    public function chat_send ()
    {
       
     $this->request->merge([
        'user_id' =>Auth::user()->id
     ]);

     Message::create(
        $this->request->except('_token')
     );

     return Redirect::route('app.chat');

    }
}
