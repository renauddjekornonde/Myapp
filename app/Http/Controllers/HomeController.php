<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //la page/vue de home.blade.php
    public function home(){
        return view('home.home');
    }

    //la page/vue de about.blade.php
    public function about(){
        return view('home.about');
    }

    //la page/vue de dashbord.blade.php
    public function dashbord(){
        return view('home.dashbord');
    }
}
