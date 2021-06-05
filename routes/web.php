<?php
use App\Http\Controllers\voleController;
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

Auth::routes();






Route::get('/vole',
    function(){ 
        return view('vole');
});
//admin
Route::view('voleAdmin','voleAdmin');
//add vole admin
Route::post('addVole','voleController@addVole');
Route::get('voleAdmin','voleController@getVole');

