<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class QueryController extends Controller
{

    public function wherenull()
    {
        $db = DB::table('song')
                ->whereNotNull('created_at')
                ->get();
                
        return dd($db);
    }

    public function wherein()
    {
        /*
        $db = DB::table('song')
                ->wherein('id',[
                    1, 3, 5, 6
                ])
                
                ->get();
                
        return dd($db);
        */

        $db = DB::table('song')
                ->whereNotIn('id',[
                    1, 3, 5, 6
                ])
                
                ->get();
                
        return dd($db);
    }

    public function orwhere()
    {
        $db = DB::table('song')
                ->wheregenre_id(1)
                ->orwhere('genre_id','=','3')
                ->get();
                
        return dd($db);
    }


    public function simplewhere5()
    {
        $db = DB::table('song')
                ->wheregenre_id(2)
                ->get();
                
        return dd($db);
    }

    public function simplewhere4()
    {
        $db = DB::table('genre')
                ->where('genre','LIKE','%a%')
                ->get();
                
        return dd($db);
    }

    public function simplewhere3()
    {
        $db = DB::table('song')
                ->where('id','<',2)
                ->get();
                
        return dd($db);
    }

    public function simplewhere2()
    {
        $db = DB::table('song')
                ->where('album_id','|=',1)
                ->get();
                
        return dd($db);
    }

    public function simplewhere()
    {
        $db = DB::table('song')
                ->where('album_id','=',1)
                ->get();
                
        return dd($db);
    }
    public function avg()
    {
        $db = DB::table('song')
                ->avg('id');
                
                

        return dd($db);
    }
    public function sum()
    {
        $db = DB::table('song')
                ->sum('id');

        return dd($db);
    }

    public function count()
    {
        $db = DB::table('song')
                ->count();

        return dd($db);
    }
    public function songAlbum()
    {
        $db = DB::table('song')
                ->join('album','album.id','song.album_id')
                ->join('artist','artist.id','song.artist_id')
                ->join('genre','genre.id','song.genre_id')
                ->select('song.name as album')
                ->get();

        return dd($db);
    }

    }

    

