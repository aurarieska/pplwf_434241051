<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function myHome(){
        return 'Halaman dari HomeController';
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('home.contact');
    }
}
