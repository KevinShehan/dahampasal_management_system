<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/login', function () { return view('login');});
Route::get('/dashboard', function () { return view('dashboard');});
Route::get('/academics', function () { return view('pages/academic');});
Route::get('/users', function () { return view('pages/user_view');});