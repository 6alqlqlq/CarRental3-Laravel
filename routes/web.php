<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/cars','CarsController@index')->name('cars.index');
Route::get('/cars/{car}','CarsController@show')->name('cars.show');

Route::get('/aboutus', function () {
    return view('aboutus');
});
/*
Route::get('/contactus', function () {
    return view('contactus');
});
*/
Route::get('/contactus', 'ContactformController@contactUS');
Route::post('contactus', ['as'=>'contactus.store','uses'=>'ContactformController@contactSaveData']);

Route::get('/home', 'HomeController@index')->name('home');

// Administration routes
Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/', 'Administration\DashboardController@index');
    Route::get('/vehiclemanagement', 'Administration\DashboardController@index');
    
});