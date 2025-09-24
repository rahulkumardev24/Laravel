<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function addUser(Request $request){

        // here we apply validation 
    $request -> validate(
        [
            'username'=>'required | min:3 | max:20',
            'email'=>'required | email',
            'city'=>'required  | min:3 | max:50 | Uppercase' 
        ] , 
        // apply custom message for -> User name  
       [ 'username.required' => 'username can not be empty' , 
       'username.min'=>'username min characters should be 3' , 
       'username.max'=> 'username max characters 20' ,
       // apply for email 

       // apply for other 
       ]
    );

    return $request ; 

    }
}

?>
