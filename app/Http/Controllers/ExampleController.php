<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function homePage() {
        // our controllers delegates and aggregates responsibility
        
        // imagine the code below came from the database
        $userInfo = ['name' => "Scott", 'age' => 30];
        $pets = ['cats' => ["Jazzy", "Finnigan", "Mochi"], 'dogs' => ["Lady", "Luna"]];

        return view('homepage', ['userInfo' => $userInfo]);
    }

    public function aboutPage() {
        return '<h1>About Page</h1><a href="/">Back to the Home Page</a>';
    }
}
