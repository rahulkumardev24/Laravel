<?php

use Illuminate\Support\Facades\Route;

// import controller 
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// create route witout using controller 
Route::get('/home', function () {
    return view('home');
});

Route::view('/about', '/about', ['userName' => 'Rahul Kumar Sahu']);



Route::get('user-home', [UserController::class, 'goToHome']);
Route::get('user-about/{name}', [UserController::class, 'goToAbout']);
Route::get('user-login', [UserController::class, 'goToLogin']);
