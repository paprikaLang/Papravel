<?php

Route::resource('discussions','PostsController');
Route::get('/','PostsController@index');
Route::get('/user/register','UsersController@register');
Route::get('/user/login','UsersController@login');
Route::post('/user/register','UsersController@store');
Route::post('/user/login','UsersController@signIn');
Route::get('/email/verify/{token}',['as'=>'email.verify','uses'=>'EmailController@verify']);