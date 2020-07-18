<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class appsController extends Controller
{
    /*Apps methods*/
    public function invoice(){
        return view('apps.invoice');
    }

    public function inbox(){
        return view('apps.inbox');
    }
    public function chat(){
        return view('apps.chat');
    }
    /*\Apps methods*/
}
