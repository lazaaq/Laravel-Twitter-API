<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Noweh\TwitterApi\Client;
use Noweh\TwitterApi\TweetSearch;

class TweetLookupController extends Controller
{
    public function index() {
        return view('tweet-lookup', [
            'tweets' => '',
        ]);
    }

    public function byId($id) {
        $settings = getSettings();
        $data = (new TweetSearch($settings))
            ->showMetrics()
            ->onlyWithMedias()
            ->addFilterOnUsernamesFrom([
                'twitterdev',
                'Noweh95'
            ], TweetSearch::OPERATORS['OR'])
            ->addFilterOnKeywordOrPhrase([
                'Dune',
                'DenisVilleneuve'
            ], TweetSearch::OPERATORS['AND'])
            ->addFilterOnLocales(['fr', 'en'])
            ->showUserDetails()
            ->performRequest()
        ;
    }

    public function byIds($ids) {

    }

}
