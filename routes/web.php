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

Route::get('/', 'CalcController@home');
Route::post('/calc', 'CalcController@calc');
Route::get('/blade', function () {
	return view('child');
});
Route::get('/my-page', function () {
	return view('my-page');
});