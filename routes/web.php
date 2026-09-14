<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CitiesController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('cities', CitiesController::class);