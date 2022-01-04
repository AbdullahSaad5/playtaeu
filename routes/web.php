<?php

use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\MailController;
use Illuminate\Queue\Connectors\DatabaseConnector;
use Illuminate\Support\Facades\Route;


// Get Routes
Route::get('/', [PageController::class, 'checkLogin']);
Route::get('/homepage', [PageController::class, 'home']);
Route::get('/login', [PageController::class, 'login']);
Route::get('/signup', [PageController::class, 'signup']);
Route::get('/logout', [PageController::class, 'logout']);
Route::get('/admin', [PageController::class, 'admin']);
Route::get('/game/id={id}', [PageController::class, 'displayGame']);
Route::get('/choose-card', [PageController::class, 'chooseCard']);
Route::get('/addPaymentCard/', [PageController::class, 'viewAddPaymentCard']);
Route::get('/update-card/id={card_id}', [PageController::class, 'viewEditPaymentCard']);
Route::get('/cart', [PageController::class, 'viewCart']);
Route::get('/cart/remove/id={gameID}', [DatabaseController::class, 'removeItem']);
Route::get('/add-to-cart/id={gameID}', [DatabaseController::class, 'addToCart']);
Route::get('/checkout', [DatabaseController::class, 'checkout']);

// Post Routes
Route::post('/login', [DatabaseController::class, 'authenticateUser']);
Route::post('/signup', [DatabaseController::class, 'registerUser']);
Route::post('/addPaymentCard/', [DatabaseController::class, 'addPaymentCard']);
