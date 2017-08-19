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

Route::get('/messages/get', 'MessageController@fetchMessages');
Route::post('/api/messages/send', 'MessageController@sendMessage');
Route::post('/api/messages/delete', 'MessageController@deleteMessage');