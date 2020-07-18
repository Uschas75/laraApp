<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class othersController extends Controller
{

    /*others methods*/
    public function not_found(){
        return view('others.not_found');
    }
    public function user_profile(){
        return view('others.user_profile');
    }
    public function blank(){
        return view('others.blank');
    }

    /*\others methods*/
}
