<?php

use Illuminate\Support\Facades\Route;

// import controller 
use App\Http\Controllers\HomeController ;

Route::get('/', function () {
    return view('welcome');
});




/// route group  with prifix
Route::prefix('student') -> group(function(){

// route 
// Route::view('home','home' ) ; 
Route::view('/home','home' ) ; 
Route::get('/show' , [HomeController::class , 'show'] ) ; 
Route::get('/add' , [HomeController::class , 'add'] ) ; 


});

/* 
// Call Like this 

student/home 
student/show 
student/add  
*/



/// route group  with prifix
Route::prefix('student/india') -> group(function(){

// route 
// Route::view('home','home' ) ; 
Route::view('/home','home' ) ; 
Route::get('/show' , [HomeController::class , 'show'] ) ; 
Route::get('/add' , [HomeController::class , 'add'] ) ; 


});
