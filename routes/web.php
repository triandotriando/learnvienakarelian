<?php

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

Route::group(['middleware' => ['guest']], function() {
    Route::get('/', function () {
        return redirect('register');
    });

    Route::get('privacy-and-policy', function () {
        return view('privacy-and-policy');
    });
});

Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

Route::group(['middleware' => ['auth', 'lang']], function() {
    Route::get('home', 'HomeController@index');

    Route::get('help', 'HelpController@index');
    Route::post('help/create', 'HelpController@create');

    Route::get('profile', 'ProfileController@index');
    Route::post('profile/update', 'ProfileController@update');
    Route::get('profile/delete', 'ProfileController@delete');

    Route::get('play/{topic}', 'PlayController@index');
    Route::get('answer', 'AnswerController@index');

    Route::get('leaderboard', 'LeaderboardController@index');
});

Route::get('feedback', function () {
    return redirect('https://forms.gle/o8JuCdXWwFerueMy7');
});
