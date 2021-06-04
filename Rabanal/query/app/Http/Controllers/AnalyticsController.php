<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\analytics;
use Redirect;
use Storage;

class AnalyticsController extends Controller
{
    protected $analytics, $request;

    public function __construct(Request $request, Analytics $analytics )
    {
        $this->analytics = $analytics;
        $this->request = $request;
    }
    public function index()
    {
        $analytics =$this->analytics->all();
        return view('index')->with([
            'analytics' => $analytics
        ]);  
    }

    public function create()
    {
        return view('create');   
    }

    public function save()
    { 
        $this->analytics->create(
            $this->request->all()
        );
        return Redirect::route('index');
    }
    
    public function update($id)
    { 
        return view('update')->with([
            'analytics' => $this->analytics->find($id)
        ]);
        return Redirect::route('index');
    }

    public function update_save($id)
    {
        $this->analytics->find($id)->update(
            $this->request->all()
        );
        return Redirect::route('index');
    }
    public function delete($id)
    {
       $this->analytics->find($id)->delete();
       return Redirect::route('index');
    }


    
}
