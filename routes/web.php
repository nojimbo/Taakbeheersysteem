<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TakenController;

Route::get("/index", [TakenController::class,  "index"]);

Route::get("/show", [TakenController::class,  "show"]);

Route::get("/create", [TakenController::class,  "create"]);

Route::get("/edit", [TakenController::class,  "edit"]);