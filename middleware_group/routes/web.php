<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::view('home', 'home')->middleware('check1'); // Here we apply group middle ware 
// home?age=21&country=india ->Call like that 
Route::view('about', 'about'); // here we can alos apply 


// here we apply group of middleware on multiple routes at onces 



Route::middleware('check1')->group(function () {
    Route::view('contact', 'about');
    Route::view('user', 'home');
    Route::view('list', 'about');
});

// Access all Page -> Like this 
// http://127.0.0.1:8000/user?age=22&country=india 
