<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Pengguna Login
Route::get('pengguna/login', 'PenggunaAuth\LoginController@showLoginForm');
Route::post('pengguna/login', 'PenggunaAuth\LoginController@login');
Route::post('pengguna/logout', 'PenggunaAuth\LoginController@logout');

//Pengguna Register
Route::get('pengguna/register', 'PenggunaAuth\RegisterController@showRegistrationForm');
Route::post('pengguna/register', 'PenggunaAuth\RegisterController@register');

//Pengguna Passwords
Route::post('pengguna/password/email', 'PenggunaAuth\ForgotPasswordController@sendResetLinkEmail');
Route::post('pengguna/password/reset', 'PenggunaAuth\ResetPasswordController@reset');
Route::get('pengguna/password/reset', 'PenggunaAuth\ForgotPasswordController@showLinkRequestForm');
Route::get('pengguna/password/reset/{token}', 'PenggunaAuth\ResetPasswordController@showResetForm');

