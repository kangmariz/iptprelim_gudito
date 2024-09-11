<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Pages.homepage');
});
Route::get('/itempage', function () {
    return view('Pages.itempage');
});
Route::get('/picturepage', function () {
    return view('Pages.picturepage');
});
