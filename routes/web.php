<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return "Aku Cinta Laravel + Sail + Octane + FrankenPHPR";
});
