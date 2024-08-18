<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/login', function () { return view('login');});
Route::get('/dashboard', function () { return view('dashboard');});
Route::get('/academics', function () { return view('pages/academic');});
Route::get('/users', function () { return view('pages/user_view');});
Route::get('/addstudent', function () { return view('pages/Student_create');});
Route::get('/viewstudents', function () { return view('pages/Students_view');});
Route::get('/profile', function () { return view('pages/Profile');});
Route::get('/settings', function () { return view('pages/Settings');});
Route::get('/logout', function () {
    // Destroy the session
    session()->flush();
    // Redirect to the login page
    return redirect('/login');
})->name('logout');