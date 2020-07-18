<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionsController extends Controller
{
    /*sessions methods*/
    public function signin(){
        return view('sessions.signin');
    }
    public function signup(){
        return view('sessions.signup');
    }
    public function forgot(){
        return view('sessions.forgot');
    }
    /*\sessions methods*/
}
