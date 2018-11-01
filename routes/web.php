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
Route::get('/', 'CodencatController@index');
Route::get('/graphicsDesign', 'CodencatController@graphicsDesign');
Route::get('/development', 'CodencatController@development');
Route::get('/portfolio', 'CodencatController@portfolio');
Route::get('/project', 'CodencatController@project');
Route::get('/contact', 'CodencatController@contact');
Route::get('/about', 'CodencatController@about');
