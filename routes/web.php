<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/tweet-lookup', [MyController::class, 'tweetLookup']);

Route::get('/users-lookup', [MyController::class, 'usersLookup']);

Route::get('/manage-tweets', [MyController::class, 'manageTweets']);

// Route::get('/tes/{id}', [MyController::class, 'getTweetById']);