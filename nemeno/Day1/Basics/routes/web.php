<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


/**Home, */
Route::get('/aboutus', [
    App\Http\Controllers\HomeController::class,
    'aboutus'
]);
Route::get('/contact', [
    App\Http\Controllers\HomeController::class,
    'contact'
]);
Route::get('/services', [
    App\Http\Controllers\HomeController::class,
    'services'
]);
Route::get('/gallery', [
    App\Http\Controllers\HomeController::class,
    'gallery'
]);
Route::get('/profile/anthony', [
    App\Http\Controllers\HomeController::class,
    'profileanthony'
]);

Route::get('/profile/albert', [
    App\Http\Controllers\HomeController::class,
    'profilealbert'
]);
Route::get('/services/cleaning', [
    App\Http\Controllers\HomeController::class,
    'servicescleaning'
]);
Route::get('/auth/user/forgot/password', [
    App\Http\Controllers\HomeController::class,
    'authuserforgotpassword'
]);
Route::get('/search/product', [
    App\Http\Controllers\HomeController::class,
    'searchproduct'
]);
Route::get('/products/filter/all/free', [
    App\Http\Controllers\HomeController::class,
    'productsfilterallfree'
]);
Route::get('/members', [
    App\Http\Controllers\HomeController::class,
    'members'
]);

Route::get('/print', [
    App\Http\Controllers\HomeController::class,
    'print'
]);

Route::get('/order/checkout', [
    App\Http\Controllers\HomeController::class,
    'ordercheckout'
]);

Route::get('/facebook/account/members/login', [
    App\Http\Controllers\HomeController::class,
    'facebook account members login'
]);




















