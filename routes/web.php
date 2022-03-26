<?php

use App\Http\Controllers\ManageTweetsController;
use App\Http\Controllers\TweetLookupController;
use App\Http\Controllers\UsersLookupController;
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

Route::group(['prefix' => 'tweet-lookup'], function () {
    Route::get('', [TweetLookupController::class, 'index']);
    Route::get('id/{id}', [TweetLookupController::class, 'byId']);
    Route::get('ids/{ids}', [TweetLookupController::class, 'byIds']);
});

Route::group(['prefix' => 'users-lookup'], function () {
    Route::get('', [UsersLookupController::class, 'index']);
    Route::get('byId/{id}', [UsersLookupController::class, 'byId']);
    Route::get('byIds/{ids}', [UsersLookupController::class, 'byIds']);
    Route::get('byUsername/{username}', [UsersLookupController::class, 'byUsername']);
    Route::get('byUsernames/{usernames}', [UsersLookupController::class, 'byUsernames']);
});

Route::group(['prefix' => 'manage-tweets'], function () {
    Route::get('', [ManageTweetsController::class, 'index']);
    Route::post('create', [ManageTweetsController::class, 'create']);
    Route::delete('delete/{id}', [ManageTweetsController::class, 'delete']);
});