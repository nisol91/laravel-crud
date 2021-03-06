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


//se un utente atterra in /, verra portato al controller con quel metodo index
Route::get('/', 'HomeController@index')->name('home');


// Route::redirect('/', '/home', 301);
//se voglio reindirizzare / a /home..non e' il mio caso


//con resourse chiamo una risorsa, cioe un controller con tanti metodi
Route::resource('/mountains', 'MountainsController');


Route::resource('/users', 'UserController');

