<?php

use Illuminate\Support\Facades\Route;
use Phiki\Phast\Root;

Route::get('/', function () {
    return view('welcome');
});

Route::view('home' ,  'home');
Route::view('about' ,  'about');