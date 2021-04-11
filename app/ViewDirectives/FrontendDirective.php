<?php
namespace App\ViewDirectives;

use App\Models\Testimonials;
use Dymantic\InstagramFeed\Profile;

class FrontendDirective
{
    public static function testimonials()
    {
        $testimonials = Testimonials::get();

        return view('frontend.testimonials', compact('testimonials'));
    }


    public static function instagramFeeds()
    {
        $profile = Profile::first();

        $feeds = $profile->feed(null);


        $data = [];
        foreach ($feeds as $feed) {
            array_push($data, $feed['url']);
        }

        return view('frontend.feeds', compact('data'));
    }
}
