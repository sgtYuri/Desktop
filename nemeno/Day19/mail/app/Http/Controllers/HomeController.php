<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NewsMailer;
use Illuminate\Support\Facades\Redirect as FacadesRedirect;
use App\Jobs\MailerJob;
use Mail, Redirect;

class HomeController extends Controller
{
    //declare variable
  protected $request;

  public function __construct(Request $request)
  {
      $this->request = $request;
  }

    public function index ()
    {
       return view ('index');
    }
    public function template ()
    {
       return view ('emails.default_template');
    }
    public function send ()
    {
      
        MailerJob::dispatch([
            'text' => $this->request->message,
            'email' =>  $this->request->email
        ])->onQueue('emails');
        
        return Redirect::route('home');

    }
}
