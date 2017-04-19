<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
    Route::get('/etd', 'EtdController@index');
    Route::get('/dataset', 'DatasetController@index');
    Route::get('/spreadsheet', 'SpreadsheetController@index');
    Route::get('/spreadsheet/upload-spreadsheet', 'SpreadsheetController@create');
    Route::post('/spreadsheet/upload-spreadsheet', 'SpreadsheetController@store');
    Route::get('/spreadsheet/show/{id}', 'SpreadsheetController@show');
    Route::post('/spreadsheet/process-spreadsheet', 'SpreadsheetController@register');
});
