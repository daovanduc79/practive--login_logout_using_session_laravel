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
    return view('layouts.home');
});
Route::get('login', 'LoginController@showLogin')->name('show.login');
Route::get('logout', 'LoginController@logout')->name('user.logout');
Route::post('login', 'LoginController@login')->name('user.login');
Route::get('/blog', 'BlogController@showBlog')->name('show.blog');
