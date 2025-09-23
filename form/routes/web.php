<?php

use Illuminate\Support\Facades\Route;

// Import User Controller 

use App\Http\Controllers\UserController ; 

// Import Details Controller 

use App\Http\Controllers\DetailsController ;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user-form', function () {
    return view('user-form');
});

Route::post('adduser' , [UserController::class , 'addUser']);


Route::get('/details-form' , function(){
    return view('details-form') ;
});

Route::post('addDetails' , [DetailsController::class , 'userDetails' ]);


?>