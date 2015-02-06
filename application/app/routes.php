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

Route::get('biology-first-part', function()
{
	return View::make('biology.first-part');
});

Route::get('biology-second-part', function()
{
	return View::make('biology.second-part');
});

Route::get('chemistry-second-part', function()
{
	return View::make('chemistry.second-part');
});

Route::get('chemistry-first-part', function()
{
	return View::make('chemistry.first-part');
});

Route::get('physics-first-part', function()
{
	return View::make('physics.first-part');
});

Route::get('physics-second-part', function()
{
	return View::make('physics.second-part');
});

Route::get('english', function()
{
	return View::make('english.subject');
});

Route::get('knowledge', function()
{
	return View::make('knowledge.subject');
});

Route::get('model-tests', function()
{
	return View::make('modeltest.main');
});

Route::get('model-tests/your-tests', function()
{
	return View::make('modeltest.yourtests');
});






