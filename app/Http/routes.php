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
|---------------------------------------------
| Note
|---------------------------------------------
| All routes with closures are placeholders
| until a proper controller is made.
|
*/


/*
|------------
| Home page
|------------
*/
Route::get('/', 'MainController@welcome');


/*
|---------------------
| User-related pages
|---------------------
*/
Route::get('dashboard', /*['middleware' => 'auth'], */function () {
    return view('users.dashboard');
});

Route::get('account', function () {
    return view('users.account');
});

Route::get('fridge', function () {
    return view('users.fridge');
});


/*
|-----------------------
| Recipe-related pages
|-----------------------
*/


Route::get('/recipes/ingredients/', function () {
	return view('recipes.ingredients');
});

Route::get('recipes/browse', 'RecipesController@browse');
Route::get('recipes/search/{i?}', 'RecipesController@search');

Route::resource('recipes', 'RecipesController');
/*
|----------------------
| Signin/Signup pages
|----------------------
*/
Route::get('signin', 'Auth\AuthController@getLogin');
Route::post('signin', 'Auth\AuthController@postLogin');

Route::get('signup', 'Auth\AuthController@getRegister');
Route::post('signup', 'Auth\AuthController@postRegister');