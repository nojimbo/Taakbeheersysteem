<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')
    ->name('welcome');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::group(['middleware' => ['auth', /*'verified'*/]], function () {

    Route::view('task-list', 'dashboard')
        ->name('list');

    Route::view('show-task', 'dashboard')
        ->name('show');

    Route::view('create-task', 'dashboard')
        ->name('create');

    Route::view('edit-task', 'dashboard')
        ->name('edit');
});

//Route::resource('TaskController', TaskController::class);

require __DIR__.'/auth.php';
