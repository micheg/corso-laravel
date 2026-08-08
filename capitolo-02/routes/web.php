<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/saluto', function () {
    return 'Ciao! Sto imparando Laravel 13 senza guardare video!';
});
