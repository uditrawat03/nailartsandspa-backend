<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware('api')
    ->group(
        function ($router) {
            Route::post('login', 'AuthController@login')->name('api.login');
            Route::post('logout', 'AuthController@logout')->name('api.logout');
            Route::post('refresh', 'AuthController@refresh')->name('api.refresh');
            Route::get('me', 'AuthController@me')->name('api.me');
        }
    );

Route::get('instagram-feed', 'InstagramFeedController@getFeed')->name('instagram-feed');
Route::post('contact-us', 'ContactUsController@store')->name('contact-us');
Route::get('testimonials', 'TestimonialController@index')->name('testimonials');