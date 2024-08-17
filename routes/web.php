<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/login', function () { return view('login');});
Route::get('/dashboard', function () { return view('pages/dashboard_overview');});
Route::get('/academics', function () { return view('pages/academic');});