<?php


Route::get('/', 'dependenciasControlador@index');

Route::resource('Dependencia', 'dependenciaControlador');
Auth::routes();

Route::get('/home', 'HomeController')->name('home');

