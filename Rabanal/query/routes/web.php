<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnalyticsController;

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
Route::get('/',[ AnalyticsController::class,'index'])->name('index');
Route::get('/create',[ AnalyticsController::class,'create'])->name('create');
Route::post('/save',[ AnalyticsController::class,'save'])->name('save');
Route::get('/update/{id}',[ AnalyticsController::class,'update'])->name('update');
Route::post('/update/save/{id}',[ AnalyticsController::class,'update_save'])->name('update.save');
Route::get('/delete{id}',[ AnalyticsController::class,'delete'])->name('delete');
