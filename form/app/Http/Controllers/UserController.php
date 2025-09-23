<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function addUser(Request $request){

        echo $request -> username ;
        echo "<br>";
        echo $request -> email ;
               echo "<br>";
        echo $request -> city ;

    }
}

?>
