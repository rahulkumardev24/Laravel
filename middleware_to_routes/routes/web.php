<?php

use Illuminate\Support\Facades\Route;

// import Age Check middleware 
use App\Http\Middleware\AgeCheck ; 
use App\Http\Middleware\Country ; 

Route::get('/', function () {
    return view('welcome');
});

Route::view('home' , 'home') -> middleware(AgeCheck::class , Country::class);
Route::view('about' , 'about')-> middleware(AgeCheck::class);

