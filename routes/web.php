<?php

Route::resource('discussions','PostsController');
Route::get('/','PostsController@index');
Route::get('/user/register','UsersController@register');
Route::post('/user/register','UsersController@store');
Route::get('/email/verify/{token}',['as'=>'email.verify','uses'=>'EmailController@verify']);