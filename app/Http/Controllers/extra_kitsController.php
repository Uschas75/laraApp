<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class extra_kitsController extends Controller
{

    /*extra kits methods*/
    public function image_cropper(){
        return view('extra_kits.image_cropper');
    }
    public function loaders(){
        return view('extra_kits.loaders');
    }
    public function ladda_button(){
        return view('extra_kits.ladda_button');
    }
    public function toastr(){
        return view('extra_kits.toastr');
    }
    public function sweet_alerts(){
        return view('extra_kits.sweet_alerts');
    }
    public function tour(){
        return view('extra_kits.tour');
    }
    public function upload(){
        return view('extra_kits.upload');
    }
    /*\extra kits methods*/
}
