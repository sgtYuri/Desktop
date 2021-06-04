<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QueryController;
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


Route::group(['prefix' => 'queries'],function(){

    Route::get('/simple',[ QueryController::class, 'simple' ]);
    Route::get('/pluck',[ QueryController::class, 'pluck' ]);
    Route::get('/find',[ QueryController::class, 'find' ]);
    Route::get('/join',[ QueryController::class, 'join' ]);

});

Route::group(['prefix' => 'aggregates'],function(){
    Route::get('/count',[ QueryController::class, 'count' ]);
    Route::get('/avg',[ QueryController::class, 'avg' ]);
});

Route::group(['prefix' => 'where'],function(){
    Route::get('/where',[ QueryController::class, 'where' ]);
});