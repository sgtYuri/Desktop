<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

Route::get('/', [
    ProductController::class,
    'index'
])->name('product');

Route::get('/add', [
    ProductController::class,
    'add'
])->name('product.add');

Route::post('/add/save', [
    ProductController::class,
    'save'
])->name('product.add.save');

