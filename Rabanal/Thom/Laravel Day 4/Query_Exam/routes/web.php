<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\StatisticController;

/*
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
*/


    Route::get('/', [ PersonnelController::class, 'index' ])->name('index');

    Route::group(['prefix' => 'create'], function() {
        
        Route::get('/', [
            PersonnelController::class,
            'create_form' 
        ])->name('crud.create');

        Route::post('/save', [ 
            PersonnelController::class,
            'create_save'
        ])->name('crud.create.save');

    });
    Route::group(['prefix' => 'bmi'], function(){
        Route::get('/{id}', [
        StatisticController::class,
        'index'
        ])->name('crud.bmi');

        Route::post('/create/{id}', [
            StatisticController::class,
            'create'
        ])->name('crud.bmi.create');

        Route::post('/update/{id}', [
            StatisticController::class,
            'update'
        ])->name('form.bmi.update');
    });

    Route::group(['prefix' => 'update'], function () {
        Route::get('/{id}',[PersonnelController::class, 'update_form'
        ])->name('crud.update');
     
        Route::post('/save/{id}',[
            PersonnelController::class,
            'update_save'
        ])->name('crud.update.save');

});

Route::get('/delete/{id}',[
    PersonnelController::class,
    'delete'
])->name('crud.delete');



Route::get('/trash',[
    PersonnelController::class,
    'trash'
])->name('crud.trash');

Route::get('/restore/{id}',[
    PersonnelController::class,
    'restore'
])->name('crud.restore');

Route::get('/force/delete/{id}',[
    PersonnelController::class,
    'force_delete'
])->name('crud.force.delete');