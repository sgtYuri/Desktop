<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnels;
use App\Models\Statistics;
class PersonnelsController extends Controller
{
    public function simple_query()
    {
        //get all data
        $data=Personnels::all();
       
        return response()->json($data,200,[], JSON_PRETTY_PRINT);
    }

    public function avg()
    {
        //will get average of a column
        $data=Personnels::avg('age');
                     //    ->wheregender('male')->avg('age')
                      //  ->get();
                      return response()->json($data,200,[], JSON_PRETTY_PRINT);
    }
  
    public function find()
    {
        //get all data by its ID
        //pass the ID inside the find
        $data=Personnels::find(8);

       
        return response()->json($data,200,[], JSON_PRETTY_PRINT);
    }
    public function count()
    {
        //will show the number of results in the query
        $data=Personnels::count();
     
        return response()->json($data,200,[], JSON_PRETTY_PRINT);
    }
    
  //  public function avg()
   // {
        //will get average of a column
      //  $data=Personnels::avg('age');
      //  wheregender('male')->avg('age')
     //   return dd($data);
 //   }
    public function exists()
    {
        //will show the number of results in the query
        $data=Personnels::select('last_name')->get();
                                  
        return response()->json($data,200,[], JSON_PRETTY_PRINT);
    }

    public function where()
    {
        //where (column,,operator,string)
        //where ('gender','=', 'female')
        $data=Personnels::select('age')
                       // ->whereGender('female')
                       ->where('age','<', 25)
                        //->where('name','LIKE','%a%')
                        //->where('status','LIKE','%regular%')
                        ->get();
        return response()->json($data,200,[], JSON_PRETTY_PRINT);
    }
    public function orwhere()
    {
        $data=Personnels::select('age')
                        ->avg('age','<', 30);
                       // ->orwhere('age','=', 26)
                       // ->orwhere('age','>', 18)
                       // ->get();
        return response()->json($data,200,[], JSON_PRETTY_PRINT);
    }
    public function wherebetween()
    {
        $data=Statistics::where('height','<', 150)
                        //->whereBetween('birthday',[
                         //       '1998-02-23',
                          //      '2021-02-01',
                          //  ])
                         //   '20',
                          //  '27',
                       // ])
                            ->count();
        return response()->json($data,200,[], JSON_PRETTY_PRINT);
    }
    public function wherein()
    {
        $data=Statistics::select('weight')
                        ->where('weight','>', 130)
                        ->sum('weight');
        return response()->json($data,200,[], JSON_PRETTY_PRINT);
    }
   // public function wherenull()
   // {
     //   $data=Personnels::select('name','gender','age')
                  //      ->whereNull('created_at')
                  //      ->get();
      //  return response()->json($data,200,[], JSON_PRETTY_PRINT);
    //}
    public function select()
    {
       // select specefic column data
       $data=Personnels::select('last_name')
                        ->where('id','>',10)
                        ->get();
       return response()->json($data,200,[], JSON_PRETTY_PRINT);
   }



}
