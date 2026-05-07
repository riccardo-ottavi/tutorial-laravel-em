<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/prova', [UserController::class, 'calcTotal']);
Route::post('/prova', [UserController::class, 'getData']);