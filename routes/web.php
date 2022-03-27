<?php

use App\Http\Controllers\SearchTweetsController;
use App\Http\Controllers\TimelinesController;
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

Route::group(['prefix' => 'timelines'], function () {
    Route::get('', [TimelinesController::class, 'index']);
    Route::post('tweet', [TimelinesController::class, 'tweet'])->name('timelines.tweet');
    Route::post('mention', [TimelinesController::class, 'mention'])->name('timelines.mention');
});

Route::group(['prefix' => 'users-lookup'], function () {
    Route::get('', [UsersLookupController::class, 'index']);
    Route::post('byId', [UsersLookupController::class, 'byId'])->name('users-lookup.byId');
    Route::post('byIds', [UsersLookupController::class, 'byIds'])->name('users-lookup.byIds');
    Route::post('byUsername', [UsersLookupController::class, 'byUsername'])->name('users-lookup.byUsername');
    Route::post('byUsernames', [UsersLookupController::class, 'byUsernames'])->name('users-lookup.byUsernames');
});

Route::group(['prefix' => 'search-tweets'], function () {
    Route::get('', [SearchTweetsController::class, 'index']);
    Route::get('search/{query}', [SearchTweetsController::class, 'search']);
});