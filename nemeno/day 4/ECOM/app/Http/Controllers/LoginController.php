<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index ()
    {
      return view ('login');
    }
    public function dashboard ()
    {
      return view ('dashboard');
    }
    public function layout ()
    {
      return view ('layout');
    }
    public function product ()
    {
      return view ('product');
    } 
    public function categories ()
    {
      return view ('categories');
    } 
    public function orders ()
    {
      return view ('orders');
    }
    public function customers ()
    {
      return view ('customers');
    }
    public function form ()
    {
      return view ('form');
    }
    public function layout_create ()
    {
      return view ('create_form.layout');
    } 
    public function product_create ()
    {
      return view ('create_form.product');
    } 
    public function categories_create ()
    {
      return view ('create_form.categories');
    } 
    public function orders_create ()
    {
      return view ('create_form.orders');
    }
    public function customers_create ()
    {
      return view ('create_form.customers');
    }
   
}
