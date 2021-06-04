<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExamController;
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
    Route::get('/exam1',[ ExamController::class, 'exam1' ]);
    Route::get('/exam2',[ ExamController::class, 'exam2' ]);
    Route::get('/exam3',[ ExamController::class, 'exam3' ]);
    Route::get('/exam4',[ ExamController::class, 'exam4' ]);
    Route::get('/exam5',[ ExamController::class, 'exam5' ]);
    Route::get('/exam6',[ ExamController::class, 'exam6' ]);
    Route::get('/exam7',[ ExamController::class, 'exam7' ]);
    Route::get('/exam8',[ ExamController::class, 'exam8' ]);
    Route::get('/exam9',[ ExamController::class, 'exam9' ]);
    Route::get('/exam10',[ ExamController::class, 'exam10' ]);
    Route::get('/exam11',[ ExamController::class, 'exam11' ]);
    Route::get('/exam12',[ ExamController::class, 'exam12' ]);
    Route::get('/exam13',[ ExamController::class, 'exam13' ]);
    Route::get('/exam14',[ ExamController::class, 'exam14' ]);
    Route::get('/exam15',[ ExamController::class, 'exam15' ]);
    Route::get('/exam16',[ ExamController::class, 'exam16' ]);
    Route::get('/exam17',[ ExamController::class, 'exam17' ]);
    Route::get('/exam18',[ ExamController::class, 'exam18' ]);
    Route::get('/exam19',[ ExamController::class, 'exam19' ]);
});

