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





//*vole/voleAdmin
Route::get('/vole',
    function(){ 
        return view('vole');
});
Route::view('voleAdmin','voleAdmin');
Route::post('addVole','voleController@addVole');
