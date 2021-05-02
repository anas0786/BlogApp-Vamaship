<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/','PageController@index');
Route::get('/category/{id}','PageController@categoryIndex');
Route::get('/view/{post}','PageController@viewPost');
Auth::routes();

//Admin routes
Route::middleware('auth')->group(function () {

Route::get('/home', 'HomeController@index')->name('home');

//post route
Route::resource('posts','PostController');

//post remove image
Route::delete('/post/{post}/remove-image', 'PostController@imageDelete')->name('post.remove-image');
});






