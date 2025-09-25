<?php

use Illuminate\Support\Facades\Route;
// import controller 
use App\Http\Controllers\RouteController ; 

Route::get('/', function () {
    return view('welcome');
});

Route::view('home','home');
Route::view('about','about');
Route::view('about/{name}','about');

// route 
// Route::view('home/profile/user' , 'routview');
Route::view('home/profile/user' , 'routview')->name('rv');
Route::view('home/profile/user/{name}', 'about')->name('user');

// get view with controller 
Route::get('show' , [RouteController :: class , 'showMyFunction'] ) ; 
Route::get('user' , [RouteController :: class , 'userMyFunction'] ) ; 

