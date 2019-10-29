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
// Route::get('/admin/home','AdminController@home');
Route::prefix('admin')->group(function(){
    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/showbooks','AdminController@showbooks');
    Route::get('/showusers','AdminController@showusers');
    Route::get('/{user}/edit','AdminController@editusers');
    Route::patch('/{user}/update','AdminController@updateusers');
    Route::delete('/{user}/delete','AdminController@deleteusers');
    Route::get('/{book}/organizestock','AdminController@organizestock');
    Route::get('/addbookstostock','AdminController@addbooks');
    Route::post('/storebooks','AdminController@storebooks');
    Route::delete('/{book}/deletebooks','AdminController@deletebooks');
    
});
Route::patch('admin/{book}/updatestock','AdminController@updatestock');
// Route::patch('admin/update','AdminController@updatestock');




