<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Noweh\TwitterApi\Client;

class TweetLookupController extends Controller
{
    public function index() {
        return view('tweet-lookup', [
            'tweets' => '',
        ]);
    }

    public function byId($id) {

    }

    public function byIds($ids) {

    }

    public function getAPIClient() {
        $settings = [
            'account_id' => env('USER_ID'),
            'consumer_key' => env('CONSUMER_KEY'),
            'consumer_secret' => env('CONSUMER_KEY_SECRET'),
            'bearer_token' => env('BEARER_TOKEN'),
            'access_token' => env('ACCESS_TOKEN'),
            'access_token_secret' => env('ACCESS_TOKEN_SECRET')
        ];
        $client = new Client($settings);
        return $client;
    }
}
