<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\AboutUsController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog',[
    blogController::class,
    'index'
]);

Route::get('/about',[
    AboutUsController::class,
    'about_us'
]);

Route::get('/contact',[
    ContactController::class,
    'contact'
]);

Route::get('/services',[
    ServicesController::class,
    'services'
]);

Route::get('/gallery',[
    GalleryController::class,
    'gallery'
]);