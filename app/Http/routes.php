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

Route::group(['before' => ['auth'], 'middleware' => ['auth'], 'prefix' => 'cabinet'], function () {
	Route::get('/', ['as' => 'home', 'uses' => 'AccountController@index']);
	Route::get('/ajax/parts', 'AjaxController@getParts');
	Route::get('/add_reqs', 'RequisiteController@index');
	Route::post('/add_reqs', 'RequisiteController@store');
	Route::post('/buyshares', 'AccountController@buyShares');

});


Route::group(['middleware' => ['admin'], 'prefix' => 'panel' ], function () {
	Route::get('/' ,['as' => 'panel', 'uses' => 'AdminController@index']);
	Route::get('/sharesrequests' ,['as' => 'get_admin_requests', 'uses' => 'AdminController@getSharesRequests']);
	Route::delete('/sharesrequests/{ids}' ,['as' => 'delete_admin_requests', 'uses' => 'AdminController@deleteSharesRequests']);
	Route::post('/sharesrequests/{ids}' ,['as' => 'approve_admin_requests', 'uses' => 'AdminController@approveSharesRequests']);
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
