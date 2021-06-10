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
Route::resource('houses-admin','Admin\HouseController');

// Route::get('/event',function(){
// Route::resource('houses-admin', 'Admin\HouseController')->middleware('auth');


// ----------------------------------------route events------------------------------------------------------
   //route event
        Route::get('/event','EventiController@index');
   //admin event route
       Route::resource('/eventsUser','EventiController');
   // route admin
        Route::resource('events','Admin\EventController')->middleware('auth');
// ----------------------------------------test route events------------------------------------------------------
    // Route::resource('/eventsUser','EventiController');
    //  Route::get('/joinevent','EventiController');
// ----------------------------------------end route events------------------------------------------------------





Route::get('/edith',function(){
  return view('Admin.houses-admin.edit');
});

Route::get('/rech',function(){
  return view('recherchecar');
});

//test session
Route::post('rentp/ind', 'RentController@index')->name('rentp.ind');

Route::post('house','Admin\HouseController@store');
