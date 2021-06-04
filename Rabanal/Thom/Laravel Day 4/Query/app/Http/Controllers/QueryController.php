<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class QueryController extends Controller
{
    public function simple()
    {
        $db = DB::table('song')
        ->get();

        return dd($db);
    }
}
