<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');
// Frontend Routes


Route::get('blogs', 'Frontend\BlogsController@index')->name('blogs.index');
Route::get('blogs/{slug}', 'Frontend\BlogsController@show')->name('blogs.show');

// Admin Routes
Route::group(
    [
        'prefix' => 'admin',
        'middleware' => 'auth',
        'as' => 'admin.'
    ],
    function () {
        Route::get('/', function () {
            return redirect()->route('login');
        })->name('home');


        Route::resource('blogs', 'BlogsController');

        Route::get('blogs/{blog}/delete', 'BlogsController@destroy')->name('blogs.delete');
    }
);
