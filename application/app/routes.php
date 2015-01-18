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

Route::get('biology', function()
{
	return View::make('biology.subject');
});

Route::get('chemistry', function()
{
	return View::make('chemistry.subject');
});

Route::get('physics', function()
{
	return View::make('physics.subject');
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

Route::get('biology/zoology', function()
{
	return View::make('biology.zoology');
});

Route::get('biology/botany', function()
{
	return View::make('biology.botany');
});

Route::get('biology/botany/chapter1', function()
{
	return View::make('biology.chapter');
});





