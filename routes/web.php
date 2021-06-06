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
// Route::post('/register',function(){
//     return view('register');
// });

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::resource('rentp', 'RentController');
// Route::get('/rentp', 'RentController@index');
Route::post('rentp/fetch', 'RentController@fetch')->name('rentp.fetch');

// Probleme 404
Route::get('/fetchs', 'RentController@fetchs')->name('fetchs');


Route::get('/admin-dashbord',function(){
return view('Admin\dashbord');
})->middleware('auth','admin');
//costumor Route
Route::resource('customers', 'Admin\CustomerController')->middleware('auth');
//car details
Route::get('/card/{id}','RentController@cardatails');


Route::get('/fetchsNath', 'RentController@fetchsNath')->name('fetchsNath');

//car admin
Route::resource('cars', 'Admin\CarController');
// test car edit template
// Route::get('/editcar',function(){
//     return view('Admin.car.edit');
// });


//vole route

Route::resource('/voles','VoleController');
Route::post('addVole','VoleController@store');

Route::get('/houses', 'HouseController@index')->name('houses');
<<<<<<< HEAD
 //route event
 Route::get('/event',function(){
    return view('event');
    });
//admin event route
Route::resource('/events','EventController');
=======
Route::resource('houses-admin', 'Admin\HouseController')->middleware('auth');
>>>>>>> 14d7b9507c22c343c25e52d4f70879bec67333c2
