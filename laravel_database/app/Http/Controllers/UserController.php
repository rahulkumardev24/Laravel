<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// For Database 
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    function users()
    {
        $users =  DB::select('select * from users');
        return view('users',['myUsers'=> $users]);
    }
}
