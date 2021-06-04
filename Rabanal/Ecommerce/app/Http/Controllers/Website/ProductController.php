<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    protected $request, $product;

    public function __construct(Request $request,
                                Product $product)
    {
        $this->request = $request;
        $this->product = $product;
    }

    public function home()
    { 
        $data = $this->product->all();

        if($this->request->has('q')){
            $q = $this->request->q;
            $data = $this->product->where('name','like','%'.$q.'%')
                                  ->orWhere('category','like','%'.$q.'%')
                                  ->orWhere('price','like','%'.$q.'%')
                                  ->orWhere('details','like','%'.$q.'%')
                                  ->get();
        }
        return view('website.pages.home')->with([
            'data' => $data
        ]);
    }

    

}