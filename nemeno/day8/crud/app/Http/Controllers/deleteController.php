<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personel;
use Redirect;

class deleteController extends Controller
{


     public function index($id)
     {
        Personel::find($id)->delete();

          return Redirect::route('home');

     }

}
