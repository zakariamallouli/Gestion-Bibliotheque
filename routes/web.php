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
/******************************************Client Routes******************************************/

/******************************************Client Routes******************************************/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/livres', function () {
    return view('listeLivre');
});


/******************************************Admin Routes******************************************/
Auth::routes(['verify' => true]);
Route::get('/admin/dashboard', 'HomeController@index')->name('dashboard');
Route::resource('/home/auteurs' , 'Admin\AuteursController', ['as'=>'home']);
Route::get('/home/adherent' , 'Admin\UsersController@listeAdherent');
Route::resource('/home/genres' , 'Admin\GenresController', ['as'=>'home']);
Route::resource('/home/tages' , 'Admin\TagesController', ['as'=>'home']);
Route::resource('/home/livres' , 'Admin\LivresController', ['as'=>'home']);
//Route::resource('/home/emprunts' , 'Admin\EmpruntsController', ['as'=>'home']);
Route::namespace('Admin')->prefix('home')->name('home.')->middleware('can:manage-users')->group(function() {
    Route::resource('users' , 'UsersController');
});
Route::namespace('Admin')->prefix('home')->name('home.')->group(function() {
    Route::resource('emprunts' , 'EmpruntsController');
});
/******************************************Admin Routes******************************************/

