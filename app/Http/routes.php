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
	return view('welcome');
});

Route::group(['before' => ['auth'], 'middleware' => ['auth'], 'prefix' => 'cabinet'], function () {
	Route::get('/', ['as' => 'home', 'uses' => 'AccountController@index']);

	Route::get('/history', ['as' => 'history', 'uses' => 'HistoryController@index']);

	Route::get('/docs', ['as' => 'docs', 'uses' => 'DocController@index']);

	Route::get('/news', ['as' => 'news', 'uses' => 'NewsController@index']);

	Route::get('/ajax/parts', 'AjaxController@getParts');
	Route::get('/history/invoiceHistory', ['as' => 'history.invoice', 'uses' => 'HistoryController@getUserInvoices']);
	Route::get('/history/withdrawHistory', ['as' => 'history.withdraw', 'uses' => 'HistoryController@getUserWithdraw']);

	Route::get('/history/transactions', ['as' => 'history.transact', 'uses' => 'HistoryController@getUserTransacts']);


	Route::get('/add_reqs', 'RequisiteController@index');
	Route::post('/add_reqs', 'RequisiteController@store');
	Route::post('/buyshares', 'AccountController@buyShares');

});


Route::group(['middleware' => ['admin'], 'prefix' => 'panel' ], function () {
	Route::get('/' ,['as' => 'panel', 'uses' => 'AdminController@index']);

	Route::get('/news' ,['as' => 'admin.news', 'uses' => 'AdminController@indexNews']);

	Route::post('/news', ['as' => 'admin.create_news', 'uses' => 'AdminController@addNews']);

	Route::get('/users' ,['as' => 'admin.users', 'uses' => 'AdminController@getUsersPage']);
	Route::get('/users/all' ,['as' => 'get_users_list', 'uses' => 'AdminController@getUsersAll']);

	Route::get('/income' ,['as' => 'admin.income', 'uses' => 'AdminController@getIncomePage']);
	Route::get('/income/all' ,['as' => 'admin.get_income_list', 'uses' => 'AdminController@getIncome']);

	Route::get('/sharesrequests' ,['as' => 'get_admin_requests', 'uses' => 'AdminController@getSharesRequests']);
	Route::delete('/sharesrequests/{ids}' ,['as' => 'delete_admin_requests', 'uses' => 'AdminController@deleteSharesRequests']);
	Route::post('/sharesrequests/{ids}' ,['as' => 'approve_admin_requests', 'uses' => 'AdminController@approveSharesRequests']);

	Route::post('/dividends/pay' ,['as' => 'pay.dividends', 'uses' => 'AdminController@payDividends']);
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
