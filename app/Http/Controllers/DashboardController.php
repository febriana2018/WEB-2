<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }
    public function base(){
        return view('base');
    }

    public function chart(){
        return view('chart');
    }

    public function tabel(){
        return view('tabel');
    }
}
