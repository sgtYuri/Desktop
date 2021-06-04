<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class QueryController extends Controller
{
/*
    public function join()
    {
        
        $db = DB::table('song')
            ->join('artist','artist.id','song.artist_id')
            ->select('song.*','artistname as artist_name')
            ->get();

        return dd($db);

        

    }
*/
    public function find()
    {

        $db = DB::table('')->find();

        return dd($db);

    }

    public function pluck()
    {

        $db = DB::table('')->pluck('');

        return dd($db);

    }

    public function simple()
    {
        $db = DB::table('')->get();

        return dd($db);
    }

    public function count(){
        $db = DB::table('song')
        ->count()
        
                        ->join('album','album_name.id', 'song.album_id')
                        ->join('artist','artist_name.id','song.artist_id')
                        ->join('genre','genre_name.id','song.genre_id')
                        ->select('song.name as title','album_name.id','song.artist_id')
                        ->count();

        return dd($db);        
        
    }

    
}
