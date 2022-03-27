<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;


class TimelinesController extends Controller
{
    public function index() {
        return view('timelines');
    }

    public function tweet(Request $request) {
        $request->validate([
            'userid' => 'required'
        ]);
        $uri = 'https://api.twitter.com/2/';
        $client = new Client(['base_uri' => $uri]);

        $headers = [
            'Authorization' => 'Bearer ' . env('BEARER_TOKEN'),
        ];

        $url = $uri . 'users/' . $request->userid . '/tweets';
        $response = $client->request('GET', $url, [
            'headers' => $headers
        ])->getBody()->getContents();
        return response()->json([
            'response' => json_decode($response)
        ]);
    }

    public function mention(Request $request) {
        $request->validate([
            'userids' => 'required'
        ]);
        $uri = 'https://api.twitter.com/2/';
        $client = new Client(['base_uri' => $uri]);

        $headers = [
            'Authorization' => 'Bearer ' . env('BEARER_TOKEN'),
        ];

        $all_of_the_ids = explode(',', $request->userids);
        $all_of_the_tweets = array();
        for ($i = 0; $i < count($all_of_the_ids); $i++) {
            $id = $all_of_the_ids[$i];
            $url = $uri . 'users/' . $id . '/tweets';
            $response = $client->request('GET', $url, [
                'headers' => $headers
            ])->getBody()->getContents();
            $response = json_decode($response);
            array_push($all_of_the_tweets, $response);
        }
        return response()->json([
            'response' => $all_of_the_tweets
        ]);
    }
}
