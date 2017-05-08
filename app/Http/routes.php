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

/**
 *
 * first things first, let's make sure that URL is all pretty
 *
 * if it's not already there, add a trailing slash unless any of the following characters are present: ? # %
 *
 */
if (isset($_SERVER['REQUEST_URI']) and substr($_SERVER['REQUEST_URI'], -1) !== '/' and !preg_match('~[?#%]~', $_SERVER['REQUEST_URI'])) {
    header("Location: {$_SERVER['REQUEST_URI']}/");
    die;
}

Route::get('/', 'MainController@welcome');

Route::get('/dashboard/', /*['middleware' => 'auth']*/, 'MainController@dashboard');

Route::get('/login/', 'Auth\AuthController@getLogin');
Route::post('/login/', 'Auth\AuthController@postLogin');

Route::get('/signup/', 'Auth\AuthController@getRegister');
Route::post('/signup/', 'Auth\AuthController@postRegister');