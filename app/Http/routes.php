<?php

/*
|--------------------------------------------------------------------
| URL Rewriter
|--------------------------------------------------------------------
|
| First things first, let's make sure that URL is all pretty.
|
| If it's not already there, add a trailing slash to the end of the
| url unless any of the following characters are present:
|
| ? # %
|
*/

if (    isset($_SERVER['REQUEST_URI'])
    and substr($_SERVER['REQUEST_URI'], -1) !== '/'
    and !preg_match('~[?#%]~', $_SERVER['REQUEST_URI'])
) {
    header("Location: {$_SERVER['REQUEST_URI']}/");
    die;
}

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

/*
|-----------
| ~ HOME ~
|-----------
*/

Route::get('/', 'MainController@welcome');


/*
|------------
| ~ USERS ~
|------------
*/

Route::get('dashboard', 'UsersController@dashboard');

Route::get('account', 'UsersController@account');

Route::get('account/edit', 'UsersController@edit');
Route::put('account/edit', 'UsersController@update');


/*
|--------------
| ~ RECIPES ~
|--------------
*/

Route::get('recipes/browse', 'RecipesController@browse');
Route::get('recipes/search', 'RecipesController@search');
Route::get('recipes/search/{q}', 'RecipesController@searchResults');

Route::resource('recipes', 'RecipesController');


/*
|------------------------
| ~ SIGNING IN/UP/OUT ~
|------------------------
*/

Route::get('signin', 'Auth\AuthController@getLogin');
Route::post('signin', 'Auth\AuthController@postLogin');

Route::get('signout', 'Auth\AuthController@getLogout');

Route::get('signup', 'Auth\AuthController@getRegister');
Route::post('signup', 'Auth\AuthController@postRegister');