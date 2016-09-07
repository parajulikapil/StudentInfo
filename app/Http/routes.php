<?php



Route::get('/', function () {
    return view('frontend.welcome');
});

//social media
Route::get('/social/facebook','user\SocialController@redirectToProvider');
Route::get('/social/facebook/callback','user\SocialController@handleProviderCallback');

Route::get('/user','user\UserHomePageController@index')->name('user');