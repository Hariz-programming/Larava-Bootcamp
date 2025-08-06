<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hai', function () {
    return 'Hai Abah! Laravel dah jalan 🎉';
});

Route::get('/hoi', function () {
    return 'Kerja rumah hari ini ape';
});
