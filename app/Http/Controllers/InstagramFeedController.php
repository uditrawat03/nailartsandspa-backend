<?php

namespace App\Http\Controllers;

use Dymantic\InstagramFeed\Profile;
use Illuminate\Http\Request;

class InstagramFeedController extends Controller
{

    public function getFeed()
    {
        $profile = Profile::first();

        $feeds = $profile->feed();


        $data = [];
        foreach ($feeds as $feed) {
            array_push($data, $feed['url']);
        }

        return response()->asSuccess($data);
    }
}
