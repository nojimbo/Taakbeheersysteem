<?php

use App\Http\Controllers\TakenController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index')
    ->name('index');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::middleware('auth')->middleware('verified')->group(function () {

    Route::view('dashboard', 'dashboard')
    ->name('dashboard');

    Route::get('show', [TakenController::class, 'show'])
    ->name('show');

    Route::get('create', [TakenController::class, 'create'])
    ->name('create.form');
    Route::get('create', [TakenController::class, 'create'])
    ->name('create.submit');

    Route::get('edit', [TakenController::class, 'edit'])
    ->name('edit');

});

require __DIR__.'/auth.php';