<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ui_kitsController extends Controller
{
    /*ui_kits methods*/
    public function alerts(){
        return view('ui_kits.alerts');
    }
    public function accordion(){
        return view('ui_kits.accordion');
    }
    public function badges(){
        return view('ui_kits.badges');
    }
    public function buttons(){
        return view('ui_kits.buttons');
    }
    public function cards(){
        return view('ui_kits.cards');
    }
    public function card_metrics(){
        return view('ui_kits.card_metrics');
    }
    public function carousel(){
        return view('ui_kits.carousel');
    }
    public function lists(){
        return view('ui_kits.lists');
    }
    public function pagination(){
        return view('ui_kits.pagination');
    }
    public function popover(){
        return view('ui_kits.popover');
    }
    public function progressbar(){
        return view('ui_kits.progressbar');
    }
    public function tables(){
        return view('ui_kits.tables');
    }
    public function tabs(){
        return view('ui_kits.tabs');
    }
    public function tooltip(){
        return view('ui_kits.tooltip');
    }
    public function modals(){
        return view('ui_kits.modals');
    }
    public function nouislide(){
        return view('ui_kits.nouislide');
    }
    /*\alerts methods*/

}
