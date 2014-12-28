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
	return View::make('index');
});

Route::get('about', function()
{
	return View::make('general.about');
});

Route::get('faq', function()
{
	return View::make('general.faq');
});

Route::get('privacy-policy', function()
{
	return View::make('general.privacy');
});

Route::get('terms-and-conditions', function()
{
	return View::make('general.terms');
});

Route::get('contact-us', function()
{
	return View::make('general.contact');
});



