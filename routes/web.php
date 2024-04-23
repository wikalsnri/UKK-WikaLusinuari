<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProsesControllers;

Route::get('/', function () {
    return view('kalkulator.index');
});

Route::resource('proses',ProsesControllers::class);