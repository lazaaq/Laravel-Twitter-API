<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Noweh\TwitterApi\Client;
use Noweh\TwitterApi\UserSearch;

class UsersLookupController extends Controller
{
    public function index() {
        return view('users-lookup', [
            'users' => '',
        ]);
    }

    public function byId($id) {
        $data = (new UserSearch(getSettings()))
            ->findByIdOrUsername($id, UserSearch::MODES['ID'])
            ->performRequest();

        return response()->json([
            "data" => $data
        ]);
    }

    public function byIds($ids) {
        $all_the_ids = explode(",", $ids);
        $all_the_data = array();
        for($i = 0; $i < count($all_the_ids); $i++) {
            $data = (new UserSearch(getSettings()))
                ->findByIdOrUsername($all_the_ids[$i], UserSearch::MODES['ID'])
                ->performRequest();
            array_push($all_the_data, $data);
        }
        return $all_the_data;
    }

    public function byUsername($username) {
        $data = (new UserSearch(getSettings()))
            ->findByIdOrUsername($username, UserSearch::MODES['USERNAME'])
            ->performRequest();

        return response()->json([
            "data" => $data
        ]);
    }

    public function byUsernames($usernames) {
        $all_the_usernames = explode(",", $usernames);
        $all_the_data = array();
        for($i = 0; $i < count($all_the_usernames); $i++) {
            $data = (new UserSearch(getSettings()))
                ->findByIdOrUsername($all_the_usernames[$i], UserSearch::MODES['USERNAME'])
                ->performRequest();
            array_push($all_the_data, $data);
        }
        return $all_the_data;
    }

}
