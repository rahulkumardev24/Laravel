<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller


{
    //  create function to get user name 
    function getUserName()
    {
        return "Rahul Kumar";
    }

    // about user 
    function aboutUser()
    {
        return "I am a Flutter App Developer for India" ;
    }

    function developerName($name)
    {
        return "My Name is : $name ";
    }

    // ------------------- VIEW ------------------- // 

    // ------------ He create a function which return a View Page ------------- // 

    function getMyTestingView()
    {
        return view('myTestingView');
    }

    // ----------- return view with name ----------- //

      function getMyTestingViewName($name)
    {
        return view('myTestingViewName' , ['name' => $name]);
    }

}
