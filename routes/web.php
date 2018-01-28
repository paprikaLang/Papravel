<?php

Route::resource('discussions','PostsController');
Route::get('/','PostsController@index');
Route::get('/user/register','UsersController@register');
Route::get('/user/login','UsersController@login')->name('login');
Route::post('/user/register','UsersController@store');
Route::post('/user/login','UsersController@signIn')->name('login');
Route::get('/user/logout','UsersController@logout');
Route::get('/email/verify/{token}',['as'=>'email.verify','uses'=>'EmailController@verify']);