<?php

Route::resource('discussions','PostsController');
Route::get('/','PostsController@index');
Route::get('/user/register','UsersController@register');