<?php

Auth::routes();

Route::view('/', 'home')->name('home');

Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::view('/cuenta', 'cuenta')->name('cuenta');
Route::view('control_admin', 'administrators.control.control_admin')->name('control_admin');
Route::view('/codigo', 'codigo')->name('codigo');
Route::get('/portafolio_admin','ProductsController@index2')->name('portafolio_admin');
Route::post('/portafolio_admin','ProductsController@store')->name('portafolio_admin.store');
Route::get('/portafolio_admin/crear', 'ProductsController@create')->name('portafolio_admin.create');
Route::get('/portafolio_admin/{product}/editar', 'ProductsController@edit')->name('portafolio_admin.edit');
Route::patch('/portafolio_admin/{product}', 'ProductsController@update')->name('portafolio_admin.update');
Route::get('/portafolio_admin/{product}', 'ProductsController@show')->name('portafolio_admin.show');
Route::delete('/portafolio_admin/{product}', 'ProductsController@destroy')->name('portafolio_admin.destroy');
Route::delete('/usuarios_admin/{user}', 'UsersController@destroy')->name('usuarios_admin.destroy');
Route::get('/usuarios_admin/{id}', 'UsersController@show')->name('usuarios_admin.show');
Route::get('/usuarios_admin','UsersController@index')->name('usuarios_admin');
//Rutas para el Login
Route::post('contact', 'MessagesController@store');
Route::post('admins/login', 'AdministratorsController@login')->name('admin_login');
Route::get('admins/login', 'AdministratorsController@showLoginForm');
Route::get('admins/area', 'AdministratorsController@secret');
Route::get('/portafolio', 'ProductsController@index')->name('portafolio');
