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

Route::get('/', function() {
	return '123';
});

Route::group(['before' => ['auth'], 'prefix' => 'cabinet'], function () {
	Route::get('/', 'AccountController@index');
	Route::get('/ajax/parts', 'AjaxController@getParts');
	Route::get('/add_reqs', 'RequisiteController@index');
	Route::post('/add_reqs', 'RequisiteController@store');
	Route::post('/buyshares', 'AccountController@buyShares');

});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
