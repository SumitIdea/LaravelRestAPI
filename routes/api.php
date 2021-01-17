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
Route::get('userlist', 'API\UserController@getAllUsers');

Route::group(['middleware' => 'auth:api'], function()
{
Route::get('details', 'API\UserController@details');
});

Route::put('update/{id}','API\UserController@update');
Route::delete('delete/{id}','API\UserController@delete');