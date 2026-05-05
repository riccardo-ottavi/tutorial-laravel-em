<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prova', function () {
    $calcolo = 5 + 5;
    return $calcolo;
});