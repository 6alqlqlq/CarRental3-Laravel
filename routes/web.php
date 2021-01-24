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
    return redirect()->route('home');
});

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();


Route::get('/cars','CarsController@index')->name('cars');
Route::get('/cars/{car}','CarsController@show')->name('cars-show');

Route::get('/aboutus','HomeController@aboutUs')->name('about-us');
Route::get('/contactus', 'ContactformController@contactUS')->name('contact-us');
Route::post('contactus', ['as'=>'contactus.store','uses'=>'ContactformController@contactSaveData']);



// Administration routes
Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::resource('/cars-management', 'CarsManageController');
    Route::get('/users/management', 'DashboardController@usersManagement')->name('users-management');

});
