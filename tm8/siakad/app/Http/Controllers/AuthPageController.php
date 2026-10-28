<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class AuthPageController extends Controller
{
    public function login(){
        return view('login');
    }
}
