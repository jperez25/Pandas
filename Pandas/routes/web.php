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

Route::get("/getdish", "DishesController@show")->name('getdish');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/order', function () {
    return view('order');
})->name('order')->middleware('auth');

Route::get('/signin', function () {
    return view('signin');
})->name('signin');

Route::get('/promotions', function () {
    $promo = DB::table('promotions')->get();
    return view('promotions', ["promos"=> $promo]);
})->name('promotions');

Auth::routes();

Route::get('/admin', 'Auth\AdminLoginController@admin')->middleware('is_admin')->name('admin');

//Route::get('/login', 'Auth\LoginController@userOrAdmin')->middleware('is_admin')->name('login');

//CRUD  for orders

Route::get('/orders', 'CRUDTableController@index')->middleware('is_admin')->name('orders');

Route::get('/add', 'CRUDTableController@add')->middleware('is_admin')->name('add');

Route::post('/insert','CRUDTableController@insert')->name('insertOrders');

Route::post('/createOrder','CRUDTableController@createOrder')->middleware('auth');

Route::get('/cart','CRUDTableController@getItemsOnCart')->name('cart')->middleware('auth');

Route::post('/removeFromCart','CRUDTableController@removeFromCart')->middleware('auth');

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

//CRUD  for promotions

Route::get('/promo', 'PromotionsTableController@index')->middleware('is_admin');

Route::get('/add-promo', 'PromotionsTableController@add')->middleware('is_admin');

Route::post('/insert-promo','PromotionsTableController@insert')->middleware('is_admin');

Route::post('/edit-promo/{id}','PromotionsTableController@edit')->middleware('is_admin');

Route::patch('/update-promo/{id}','PromotionsTableController@update')->middleware('is_admin');

Route::delete('/delete-promo/{id}','PromotionsTableController@delete')->middleware('is_admin');

//CRUD  for promotions

Route::get('/users', 'UserTableController@index')->middleware('is_admin');

Route::get('/add-user', 'UserTableController@add')->middleware('is_admin');

Route::post('/insert-user','UserTableController@insert')->middleware('is_admin');

Route::post('/edit-user/{id}','UserTableController@edit')->middleware('is_admin');

Route::patch('/update-user/{id}','UserTableController@update')->middleware('is_admin');

Route::delete('/delete-user/{id}','UserTableController@delete')->middleware('is_admin');