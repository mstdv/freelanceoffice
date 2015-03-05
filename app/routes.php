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
    if(!Auth::user())
	    return View::make('login');
    else
        return View::make('index');
});

Route::get('/login', [function(){
    return View::make('login');
}]);

Route::post('/login', ['uses'=>'HomeController@login']);

/***  Grupo para login 'requerido' */
Route::group(['before' => 'auth'], function(){
    Route::get('/logout', [function(){
        Session::clear();
        return Redirect::to('/');
    }]);

    Route::resource('users', 'UsersController');
});