<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ISController;
use App\Http\Controllers\ProductsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[
    ISController::class,
    'index'
])->name('homepage');

Route::get('/create',[
    ISController::class,
    'create'
])->name('create');

Route::get('/update/{id}',[
    ISController::class,
    'update'
])->name('update');

Route::post('/save',[
    ISController::class,
    'save'
])->name('save');

Route::post('/update/save/{id}',[
    ISController::class,
    'update_save'
])->name('update_save');

Route::get('/delete/{id}',[
    ISController::class,
    'delete'
])->name('delete');




Route::get('/products',[
    ProductsController::class,
    'products'
])->name('Home');

Route::get('/products/add',[
    ProductsController::class,
    'add_products'
])->name('add.products');

Route::get('/products/update/{id}',[
    ProductsController::class,
    'update_products'
])->name('update.products');

Route::post('/products/save/',[
    ProductsController::class,
    'save_products'
])->name('save.products');

Route::post('/products/update/save/{id}',[
    ProductsController::class,
    'update_save_products'
])->name('update.save.products');

Route::get('/products/delete/{id}',[
    ProductsController::class,
    'delete_products'
])->name('delete.products');