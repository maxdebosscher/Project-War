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

Route::get('/', 'ViewController@index');
Route::get('/lesmateriaal', 'ViewController@lesmateriaal');
Route::get('/videos', 'ViewController@videos');
Route::get('/over', 'ViewController@over');
Route::get('/dilemma', 'ViewController@dilemma');
Route::get('/contact', 'ViewController@contact');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
