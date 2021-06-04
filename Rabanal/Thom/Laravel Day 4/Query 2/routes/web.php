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

Route::group(['prefix' => 'query'],function(){
    Route::get('/album',[ QueryController::class, 'album' ]);
    Route::get('/simple',[ QueryController::class, 'simple' ]);
    Route::get('/pluck',[ QueryController::class, 'pluck' ]);
    Route::get('/pluck/artist',[ QueryController::class, 'pluckartist' ]);
    Route::get('/find',[ QueryController::class, 'find' ]);
    Route::get('/join/songalbum',[ QueryController::class, 'songAlbum' ]);
});

Route::group(['prefix' => 'agregate'],function(){
    Route::get('/count',[ QueryController::class, 'count' ]);
    Route::get('/sum',[ QueryController::class, 'sum' ]);
    Route::get('/avg',[ QueryController::class, 'avg' ]);
    
});

Route::group(['prefix' => 'where'],function(){
    Route::get('/simplewhere',[ QueryController::class, 'simplewhere' ]);
    Route::get('/simplewhere2',[ QueryController::class, 'simplewhere2' ]);
    Route::get('/simplewhere3',[ QueryController::class, 'simplewhere3' ]);
    Route::get('/simplewhere4',[ QueryController::class, 'simplewhere4' ]);
    Route::get('/simplewhere5',[ QueryController::class, 'simplewhere5' ]);
    Route::get('/orwhere',[ QueryController::class, 'orwhere' ]);
    Route::get('/wherein',[ QueryController::class, 'wherein' ]);
    Route::get('/whereNull',[ QueryController::class, 'whereNull' ]);
});