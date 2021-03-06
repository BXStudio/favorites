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
    return view('landing');
});

Route::get('/', 'PagesController@index');
//Route::get('add', 'PagesController@add');
//Route::get('favlist', 'PagesController@favlist');

Route::resource('links', 'LinksController');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

