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

// Route::get('/', function () {
//     return view('mainView.nindyaRegistration');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/nindyaRegistration','NindyaRegistrationController@index');
Route::post('/nindyaRegistration','NindyaRegistrationController@saveNindyaRegistration');
Route::get('/getLocationID/{locationID}',array('as'=>'getLocationID','uses'=>'GenerationController@getGenerationbyLocationID'));
