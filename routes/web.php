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

Route::get('/', 'MainController@choice')->name('choice');

Route::get('/main', 'MainController@main')->name('main');

Route::get('/person', 'MainController@entity')->name('entity');

Route::get('/gallery/cakes', 'GalleryController@cakes')->name('gallery.cakes');

Route::get('/gallery/desserts', 'GalleryController@deserts')->name('gallery.deserts');
