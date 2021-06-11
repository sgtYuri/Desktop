<?php

use Illuminate\Support\Facades\Route;

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
//email form
Route::get('/', [
    App\Http\Controllers\HomeController::class,
    'index'
])->name('home');

//email template
Route::get('/template', [
    App\Http\Controllers\HomeController::class,
    'template'
])->name('template');

//send email
Route::post('/send', [
    App\Http\Controllers\HomeController::class,
    'send'
])->name('send');
