<?php

use Illuminate\Support\Facades\Route;


Route::get('/login', [
    App\http\Controllers\LoginController::class,
    'index'
 ]);

 Route::get('/table', [
    App\http\Controllers\LoginController::class,
    'table'

 ]);

 Route::get('/layout', [
    App\http\Controllers\LoginController::class,
    'layout'
    
 ]);
 Route::get('/product', [
    App\http\Controllers\LoginController::class,
    'product'
    
 ]);
 Route::get('/categories', [
    App\http\Controllers\LoginController::class,
    'categories'
    
 ]);
 Route::get('/orders', [
    App\http\Controllers\LoginController::class,
    'orders'
    
 ]);
 Route::get('/customers', [
    App\http\Controllers\LoginController::class,
    'customers'
    
]);
Route::get('/layout/create', [
    App\http\Controllers\LoginController::class,
    'layout_create'
    
 ]);
Route::get('/product/create', [
   App\http\Controllers\LoginController::class,
   'product_create'
   
]);
Route::get('/categories/create', [
   App\http\Controllers\LoginController::class,
   'categories_create'
   
]);
Route::get('/orders/create', [
   App\http\Controllers\LoginController::class,
   'orders_create'
   
]);
Route::get('/customers/create', [
   App\http\Controllers\LoginController::class,
   'customers_create'   
]);



