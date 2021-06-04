<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Storage, Carbon\Carbon;
use Redirect;

class ProductController extends Controller
{
        protected $product;
        protected $request;

        public function __construct(Product $product, Request $request)
        {
            $this->product = $product;
            $this->request = $request;
        }

        public function index()
        {
        return view('welcome')->with([
            'products' => $this->product->all()
        ]);   
    }   
        public function add()
        {
        return view('add');
    
    }
    public function save()
    {
        $name = $this->createFilename();
        
        $save = Storage::disk('public')
            ->putFileAs(
                'products',
                $this->request->file,
                $name
        
            );
      $this->request->merge([
          'photo' => $name
      ]);


      $this->product->create(
        $this->request->except('_token')

      );
       
    return Redirect::route('product');
       }
     public function getFileType()
    {
        return $this->request->file('file')->extension();
    }



    public function createFilename()
    {
        return rand(11111,99999) .'_'.
            strtotime(Carbon::now()) . '_' .
            Carbon::now()->format('mdY') . '' .
            Carbon::now()->format('his') . '.'.
            $this->getFileType();
}
}
