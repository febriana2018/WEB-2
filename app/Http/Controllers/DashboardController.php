<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori;

class DashboardController extends Controller
{
    public function index(){
        
    }
    
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

    public function kategori(){
        return view('kategori');
    }

    public function produk(){
        return view('produk');
    }

    public function tambahKategori(){
        return view('tambahKategori');
    }

    public function tambahProduk(){
        return view('tambahProduk');
    }
}
