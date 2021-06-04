<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class TestController extends Controller
{
    public function index()
    {

        $db = DB::table('migrations')->get();

        return dd($db);
    }

    
}
