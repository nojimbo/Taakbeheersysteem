<?php

use App\Http\Controllers\TaskController;
use App\Livewire\Create;
use App\Livewire\Edit;
use App\Livewire\Show;
use App\Livewire\TaskList;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')
    ->name('welcome');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::group(['middleware' => ['auth', /*'verified'*/]], function () {

    Route::view('dashboard', 'dashboard')
        ->name('dashboard');

    Route::get('/tasks/list', TaskList::class)
        ->name('list');

    Route::get('/tasks/show', Show::class)
        ->name('show');

    Route::get('/tasks/create', Create::class)
        ->name('create');

    Route::get('/tasks/edit', Edit::class)
        ->name('edit');
});

require __DIR__.'/auth.php';
