<?php

Route::get('/', 'dependenciaControlador@index');

Route::resource('Dependencia', 'dependenciaControlador');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

