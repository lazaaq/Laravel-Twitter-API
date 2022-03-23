<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Noweh\TwitterApi\Client;

class MyController extends Controller
{
    public function tweetLookup()
    {
        $client = $this->getAPIClient();

        return view('tweet-lookup', [
            'tweets' => '',
        ]);
    }

    public function usersLookup()
    {
        $client = $this->getAPIClient();

        return view('users-lookup', [
            'users' => '',
        ]);
    }

    public function manageTweets()
    {
        $client = $this->getAPIClient();

        return view('manage-tweets', [
            'tweets' => '',
        ]);
    }

    // public function getTweetById($id) {
    //     $client = $this->getAPIClient();
    //     $result = $client->tweet()->performRequest('GET', array( 'id' => $id));
    //     dd($result);
    // }

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
