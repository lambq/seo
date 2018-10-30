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

Route::get('/', 'PagesController@index')->name('root');
Route::get('/{url?}', 'PagesController@show')->name('site');
Route::get('/icp/{url}', 'ApiController@icp')->name('icp');
Route::get('/seo/{url}', 'ApiController@seo')->name('seo');
Route::get('/rank/{url}', 'ApiController@rank')->name('rank');
Route::get('/snapshot/{url}', 'ApiController@snapshot')->name('snapshot');
Route::get('/meta/{url}', 'ApiController@meta')->name('snapshot');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
