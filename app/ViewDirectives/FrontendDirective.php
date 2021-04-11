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
        $data = [];
        if ($profile) {
            $feeds = $profile->feed(12);
            foreach ($feeds as $feed) {
                array_push($data, $feed['url']);
            }
        }

        return view('frontend.feeds', compact('data'));
    }
}
