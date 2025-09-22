<?php

use Illuminate\Support\Facades\Route;
// Controller call here 
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

// ---------------- CONTROLLER ROTE ------------ /// 
// ---------------  Create rout for Controller ------------------- ///  
Route::get('user', [UserController::class, 'getUserName']);
Route::get('aboutUser', [UserController::class, 'aboutUser']);
Route::get('name/{name}', [UserController::class, 'developerName']);
Route::get('getTestingView', [UserController::class, 'getMyTestingView']);
Route::get('getTestingViewName/{name}', [UserController::class, 'getMyTestingViewName']);




/* 
Route::get('/home', function () {
    return view('home');
});

Route::get('/about/{userName}', function ($userName) {
    echo "$userName";
    return view('about', ['userName' => $userName]);
});

// Redirect autom matic , / -> welocme to home 

// route::redirect('/', '/home');

// short -> 

// Route::view('/home', "home");
 */