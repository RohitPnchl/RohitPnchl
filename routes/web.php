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

// Route::get('/', function () {
//     return view('layouts.main');
// });

Route::get('/', 'DefaultController@index')->name('index');
Route::get('/products', 'DefaultController@products')->name('products');
Route::get('/contact-us', 'DefaultController@contact')->name('contact');
Route::post('/image/save', 'DefaultController@imageSave')->name('save.image');
Route::get('/image/delete/{id}', 'DefaultController@destroy')->name('delete.image');
Route::get('/about', 'DefaultController@about')->name('about');

Route::get('/login', 'LoginController@login')->name('login');
Route::get('/register', 'LoginController@register')->name('register');
Route::post('/register/save', 'LoginController@createUser')->name('register.save');
Route::get('/log-out', 'LoginController@logOut')->name('log-out');