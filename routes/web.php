<?php

Route::get('/', 'MainController@choice')->name('choice');

Route::get('/main', 'MainController@main')->name('main');

Route::get('/person', 'MainController@entity')->name('entity');

Route::get('/gallery/cakes', 'GalleryController@cakes')->name('gallery.cakes');

Route::get('/gallery/desserts', 'GalleryController@deserts')->name('gallery.deserts');


Route::get('/showcase/candybar', 'ShowcaseController@candybar')->name('showcase.candybar');

Route::get('/showcase/dessert', 'ShowcaseController@dessert')->name('showcase.deserts');

Route::get('/showcase/stuffing', 'ShowcaseController@stuffing')->name('showcase.stuffing');