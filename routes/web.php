<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'pageTitle' => 'Homepage',
        'metaTitle' => 'Homepage del mio sito tutorial con Laravel'
    ]);
});

Route::get('/about', function () {
    return view('about',[
        'pageTitle' => 'About',
        'metaTitle' => 'About us del mio sito tutorial con Laravel'
    ]);
});

Route::get('/dashboard', function () {
    $items = ['Item 1', 'Item 2', 'Item 3'];
    $title = "Esempio dashboard";
    $numbers = [1, 2, 3, 4, 5];
    $emptyArray = [];
    $someValue = 'qualcosa';

    return view('dashboard', compact('items', 'title', 'numbers', 'emptyArray', 'someValue'));
});

Route::get('/prova', [UserController::class, 'calcTotal']);
Route::post('/prova', [UserController::class, 'getData']);