<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


// Get Routes
Route::get('/', [PageController::class, 'home']);
Route::get('/login', [PageController::class, 'login']);
Route::get('/signup', [PageController::class, 'signup']);


// Post Routes