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
Route::get('/home', 'HomeController@getHome')->name('home');

Route::group(['prefix' => '/catalog', 'middleware' => 'auth'], function () {
    Route::get('/', 'CatalogController@getIndex')->name('catalogIndex');

    Route::get('/show/{id}', 'CatalogController@getShow')->name('catalogShow');

    Route::get('/create', 'CatalogController@getCreate')->name('catalogCreate');
    Route::post('/crear', 'CatalogController@setCreate')->name('crear');

    Route::get('/edit/{id}', 'CatalogController@getEdit')->name('catalogEdit');
    Route::post('/editar/{id}', 'CatalogController@setEdit')->name('editar');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/logout', function () {
    return view('auth.logout');
})->name('logout');


/**********************************************

Route::get('/catalog', 'CatalogController@getIndex')->name('catalogIndex');

Route::get('/catalog/show/{id}', 'CatalogController@getShow')->name('catalogShow');

Route::get('/catalog/create', 'CatalogController@getCreate')->name('catalogCreate');
Route::post('/crear', 'CatalogController@setCreate')->name('crear');

Route::get('/catalog/edit/{id}', 'CatalogController@getEdit')->name('catalogEdit');
Route::post('/editar/{id}', 'CatalogController@setEdit')->name('editar');

****************************************************/
