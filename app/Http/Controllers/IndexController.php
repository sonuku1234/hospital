<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function MainPage(){
        return view('frontend.index');
    }
}
