<?php

Route::resource('discussions','PostsController');
Route::get('/','PostsController@index');
