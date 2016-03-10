<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('home');
});

Route::get('/list', function()
{
	return View::make('show');
});

/*Route::get('/home', function()
{
	return View::make('home');
});*/

Route::get('/login', 'HomeController@login');
Route::get('/printKey', 'HomeController@printKey');
Route::get('/follow', 'HomeController@getFollow');
Route::get('/getTweet', 'HomeController@getTweetUrl');
Route::get('/show', 'HomeController@show');
Route::get('/logout', 'HomeController@logout');


