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
        return View::make('welcome');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('admin')->group(function()
{
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('auth.admin-login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('auth.admin-login.submit');
    Route::get('/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
    Route::get('/profile', 'AdminController@profile')->name('admin.profile');
    Route::get('/', 'AdminController@index')->name('home');
});
