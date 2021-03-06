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

Route::get('lang/{locale}', 'LocalizationController@index');

// Administration routes
Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/', 'HomeController@dashboard')->name('dashboard');
    Route::get('/calendar', 'HomeController@calendar')->name('calendar');
    Route::resource('/cars-management', 'CarsManageController');
    Route::post('multiple/cars/delete', 'CarsManageController@multipleCarsDelete');
    // Route::post('/cars-management/multi-delete', 'CarsManageController@multiDelete')->name('cars-multi-delete');

    Route::resource('/users-management', 'UserManageController');    
    Route::post('/multiple/users/delete', 'UserManageController@multipleUsersDelete');

    Route::resource('/rents-management', 'RentController')->only(['index', 'show','create', 'store', 'edit', 'update', 'destroy']);
    Route::post('/multiple/rent/delete ', 'UserManageController@multipleRentDelete');      
    
    Route::resource('/stats-management', 'StatisticController');

    Route::resource('/rent-penalty', 'RentPenaltyController');   
    Route::post('/multiple/rent-penalty/delete ', 'ContactformController@multiplePenaltiesDelete'); 

    Route::resource('/contact-us-management', 'ContactformController')->only(['index', 'show', 'destroy']);
    Route::post('/multiple/contact-us/delete ', 'ContactformController@multipleContactDelete'); 

    Route::get('lang/{locale}', 'LocalizationController@index');
});

Route::get('profile', 'HomeController@profile')->name('profile');
Route::get('profile/edit','HomeController@profileEdit')->name('profile-edit');
// Route::get('profile/edit/{id}','HomeController@profileUpdate')->name('profile-edit');
Route::get('profile/my-rents','RentController@myRents')->name('my-rents');


Route::get('/rent/{id}', 'RentController@rents')->name('rent');
Route::post('/rent/create', 'RentController@createRent')->name('create-rent');

