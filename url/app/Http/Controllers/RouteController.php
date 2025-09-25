<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    // here we create function showMyFunction
    function showMyFunction(){
        // return view 
        // return view('routview') ; 

        // here we redirect  -> Home 
        // return redirect()->to('home/profile/user');
  
        // simple (same) above 
        return to_route('rv');

        

    }


    function userMyFunction(){
        return to_route('user' , ["name => rahul"]) ; 
    }
}
