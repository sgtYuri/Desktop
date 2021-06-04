<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    protected $request, $product, $session;

    public function __construct(Request $request, Product $product)
    {
        $this->request = $request;
        $this->product = $product;
        // $this->session = $request->session();
    }

    // public function add()
    // {
    //     if(!$this->session->has('cart')){
    //         $this->session->put('cart', []);
    //     }

    //     $this->$session->push('cart', $id);
    // }

    public function cart()
    {
        return view('website.pages.cart');
    }




}
