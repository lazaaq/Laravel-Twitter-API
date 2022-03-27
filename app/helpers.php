<?php

use Noweh\TwitterApi\Client;

function getSettings() {
  $settings = [
    'account_id' => env('USER_ID'),
    'consumer_key' => env('CONSUMER_KEY'),
    'consumer_secret' => env('CONSUMER_KEY_SECRET'),
    'bearer_token' => env('BEARER_TOKEN'),
    'access_token' => env('ACCESS_TOKEN'),
    'access_token_secret' => env('ACCESS_TOKEN_SECRET')
  ];
  return $settings;
}