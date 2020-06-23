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
Route::get('/cars','CarsController@index')->name('cars.index');
Route::get('/cars/{car}','CarsController@show')->name('cars.show');

Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/contactus', function () {
    return view('contactus');
});




Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth','admin']],function(){
	Route::get('/admin', function(){
		return view('admin.dashboard');
	});
});