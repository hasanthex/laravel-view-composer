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
    return view('welcome');
});

Route::get('/common-uses', 'CommonController@index');
Route::get('/common-post', 'CommonController@post');

Route::get('/view-composer/every-single-view', 'ViewComposerController@everySingleView');
Route::get('/view-composer/create', 'ViewComposerController@createNewOne');