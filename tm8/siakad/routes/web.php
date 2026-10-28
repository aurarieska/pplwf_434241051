<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthPageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hallo', function () {
return 'Hallo, Aura! Selamat Datang di Tutorial Laravel';
});

Route::get('/myhome', [HomeController::class, 'myHome']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/login', [AuthPageController::class, 'login']);
