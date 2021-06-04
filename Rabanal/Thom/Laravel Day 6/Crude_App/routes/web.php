<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReminderController;

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

Route::group(['prefix' => 'crud'], function () {

    Route::get('/create/form', [
        ReminderController::class, 'name'
    ])->name('request.name');

    Route::get('/form', [
        RequestController::class, 'form'
    ])->name('request.form');

});
