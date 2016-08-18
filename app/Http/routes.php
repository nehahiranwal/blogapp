<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

 Route::get('/login',array('uses' =>'AuthController@create'));
 Route::post('/login',array('uses' =>'AuthController@store'));
 Route::get('/logout',array('uses'=>'AuthController@logout'));
 Route::get('/blog',array('uses'=>'BlogController@index'));
  Route::get('/create',array('uses'=>'BlogController@create'));
  Route::post('/blog',array('uses'=>'BlogController@store'));
  Route::get('/edit/{id}',array('uses'=>'BlogController@edit'));
 Route::resource('/update', 'BlogController@update');
 Route::get('/comment',array('uses'=>'CommentController@create'));
  Route::post('/storecomment/{id}',array('uses'=>'CommentController@store'));
  