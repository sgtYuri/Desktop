<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/**
 * Login Page - GET /
 * Login Action - POST /
 * Dashboard Page - GET
 * Logout Action - GET
 */

Route::get('/',[
  AuthController::class,
  'loginPage'
])->middleware('guest')
  ->name('login');

Route::post('/verify',[
  AuthController::class,
  'loginVerify'
])->name('login.verify');

Route::get('/dasboard',[
  AuthController::class,
  'dashboard'
])->middleware('admin')
  ->name('dashboard');

Route::get('/logout',[
  AuthController::class,
  'logout'
])->name('logout');

Route::get('/signup',[
    AuthController::class,
    'signup_form'
])->name('signup.form');

Route::post('/signup/create',[
    AuthController::class,
    'signup'
])->name('insert.signup');

Route::post('/send/message',[
    AuthController::class,
    'sendMessage'
])->middleware('admin')
->name('send.message');