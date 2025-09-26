<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function showLogo(){
        return "This is my App Logo" ;
    }
     function showImage(){
        return "This is my Image" ;
    }
     function showApple(){
        return "This is a Apple" ;
    }

    function about($name){
        return " $name about page" ; 
    }

}
