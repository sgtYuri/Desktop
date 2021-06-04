<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IsPersonnel;
use App\Products;
use Storage;
use Redirect;


class ProductsController extends Controller
{
    protected $products, $request;

    public function __construct(Request $request, Products $products )
    {
        $this->products = $products;
        $this->request = $request;
    }

    public function products()
    {
       $products =$this->products->all();
        return view('productsindex')->with([
            'products' => $products
        ]);
    }

    public function add_products()
    {
        return view('productsadd');
    }

    public function update_products($id)
    {
        return view('productsupdate')->with([
            'products' => $this->products->find($id)
        ]);
    }

    public function save_products()
    {
        $name= rand(1000,9000) .'_'. time() .'.'.
        $this->request->photos->extension();
        Storage::disk('public')->putFileAs('products',
        $this->request->photos,
        $name
        );

       $this->request->merge([
           'photo' => $name
       ]);

        
        $this->products->create(
            $this->request->except('_token')
        );
        return Redirect::route('Home');
    }

    public function update_save_products($id)
    {
        
        $this->products->find($id)->update(
            $this->request->all()
        );

        
        return Redirect::route('Home');
    }

    public function delete_products($id)
    {
       $this->products->find($id)->delete();
       return Redirect::route('Home');
    }

   


}
