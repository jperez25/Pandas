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

Route::get('/admin', 'Auth\AdminLoginController@admin')->middleware('is_admin')->name('admin');

Route::get('/login', 'LoginController@userOrAdmin')->middleware('is_admin')->name('login');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//CRUD  for orders

Route::get('/orders', 'CRUDTableController@index')->middleware('is_admin')->name('orders');

Route::get('/add', 'CRUDTableController@add')->middleware('is_admin')->name('add');

Route::post('/insert','CRUDTableController@insert')->name('insertOrders');

Route::post('/edit/{id}','CRUDTableController@edit')->middleware('is_admin');

Route::patch('/update/{id}','CRUDTableController@update')->middleware('is_admin');

Route::delete('/delete/{id}','CRUDTableController@delete')->middleware('is_admin');

//CRUD  for dishes

Route::get('/dishes', 'DishesTableController@index')->middleware('is_admin')->name('dishes');

Route::get('/add-dish', 'DishesTableController@add')->middleware('is_admin');

Route::post('/insert-dish','DishesTableController@insert')->middleware('is_admin');

Route::post('/edit-dish/{id}','DishesTableController@edit')->middleware('is_admin');

Route::patch('/update-dish/{id}','DishesTableController@update')->middleware('is_admin');

Route::delete('/delete-dish/{id}','DishesTableController@delete')->middleware('is_admin');

//CRUD for UI

Route::resource('crud', 'CRUDController');
