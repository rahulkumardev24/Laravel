<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function userDetails(Request $request)
    {
        $name   = $request->input('name');
        $email  = $request->input('email');
        $skills = $request->input('skill', []);
        $gender = $request->input('gender');
        $city   = $request->input('city');
        $age    = $request->input('age');

        // Echo output
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Skills: " . implode(', ', $skills) . "<br>";
        echo "Gender: " . $gender . "<br>";
        echo "City: " . $city . "<br>";
        echo "Age: " . $age . "<br>";
    }
}
