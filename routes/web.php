<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('master');
});

Route::group(['prefix' => 'api'], function() {

	Route::get('/messages/get', 'MessageController@fetchMessages');
	Route::post('/messages/send', 'MessageController@sendMessage');
	Route::post('/messages/delete', 'MessageController@deleteMessage');

	Route::get('/works/get', 'WorkController@fetchWorks');
	Route::post('/works/add', 'WorkController@addWork');

});