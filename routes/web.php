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

Route::get('/', 'HomeController@getHome')->name('home');

Route::get('/catalog', 'CatalogController@getIndex')->name('catalogIndex');

Route::get('/catalog/show/{id}', 'CatalogController@getShow')->name('catalogShow');

Route::get('/catalog/create', 'CatalogController@getCreate')->name('catalogCreate');

Route::get('/catalog/edit/{id}', 'CatalogController@getEdit')->name('catalogEdit');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/logout', function () {
    return view('auth.logout');
})->name('logout');
