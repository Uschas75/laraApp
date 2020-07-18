<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function master(){
        return view('layouts.master');
    }
    public function master1(){
        return view('layouts.master1');
    }



    public function index(){
        return view('index');
    }











    /*datatables methods*/
    public function datatables(){
        return view('datatables.datatables');
    }
    /*\datatables methods*/






}
