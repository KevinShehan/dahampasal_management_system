<?php

use Illuminate\Support\Facades\Route;

// Route::view('/', 'welcome');
// Redirect the root URL to the login page
Route::get('/', function () {
    return redirect()->route('login');  // Redirect to the login route
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
