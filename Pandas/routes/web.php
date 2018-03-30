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
    return view('index');
})->name('index');

Route::get('/menu', function () {
    return view('menu');
})->name('menu');

Route::get("/getdish", "DishesController@index")->name('getdish');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/signin', function () {
    return view('signin');
})->name('signin');

Route::get('/admin', 'Auth\AdminLoginController@admin');

Route::get('/admin', 'Auth\AdminLoginController@val')->name('admin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
