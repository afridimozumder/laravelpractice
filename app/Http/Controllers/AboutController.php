<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function hehe(){
        return ('Hehe A is not equal to 5!!');
    }
}
