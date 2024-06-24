<?php

use App\Http\Controllers\TakenController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')
    ->name('welcome');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::group(['middleware' => ['auth', /*'verified'*/]], function () {

    Route::view('dashboard', 'dashboard')
        ->name('dashboard');

    Route::view('dashboard.show', 'dashboard')
        ->name('dashboard.show');

    Route::view('dashboard.create', 'dashboard')
        ->name('dashboard.create');

    Route::view('dashboard.edit', 'dashboard')
        ->name('dashboard.edit');
});



require __DIR__.'/auth.php';
