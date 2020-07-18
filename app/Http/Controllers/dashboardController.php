<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    /*Dashboard method*/
    public function dashboard_v1(){
        return view('dashboard.dashboard_v1');

    }
    public function dashboard_v2(){
        return view('dashboard.dashboard_v2');

    }
    public function dashboard_v3(){
        return view('dashboard.dashboard_v3');

    }
    public function dashboard_v4(){
        return view('dashboard.dashboard_v4');

    }

    /*\Dashboard method*/
}
