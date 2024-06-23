<?php

use App\Http\Controllers\TakenController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')
    ->name('welcome');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::middleware('auth')->middleware('verified')->group(function () {

    Route::view('dashboard', 'dashboard')
    ->name('dashboard');
    
});

require __DIR__.'/auth.php';