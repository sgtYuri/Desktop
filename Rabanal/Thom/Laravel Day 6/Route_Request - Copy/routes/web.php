<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;

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
    RouteController::class, 'index'
])->name('home.get');

Route::post('/home', [
    RouteController::class, 'post'
])->name('home.post');

Route::get('/home', [
    RouteController::class, 'home'
])->name('home');

Route::get('/about', [
    RouteController::class, 'about'
])->name('about');

Route::get('/contact/{conact?}', [
    RouteController::class, 'contact'
])->name('contact');


