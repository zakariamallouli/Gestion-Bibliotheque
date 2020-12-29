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


/******************************************Admin Routes******************************************/

Auth::routes(['verify' => true]);
Route::get('/admin/dashboard', 'HomeController@index')->name('dashboard');
Route::resource('/home/auteurs' , 'Admin\AuteursController', ['as'=>'home']);
Route::resource('/home/adherents' , 'Admin\AdherentsController', ['as'=>'home']);
Route::resource('/home/genres' , 'Admin\GenresController', ['as'=>'home']);
Route::resource('/home/tages' , 'Admin\TagesController', ['as'=>'home']);

/******************************************Admin Routes******************************************/