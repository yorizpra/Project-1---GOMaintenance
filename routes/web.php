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

// Route::get('/', function () {
//     $nama = 'Yoga Rizki Pratama';
//     return view('index', ['nama' => $nama]);
// });

// Route::get('/users/ReadUser', function () {
//     return view('ReadUser');
// });
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/index', 'PagesController@home');
Route::get('/admin', 'PagesController@admin');
Route::get('/user', 'PagesController@user');
Route::get('/about', 'PagesController@about');

// Users
Route::get('/users/Create', 'PenggunaController@create');
Route::get('/users', 'PenggunaController@index');
Route::post('/users', 'PenggunaController@store');
Route::delete('/users/{usr}', 'PenggunaController@destroy');
Route::get('/users/{usr}', 'PenggunaController@edit');
Route::patch('/users/Edit/{usr}', 'PenggunaController@update');
// Route::resource('users', 'PenggunaController');

// Kajur
Route::get('/chiefs/Create', 'ChiefsController@create');
Route::get('/chiefs', 'ChiefsController@index');
Route::post('/chiefs', 'ChiefsController@store');
Route::delete('/chiefs/{chief}', 'ChiefsController@destroy');
Route::get('/chiefs/{chief}', 'ChiefsController@edit');
Route::patch('/chiefs/Edit/{chief}', 'ChiefsController@update');

// Admin
Route::get('/admins/Create', 'AdminsController@create');
Route::get('/admins', 'AdminsController@index');
Route::post('/admins', 'AdminsController@store');
Route::delete('/admins/{admin}', 'AdminsController@destroy');
Route::get('/admins/{admin}', 'AdminsController@edit');
Route::patch('/admins/Edit/{admin}', 'AdminsController@update');

// Ruangan
Route::get('/rooms/Create', 'RoomsController@create');
Route::get('/rooms', 'RoomsController@index');
Route::post('/rooms', 'RoomsController@store');
Route::delete('/rooms/{room}', 'RoomsController@destroy');
Route::get('/rooms/{room}', 'RoomsController@edit');
Route::patch('/rooms/Edit/{room}', 'RoomsController@update');

// Barang
Route::get('/items/Create', 'ItemsController@create');
Route::get('/items', 'ItemsController@index');
Route::post('/items', 'ItemsController@store');
Route::delete('/items/{item}', 'ItemsController@destroy');
Route::get('/items/{item}', 'ItemsController@edit');
Route::patch('/items/Edit/{item}', 'ItemsController@update');