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

Route::get('/','HomeController@welcome');
// Route::get('/rentcar','HomeController@rentcar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');;

Route::get('/rentp', 'RentController@index');
Route::post('rentp/fetch', 'RentController@fetch')->name('rentp.fetch');
Route::get('/admin',function(){
return view('admintest');
})->middleware('auth','admin');