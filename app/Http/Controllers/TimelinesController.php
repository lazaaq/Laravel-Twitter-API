<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;


class TimelinesController extends Controller
{
    public function index() {
        return view('timelines');
    }

    public function tweet($id) {
        $uri = 'https://api.twitter.com/2/';
        $client = new Client(['base_uri' => $uri]);

        $headers = [
            'Authorization' => 'Bearer ' . env('BEARER_TOKEN'),
        ];

        $url = $uri . 'users/' . $id . '/tweets';
        $response = $client->request('GET', $url, [
            'headers' => $headers
        ])->getBody()->getContents();
        return response()->json([
            'response' => json_decode($response)
        ]);
    }

    public function mention($id) {
        $uri = 'https://api.twitter.com/2/';
        $client = new Client(['base_uri' => $uri]);

        $headers = [
            'Authorization' => 'Bearer ' . env('BEARER_TOKEN'),
        ];

        $url = $uri . 'users/' . $id . '/mentions';
        $response = $client->request('GET', $url, [
            'headers' => $headers
        ])->getBody()->getContents();
        return response()->json([
            'response' => json_decode($response)
        ]);
    }
}
