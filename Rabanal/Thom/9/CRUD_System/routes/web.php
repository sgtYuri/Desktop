<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\StatisticController;


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