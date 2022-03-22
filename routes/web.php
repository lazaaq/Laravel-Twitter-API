<?php

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

Route::get('/tweet-lookup', function() {
    return view('tweet-lookup');
});

Route::get('/users-lookup', function() {
    return view('users-lookup');
});

Route::get('/manage-tweets', function() {
    return view('manage-tweets');
});