<?php

use Illuminate\Support\Facades\Route;

// import controller 
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});




/// route group  with prifix
Route::prefix('student')->group(function () {

    // route 
    // Route::view('home','home' ) ; 
    Route::view('/home', 'home');
    Route::get('/show', [HomeController::class, 'show']);
    Route::get('/add', [HomeController::class, 'add']);
});

/* 
// Call Like this 

student/home 
student/show 
student/add  
*/



/// route group  with prifix
Route::prefix('student/india')->group(function () {

    // route 
    // Route::view('home','home' ) ; 
    Route::view('/home', 'home');
    Route::get('/show', [HomeController::class, 'show']);
    Route::get('/add', [HomeController::class, 'add']);
});

/* student/india/home
student/india/add
student/india/show */



// ================================== Route Group with Controller ================================ /// |

// without group 

/*     
Route::get('logo' ,[StudentController :: class , 'showLogo'] ) ; 
Route::get('image' ,[StudentController :: class , 'showImage'] ) ; 
Route::get('apple' ,[StudentController :: class , 'showApple'] ) ; 
 */

Route::controller(StudentController::class)->group(function () {


    Route::get('logo', 'showLogo');
    Route::get('image', 'showImage');
    Route::get('apple', 'showApple');
    Route::get('about/{name}', 'about');
});

//  Data pass 
// Route::get('about/{name}' , [StudentController :: class , 'about']) ; 





