<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

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

Route::group(['prefix' => 'project'], function (){
    Route::get('/index', [CrudController::class, 'index']);
    Route::get('/create', [CrudController::class, 'create']);
    Route::get('/update', [CrudController::class, 'update']);
    Route::get('/delete', [CrudController::class, 'delete']);
});
