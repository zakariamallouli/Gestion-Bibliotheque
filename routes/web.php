<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/testhome', 'HomeController@test')->name('testhome');

//Route::get('/home/auteurs', 'AuteursController@index')->name('list_auteur');

Route::resource('/home/auteurs' , 'Admin\AuteursController', ['as'=>'home']);

Route::resource('/home/editeurs' , 'Admin\EditeursController', ['as'=>'home']);

Route::resource('/home/genres' , 'Admin\GenresController', ['as'=>'home']);
