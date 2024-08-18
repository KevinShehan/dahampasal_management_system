<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('login');
});

Route::get('/login', function () { return view('login');});
Route::get('/dashboard', function () { return view('dashboard');});
Route::get('/academics', function () { return view('pages/academic');});
Route::get('/users', function () { return view('pages/user_view');});
Route::get('/addstudents', function () { return view('pages/Student_create');});
Route::get('/viewstudents', function () { return view('pages/Students_view');});
Route::get('/profile', function () { return view('pages/Profile');});
Route::get('/settings', function () { return view('pages/Settings');});
Route::get('/logout', function () {  session()->flush(); // Destroy the session 
    return redirect('/login');  // Redirect to the login page
})->name('logout');

Route::get('/addstudent', [StudentController::class, 'create'])->name('students.create');
Route::post('/addstudent', [StudentController::class, 'store'])->name('students.store');
Route::get('/viewstudent', [StudentController::class, 'store'])->name('students.view');;