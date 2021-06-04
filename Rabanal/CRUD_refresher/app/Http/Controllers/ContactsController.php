<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactsModel;

class ContactsController extends Controller
{

    protected $contacts;
    protected $request;

    protected $rules = [

        'contacts' => 'required|max:15',
    ];
    
    public function index()
    {
            return view('contacts')->with([
                'contacts' => ContactsModel::all()
            ]);
    }

    Public function create_form()
    {
        return view('form.create');
        
    }


}




