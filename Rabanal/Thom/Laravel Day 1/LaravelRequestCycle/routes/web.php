<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

Route::middleware(['privacy'])->group(function() {

Route::get('/', [
    TestController::class,
    'index'
]

);


Route::get('/about-us', [
    TestController::class,
    'about_us'

]);

Route::get('/contact', [
    TestController::class,
    'contact'

    ]);

Route::get('/gallery', [
    TestController::class,
    'gallery'

    ]);

Route::get('/services', [
    TestController::class,
    'services'

    ]);



Route::get('/', [
    TestController::class,
    'index'
]

);

});