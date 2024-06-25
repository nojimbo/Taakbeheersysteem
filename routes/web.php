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

    Route::view('task-list', 'dashboard')
        ->name('show');

    Route::view('create-task', 'dashboard')
        ->name('create');

    Route::view('edit-task', 'dashboard')
        ->name('edit');
});



require __DIR__.'/auth.php';
