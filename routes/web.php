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

Route::get('/rent', 'RentController@index')->name('rent');
Route::get('/rent/create', 'RentController@create')->name('create-rent');
Route::get('/rent/create', 'RentController@create')->name('show-rent');

// Administration routes
Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/', 'HomeController@dashboard')->name('dashboard');
    Route::resource('/cars-management', 'CarsManageController');
    Route::post('/cars-management/multi-delete', 'CarsManageController@multiDelete')->name('cars-multi-delete');

    Route::resource('/users-management', 'UserManageController');    
   
    // Route::post('/users-management/multi-delete', 'UserManageController@multiDelete')->name('users-multi-delete');
    

});
Route::post('multipleusersdelete', 'UserManageController@multipleusersdelete');
Route::post('multiplecarsdelete', 'CarsManageController@multiplecarsdelete');

Route::get('profile', 'HomeController@profile');
