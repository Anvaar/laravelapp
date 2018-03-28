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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/admin','UserController@admin', function () {
    return view('welcome');
});

//Route::auth();

//Route::get('/home', 'HomeController@index');

//Route::get('/add', 'RecordController@create');

//Route::get('/', 'UserController@list');


Route::get('/add', 'RecordController@create')->name('record.create');
Route::post('/add', 'RecordController@store')->name('record.store');

Route::post('/testflash', 'UserController@testflash')->name('record.testflash');