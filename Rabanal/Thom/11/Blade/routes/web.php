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

Route::get('/', function () {
    return view('welcome');
});
    Route::get('/department', function () {
        return view('pages.department');
});
    Route::get('/employees', function () {
    return view('pages.employees');
});
    Route::get('/leaves', function () {
    return view('pages.leaves');
});