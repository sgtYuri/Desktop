<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reminder;
use Redirect;

class ReminderController extends Controller
{

   


    protected $reminder;
    
    
    protected $request;

    public function __construct(Reminder $reminder, request $request)
    {

        $this->reminder = $reminder;
        $this->request = $request;

    }

public function create()
{
    
    return view('form');
}


    /*public function form()
    {
        +return dd(

            $this->request->all()

            $this->reminder->create([

            'title' => $this->request->title,
            'description' => $this->request->description,
            'priority' => $this->request->priority,
            'due_date' => $this->request->due_date,
            'status' => $this->request->status,
            ]);
    }
    */
    
public function form()
{
    $this->request->validate([
        'title' => 'required',
        'description' => 'required',
        'priority' => 'required',
        'due_date' => 'required',
        'status' => 'required'
    ]);
    $db = $this->reminder->create(
        $this->request->except('_token')

    );

    return Redirect::route('crud_index');

}

public function index()
{
    return view('index')->with([
        'reminder' => $this->reminder->all()
    ]);

}

public function create_from_save()
{

    $this->request->validate([
        'title' => 'required',
        'description' => 'required',
        'priority' => 'required',
        'due_date' => 'required',
        'status' => 'required'
    ]);


            $db = $this->reminder->create(
                $this->request->except('_token')
            );
    
            return Redirect::route('crud_index')->with([
                'success' => "Reminder has been created"

            ]);
            }


            
        public function update_form()
            {

                return view('update_form')->with([

                'reminder'=> $this->reminder->find($id)

                ]);
                }


        public function save($id)
        {
            $this->request->validate([
                'title' => 'required',
                'description' => 'required',
                'priority' => 'required',
                'due_date' => 'required',
                'status' => 'required'
            ]);           

            $db = $this
                ->reminder
                ->find($id)
                ->update(
                $this->request->except('_token')
                );

                return Redirect::route('crud_index')->with([
                    'success'=>'Reminder has been updated'
                ]);

        }

        public function delete($id)
        {
            $this->reminder
                ->find($id)
                ->delete();

                return Redirect::route('crud_index')->with([
                    'success'=>'Reminder has been deleted'
                ]);

        }

}