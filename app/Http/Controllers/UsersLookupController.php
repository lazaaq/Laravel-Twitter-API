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

    public function byId(Request $request) {
        $request->validate([
            'userid' => 'required|integer',
        ]);
        $data = (new UserSearch(getSettings()))
            ->findByIdOrUsername($request->userid, UserSearch::MODES['ID'])
            ->performRequest();

        return response()->json([
            "data" => $data
        ]);
    }

    public function byIds(Request $request) {
        $request->validate([
            'userids' => 'required',
        ]);
        $all_the_ids = explode(",", $request->userids);
        $all_the_data = array();
        for($i = 0; $i < count($all_the_ids); $i++) {
            $data = (new UserSearch(getSettings()))
                ->findByIdOrUsername($all_the_ids[$i], UserSearch::MODES['ID'])
                ->performRequest();
            array_push($all_the_data, $data);
        }
        return $all_the_data;
    }

    public function byUsername(Request $request) {
        $request->validate([
            'username' => 'required',
        ]);
        $data = (new UserSearch(getSettings()))
            ->findByIdOrUsername($request->username, UserSearch::MODES['USERNAME'])
            ->performRequest();

        return response()->json([
            "data" => $data
        ]);
    }

    public function byUsernames(Request $request) {
        $request->validate([
            'usernames' => 'required',
        ]);
        $all_the_usernames = explode(",", $request->usernames);
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
