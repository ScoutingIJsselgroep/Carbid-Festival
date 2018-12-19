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

Route::get('/', [
    'as' => 'home', 'uses' => 'PagesController@home'
]);

Route::get('/geschiedenis', 'PagesController@geschiedenis');
Route::get('/programma', 'PagesController@programma');
Route::get('/de-tien', 'PagesController@tien');
Route::get('/sponsoren', 'PagesController@sponsoren');
Route::get('/merchandise', 'PagesController@merchandise');
Route::get('/media', 'PagesController@media');
Route::get('/info', 'PagesController@info');


Route::get('/make_album', 'AdminController@album');


Route::get('/make_album/{name}', 'AdminController@album');

Route::get('/admin', 'AdminController@index');


/*Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);*/
