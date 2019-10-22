<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }

    public function pertama(){
        return view('pertama');
    }

    public function kedua(){
        return view('kedua');
    }

    public function ketiga(){
        return view('ketiga');
    }
}
