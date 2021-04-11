<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class ViewDirectiveProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('testimonials', function () {
            return "<?php echo \App\ViewDirectives\FrontendDirective::testimonials() ?>";
        });

        Blade::directive('instagramFeeds', function () {
            return "<?php echo \App\ViewDirectives\FrontendDirective::instagramFeeds() ?>";
        });
    }
}
