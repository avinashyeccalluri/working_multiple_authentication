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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('home')->group(function(){
    Route::get('/viewbooks','HomeController@viewbooks');
    Route::get('/{book}/getdetails','HomeController@getdetails');
    Route::post('/{book}/placedorder','HomeController@placedorder');
});
Route::prefix('admin')->group(function(){
    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/','AdminController@index')->name('admin.dashboard');
    Route::get('/showbooks','AdminController@showbooks');
    Route::get('/showusers','AdminController@showusers');
    Route::get('/{user}/edit','AdminController@editusers');
    Route::patch('/{user}/update','AdminController@updateusers');
    Route::delete('/{user}/delete','AdminController@deleteusers');
    Route::get('/{book}/organizestock','AdminController@organizestock');
    Route::get('/addbookstostock','AdminController@addbooks');
    Route::post('/storebooks','AdminController@storebooks');
    Route::delete('/{book}/deletebooks','AdminController@deletebooks');
    Route::patch('/{book}/updatestock','AdminController@updatestock');    
});





