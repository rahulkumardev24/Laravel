<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    // here we craete function to get home page 
    function goToHome()
    {
        return view('home');
    }

    // her we create function to get about page 
    function goToAbout($name)
    {
        return view('about', ['userName' => $name]);
    }

    function goToLogin()
    {
        if (View::exists('admin.login')) {
            return view('admin.login');
        } else {
            echo "No view Found";
        }
    }
}
