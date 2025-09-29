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
