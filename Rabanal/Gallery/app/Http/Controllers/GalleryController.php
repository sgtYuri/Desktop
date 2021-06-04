<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Redirect;
use Storage;

class GalleryController extends Controller
{
    protected $gallery, $request;

    public function __construct(Request $request, Gallery $gallery )
    {
        $this->gallery = $gallery;
        $this->request = $request;
    }

    public function index()
    {
       $gallery =$this->gallery->all();
        return view('index')->with([
            'gallery' => $gallery
        ]);
    }
    public function create()
    {
       return view('create');
    }

    public function add()
    {
        $name= rand(1,9) .'_'. time() .'.'.
        $this->request->photos->extension();
        Storage::disk('public')->putFileAs('products',
        $this->request->photos,
        $name
        );

        $this->request->merge([
            'photo' => $name
        ]);

         $this->gallery->create(
             $this->request->except('_token')
         );
         return Redirect::route('index');
    }

    public function delete($id)
    {
       $this->gallery->find($id)->delete();
       return Redirect::route('index');
    }
}
