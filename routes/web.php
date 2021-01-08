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
/*Route::resource('/home/users' , 'Admin\UsersController', ['as'=>'home']);*/
Route::resource('/home/genres' , 'Admin\GenresController', ['as'=>'home']);
Route::resource('/home/tages' , 'Admin\TagesController', ['as'=>'home']);
Route::resource('/home/livres' , 'Admin\LivresController', ['as'=>'home']);
Route::resource('/home/emprunts' , 'Admin\EmpruntsController', ['as'=>'home']);

/******************************************Admin Routes******************************************/
Route::namespace('Admin')->prefix('home')->name('home.')->group(function() {
    Route::resource('users' , 'UsersController');
});