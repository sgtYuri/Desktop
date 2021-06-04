<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Statistics;
class StatisticsController extends Controller
{
    
       
        public function avg()
         {
              //  will get average of a column
                $data=Statistics::avg('weight');
                //whereweight('male')->avg('age');
                return response()->json($data,200,[], JSON_PRETTY_PRINT);
        }
    public function exists()
    {
        //will show the number of results in the query
        $data=Statistics::whereName('anna')->exists();
                         
        return dd($data);
    }

    public function where()
    {
        //where (column,,operator,string)
        //where ('gender','=', 'female')
        $data=Statistics::select('name', 'gender','age','status')
                       // ->whereGender('female')
                      //  ->where('age','>', 20)
                        //->where('name','LIKE','%a%')
                        ->where('status','LIKE','%regular%')
                        ->get();
        return response()->json($data,200,[], JSON_PRETTY_PRINT);
    }
    public function orwhere()
    {
        $data=Statistics::select('name','age')
                        ->where('age','=', 9999)
                        ->orwhere('age','=', 26)
                        ->orwhere('age','>', 18)
                        ->get();
        return response()->json($data,200,[], JSON_PRETTY_PRINT);
    }
    public function wherebetween()
    {
       
        $data=Statistics::select('weight')
                        //->whereBetween('birthday',[
                         //       '1998-02-23',
                          //      '2021-02-01',
                          //  ])
                          ->where('weight','<', 130)
                         //   '20',
                          //  '27',
                       // ])
                            ->get();
        return response()->json($data,200,[], JSON_PRETTY_PRINT);
    }
    public function wherein()
    {
        $data=Statistics::select('name','gender','age')
                        ->whereIn('age',[18,20,27])
                        ->get();
        return response()->json($data,200,[], JSON_PRETTY_PRINT);
    }
    public function wherenull()
    {
        $data=Statistics::select('name','gender','age')
                        ->whereNull('created_at')
                        ->get();
        return response()->json($data,200,[], JSON_PRETTY_PRINT);
    }




}
