<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // craete function go to home page 

    function goToHome(){
        $name = "Rahul" ; 

        $nameList = ["Satish" , "Raja" , 'Gautam' , "Vikash"] ; 

        return View('home' , ["myName" => $name , "users" => $nameList] ) ; 
    }
}
