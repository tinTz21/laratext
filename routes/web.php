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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pages/crude','PagesController@crudeview')->name('crude');

Route::get('/pages/sticky','PagesController@displayed')->name('sticky');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/pages/test1','PagesController@test1')->name('test1');

Route::get('/projects','ProjectsController@index');
Route::post('/projects','ProjectsController@store');

Route::get('/projects/create','ProjectsController@create');