<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class SearchTweetsController extends Controller
{
    public function index() {
        return view('search-tweets');
    }

    public function search($query) {
        if ($query == '') {
            return response()->json([
                'response' => []
            ]);
        }
        $uri = 'https://api.twitter.com/2/';
        $client = new Client(['base_uri' => $uri]);

        $headers = [
            'Authorization' => 'Bearer ' . env('BEARER_TOKEN'),
        ];
        
        $url = $uri . 'tweets/search/recent?query=' . $query;
        $response = $client->request('GET', $url, [
            'headers' => $headers
        ])->getBody()->getContents();
        return response()->json([
            'response' => json_decode($response)
        ]);
    }
}
