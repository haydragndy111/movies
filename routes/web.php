<?php

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::prefix(LaravelLocalization::setlocale())
    ->middleware([
        'localeSessionRedirect',
        'localizationRedirect',
        'localeViewPath',
    ])
    ->group(function () {

        Route::get('/', 'WelcomeController@index')->name('welcome');

        Route::get('/home', 'HomeController@index')->name('home');

        Auth::routes();


    });
