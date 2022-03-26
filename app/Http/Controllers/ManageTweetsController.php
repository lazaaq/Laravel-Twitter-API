<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Noweh\TwitterApi\Client;

class ManageTweetsController extends Controller
{
    public function index() {
        $client = $this->getAPIClient();

        return view('manage-tweets', [
            'tweets' => '',
        ]);
    }

    public function create(Request $request) {

    }

    public function delete($id) {
        
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
