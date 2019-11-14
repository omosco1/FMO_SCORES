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
Route::view('/','home');
Route::view('clubs','clubs');
Route::view('games','games');
Route::view('/liveupdates','liveupdates');
Route::view('/Bettings','Bettings');
Route::view('/Standings','Standings');
Route::get('players', 'PlayerController@index');
Route::get('players/create', 'PlayerController@create');
Route::post('players', 'PlayerController@store');
Route::get('players/{player}', 'PlayerController@show');


Route::get('/post/create', 'PostController@create')->name('post.create');
Route::post('/post/store', 'PostController@store')->name('post.store');

Route::get('/posts', 'PostController@index')->name('posts');
Route::get('/post/show/{id}', 'PostController@show')->name('post.show');

Route::post('/comment/store', 'CommentController@store')->name('comment.add');
Route::post('/reply/store', 'CommentController@replyStore')->name('reply.add');
