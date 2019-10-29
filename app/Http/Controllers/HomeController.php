<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('Awal/home');
    }

    public function pertama(){
        return view('Awal/pertama');
    }

    public function kedua(){
        return view('Awal/kedua');
    }

    public function ketiga(){
        return view('Awal/ketiga');
    }
}
