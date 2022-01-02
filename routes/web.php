<?php

use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


// Get Routes
Route::get('/', [PageController::class, 'checkLogin']);
Route::get('/homepage', [PageController::class, 'home']);
Route::get('/login', [PageController::class, 'login']);
Route::get('/signup', [PageController::class, 'signup']);
Route::get('/logout', [PageController::class, 'logout']);
Route::get('/admin', [PageController::class, 'admin']);
Route::get('/game/{id}', [PageController::class, 'displayGame']);


// Post Routes
Route::post('/login', [DatabaseController::class, 'authenticateUser']);
Route::post('/signup', [DatabaseController::class, 'registerUser']);
