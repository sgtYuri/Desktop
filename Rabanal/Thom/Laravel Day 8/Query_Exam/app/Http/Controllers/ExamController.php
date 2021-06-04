<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ExamController extends Controller
{
    public function exam1(){
        $data = DB::table('personnel')
        ->get();
        dd($data );
    }

    public function exam2(){
        $data = DB::table('personnel')->avg('age');
        dd($data );
    }

    public function exam3(){
        $data = DB::table('personnel')
        ->find(8);
        dd($data );
    }

    public function exam4(){
        $data = DB::table('personnel')
        ->count();
        dd($data );

    }
public function exam5(){
    $data = DB::table('personnel')
    ->join('statistics','statistics.personnel_id','personnel.id')
    ->select('personel.first_name','personel.last_name','personel.middle_name','statistics.bmi')
    ->get();
    dd($data );

}
    public function exam6(){
        $data = DB::table('statistics')
        ->sum('weight');
        dd($data );

    
    }
    public function exam7(){
        $data = DB::table('personnel')
        ->get('last_name');
        dd($data );
    }
    public function exam8(){
        $data = DB::table('personnel')
        ->join('statistics','statistics.personnel_id','personnel.id')
        ->get();
        dd($data );
    }
    public function exam9(){
        $data = DB::table('personnel')
        ->where('age','>',25)
        ->get();
        dd($data );

    }
    public function exam10(){
        $data = DB::table('personnel')
        ->where('age','<',30)
        ->get();
        dd($data );
    
    }
    public function exam11(){
        $data = DB::table('statistics')
        ->where('height','>',150)
        ->get();
        dd($data );
                
    }
    public function exam12(){
        $data = DB::table('personnel')
        ->join('statistics','statistics.personnel_id','personnel.id')
        ->select('personnel.first_name as fname','personnel.last_name as lname',
        'personnel.middle_name as mname','statistics.bmi as bmi')
        ->where('age','>','25')
        ->get();
        dd($data );

    }
    public function exam13(){
        $data = DB::table('statistics')
        ->where('height','>','130')
        ->sum();
        dd($data );

    }
    public function exam14(){
        $data = DB::table('personnel')
        ->where('id','>','10')
        ->select('last_name')
        ->get();
        dd($data );
        
    }
    public function exam15(){
        $data = DB::table('personnel')
        ->join('statistics','statistics.id','statistics.personnel_id')
        ->where('statistics.bmi','=','obese')
        ->get();
        dd($data ); 
        
    }
    public function exam16(){
        $data = DB::table('personnel')
        ->orderBy('first_name', 'ASC')
        ->get();
        dd($data );  
        
    }
    public function exam17(){
        $data = DB::table('personnel')
        ->orderBy('first_name', 'DESC')
        ->limit('2')
        ->get();
        dd($data );
    
    }
    public function exam18(){
        $data = DB::table('personnel')
        ->latest('age')
        ->limit('1')
        ->get();
        dd($data );    

    }
    public function exam19(){
        $data = DB::table('personnel')
        ->oldest('age')
        ->limit('1')
        ->get();
        dd($data );       
        
        
    }
}
