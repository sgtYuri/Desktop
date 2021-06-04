<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnel;
use Redirect;

class PersonnelController extends Controller
{
    protected $personnel;
    protected $request;

    protected $rules = [

            'first_name' => 'required|max:15',
            'last_name' => 'required|max:20',
            'middle_name' => 'required|max:2',
            'age' => 'required',
            'birthday' => 'required',
            'rating' => 'required'

];

    public function __construct(Personnel $personnel, Request $request)
    {
        $this->personnel = $personnel;
        $this->request = $request;
    }
    public function index()
    {

        return view('index')->with([
            'personnel' =>  $this->personnel
            ->leftjoin('statistics','statistics.personnel_id','personnel.id')
            ->select('personnel.*','statistics.bmi') 
            ->get()

        ]);
    }

    Public function create_form()
    {
        return view('form.create');
        
        }
    
    

    Public function create_save()
    {
        $this->request->validate(
            $this->rules
            /*[
            'first_name' => 'required|max:15',
            'last_name' => 'required|max:20',
            'middle_name' => 'required|max:2',
            'age' => 'required',
            'birthday' => 'required',
            'rating' => 'required'
            ]*/
        
        );
        //return dd('validated');
        $this->personnel->create(
            $this->request->except('_token')
        );

        return Redirect::route('index')->with([
            'success' => 'Nagawa na'
        ]);
    }

    public function update_form($id)
    {
return view('form.update')->with([
    'data' => $this->personnel->find($id)
    ]);
    
    }
    Public function update_save($id)
    {
        $this->request->validate(
            $this->rules
        );

        $this->personnel->find($id)->update(
            $this->request->except('_token')
        );
        return Redirect::route('index')->with([
            'success' => 'Personnel details has been updated'
        ]);
        }

        Public function delete($id)
        {
            // forceDelete()
            // idf deleted -> $this->personnel->whereId($id)->onllTrash()->delete()
            //restore -> this->personnel->whereId($id)->onlyTrash()->restore()
            $this->personnel->find($id)->delete();
                
            return Redirect::route('index')->with([
                'success' => 'Personnel details has been deleted'
            ]);
            }
            Public function trash()
                {
                    return view('index')->with([
                        'trash' => true,
                        'personnel' =>  $this->personnel
                        ->leftjoin('statistics','statistics.personnel_id','personnel.id')
                        ->select('personnel.*','statistics.bmi')
                        ->onlyTrashed()
                        ->get()
                        ]);
                    
            
    }
Public function restore($id)
{
    $this->personnel
        ->whereId($id)
        ->onlyTrashed()
        ->sole()
        ->restore();
        return Redirect::route('index')->with([
            'success' => 'Personnel has been restored'
        ]);
        }
        Public function force_delete($id)
{
    $this->personnel
        ->whereId($id)
        ->onlyTrashed()
        ->sole()
        ->forceDelete();

        return Redirect::route('crud.trash')->with([
            'success' => 'Personnel has been force deleted'
        ]);

}
}
