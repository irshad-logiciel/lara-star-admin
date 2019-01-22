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

Route::get('/test', function () {
    return view('welcome');
});

Route::get('/', ['as' => 'login', 'uses' => 'AuthController@login']);
Route::post('/authenticate', ['as' => 'authencticate', 'uses' => 'AuthController@authencticate']);
Route::get('/sign-up', ['as' => 'sign-up', 'uses' => 'AuthController@signUp']);

Route::group(['prefix' => 'dashboard'], function() {
	Route::get('/', ['as' => 'board-index', 'uses' => 'DashboardController@index']);
});