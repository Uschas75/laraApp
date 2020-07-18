<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formsController extends Controller
{

    /*forms methods*/
    public function form_basic(){
        return view('forms.form_basic');
    }
    public function form_layouts(){
        return view('forms.form_layouts');
    }
    public function form_input_group(){
        return view('forms.form_input_group');
    }
    public function form_validation(){
        return view('forms.form_validation');
    }
    public function smart_wizard(){
        return view('forms.smart_wizard');
    }
    public function tag_input(){
        return view('forms.tag_input');
    }
    public function editor(){
        return view('forms.editor');
    }
    /*\forms methods*/

}
