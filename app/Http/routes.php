<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'WelcomeController@index');
//
//Route::get('home', 'HomeController@index');
//
//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);



// my old routes
Route::get('/', 'PagesController@index');
//Route::get('/perk/',    'PagesController@perk');
//Route::get('/pardod/{id}','PagesController@pardod_id');
//Route::get('/pardod/',   'PagesController@pardod');
//Route::get('/jauns_sludinajums/',    'PagesController@jauns_sludinajums');
Route::get('/admin/',    'PagesController@admin');
