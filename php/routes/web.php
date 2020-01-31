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

Route::post('/auth/login', 'Auth\LoginController@login')->name('login');
Route::post('/auth/password/reset', 'Auth\ResetPasswordController@reset')->name('password.reset');
Route::post('/auth/password/forgot', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.forgot');

Route::get('/{vue?}', function () {
    return view('app');
})->where('vue', '[\/\w\.-]*')->name('home');
