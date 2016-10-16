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

Route::get('/', function () {
    return view('login');
});
Route::get('/home', function () {
	return view('home');
});
Route::get('/oc', function () {
	return view('oc');
});
Route::get('/content', function () {
	return view('content');
});

Route::post('/admin/login', 'LoginController@adminLogin');

Route::post('/common/getall', 'GetCandidates@candidateInfo');
Route::post('/common/getselected', 'GetCandidates@selectedInfo');
Route::post('/common/getrejected', 'GetCandidates@rejectedInfo');
Route::post('/common/getshortlist', 'GetCandidates@shortlistInfo');

Route::post('/content/getanswers', 'GetContent@getAnswers');
Route::post('/content/getall', 'GetContent@getAll');

Route::post('/oc/getanswers', 'GetOc@getAnswers');
Route::post('/oc/getall', 'GetOc@getAll');