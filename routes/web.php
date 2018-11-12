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

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('pages/about');
});


Route::get('/users/{name}/{id}', function ($name, $id) {
    return 'user is '.$name.'<br>id is '.$id;
});

Route::get('/login/{name}', function ($n) {
    //return view('pages.login');
    return "user is:".$n;
});
*/
Route::get('/', 'PagesController@index');
Route::get('/index', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostsController');

