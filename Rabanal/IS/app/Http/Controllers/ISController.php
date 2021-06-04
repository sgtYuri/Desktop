<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IsPersonnel;
use Redirect;


class ISController extends Controller
{
    protected $ispersonnel, $request;

    public function __construct(Request $request, IsPersonnel $ispersonnel )
    {
        $this->ispersonnel = $ispersonnel;
        $this->request = $request;
    }

    public function index()
    {
       $ispersonnel =$this->ispersonnel->all();
        return view('index')->with([
            'is_personnel' => $ispersonnel
        ]);
    }

    public function create()
    {
        return view('create');
    }

    public function update($id)
    {
        return view('update')->with([
            'ispersonnel' => $this->ispersonnel->find($id)
        ]);
    }

    public function save()
    {
        
        $this->ispersonnel->create(
            $this->request->all()
        );


        return Redirect::route('homepage');
    }

    public function update_save($id)
    {
        
        $this->ispersonnel->find($id)->update(
            $this->request->all()
        );

        
        return Redirect::route('homepage');
    }

    public function delete($id)
    {
       $this->ispersonnel->find($id)->delete();
       return Redirect::route('homepage');
    }

}
