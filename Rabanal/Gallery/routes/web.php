<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;

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
    GalleryController::class,
    'index'
])->name('index');

Route::get('/create',[
    GalleryController::class,
    'create'
])->name('create');

Route::post('/add',[
    GalleryController::class,
    'add'
])->name('add');

Route::get('/delete/{id}',[
    GalleryController::class,
    'delete'
])->name('delete');


