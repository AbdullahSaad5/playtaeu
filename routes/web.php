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
Route::get('/add-game', [PageController::class, 'viewAddGame']);
Route::get('/edit-profile', [PageController::class, 'editProfile']);
Route::get('/game/id={id}', [PageController::class, 'displayGame']);
Route::get('/choose-card', [PageController::class, 'chooseCard']);
Route::get('/addPaymentCard/', [PageController::class, 'viewAddPaymentCard']);
Route::get('/edit-card/id={card_id}', [PageController::class, 'viewEditPaymentCard']);
Route::get('/cart', [PageController::class, 'viewCart']);
Route::get('/cart/remove/id={gameID}', [DatabaseController::class, 'removeItem']);
Route::get('/add-to-cart/id={gameID}', [DatabaseController::class, 'addToCart']);
Route::get('/checkout', [DatabaseController::class, 'checkout']);
Route::get('/get-developers/{input}', [DatabaseController::class, 'getDevelopers']);
Route::get('/get-publishers/{input}', [DatabaseController::class, 'getPublishers']);

// Testings

Route::get('/review', [PageController::class, 'viewReviews']);


// Post Routes
Route::post('/login', [DatabaseController::class, 'authenticateUser']);
Route::post('/signup', [DatabaseController::class, 'registerUser']);
Route::post('/addPaymentCard/', [DatabaseController::class, 'addPaymentCard']);
Route::post('/update-card/id={card_id}', [DatabaseController::class, 'updatePaymentCard']);
Route::post('/add-game', [DatabaseController::class, 'addGame']);
Route::post('/update-profile', [DatabaseController::class, 'updateProfile']);
Route::post('/update-avatar', [DatabaseController::class, 'updateAvatar']);
Route::post('/update-password', [DatabaseController::class, 'updatePassword']);
