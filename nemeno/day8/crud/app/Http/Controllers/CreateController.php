<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personel;

//facade
use Redirect;

class CreateController extends Controller
{
    //declare variable
    protected $request;
     public function __construct(Request $request)
     {
         $this->request = $request;
     }
    public function index()
    {
        return view ('create');
    }
    public function save()
    {
        Personel::create(
          $this->request->except('_token')
     
        );

        return Redirect::route('home');



    }
}
