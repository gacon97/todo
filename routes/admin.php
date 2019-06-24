<?php
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('categories', 'CategoryController');

Route::resource('tags', 'TagController');

Route::resource('articles', 'ArticleController');

