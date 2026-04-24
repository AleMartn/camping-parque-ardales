<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => redirect('/'.config('app.locale')));

Route::prefix('{locale}')
    ->where(['locale' => 'es|en'])
    ->middleware('set-locale')
    ->group(function () {
        Route::view('/',              'pages.home')->name('home');
        Route::view('/camping',       'pages.camping')->name('camping');
        Route::view('/apartamentos',  'pages.apartamentos')->name('apartamentos');
        Route::view('/servicios',     'pages.servicios')->name('servicios');
        Route::view('/actividades',   'pages.actividades')->name('actividades');
        Route::view('/galeria',       'pages.galeria')->name('galeria');
        Route::view('/contacto',      'pages.contacto')->name('contacto');
    });
