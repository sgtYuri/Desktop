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

Route::get('/', [
    RouteController::class, 'index'
])->name('home.get');

Route::post('/home', [
    RouteController::class, 'post'
])->name('home.post');

Route::get('/home', [
    RouteController::class, 'home'
])->name('home');

Route::get('/about', [
    RouteController::class, 'about'
])->name('about');

Route::get('/contact/{conact?}', [
    RouteController::class, 'contact'
])->name('contact');

Route::get('/simple', [
    RouteController::class, 'simple'
])->name('simple');

Route::get('/redirect', [
    RouteController::class, 'redirect'
])->name('redirect');

Route::get('/update/{id}', [
    RouteController::class, 'update'
])->name('update');

Route::get('/submit', [
    RouteController::class, 'submit'
])->name('submit');

Route::get('/create', [
    RouteController::class, 'create'
])->name('create');

Route::get('/landing', [
    RouteController::class, 'landing'
])->name('landing');


Route::group(['prefix' => 'request'], function () {

    Route::post('/name', [
        RequestController::class, 'name'
    ])->name('request.name');

    Route::get('/form', [
        RequestController::class, 'form'
    ])->name('request.form');

});

Route::group(['prefix' => 'crud'], function () {

    Route::get('/create/form', [
        ReminderController::class, 'create'
    ])->name('crud_create');

    Route::post('/create/form/save', [
        ReminderController::class, 'form'
    ])->name('crud_form');

    Route::get('index', [
        ReminderController::class, 'index'
    ])->name('crud_index');

    Route::get('/create/form/update', [
        ReminderController::class, 'update_form'
    ])->name('crud_update');

    Route::get('/create/save/{id}', [
        ReminderController::class, 'save'
    ])->name('crud_save');
    
    Route::get('/create/form/delete{id}', [
        ReminderController::class, 'delete'
    ])->name('crud_delete');

});

