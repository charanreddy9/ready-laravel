<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');

Route::group(['middleware' => 'cors','auth:api'], function(){
		Route::post('details', 'API\UserController@details');
		Route::post('insert', 'InsertController@store');
		Route::get('showlist', 'InsertController@show');
		Route::post('getrecord/{id}', 'InsertController@getrecord');
		Route::post('updaterecord/{id}', 'InsertController@update');
		Route::post('deleterecord/{id}', 'InsertController@delete');
});