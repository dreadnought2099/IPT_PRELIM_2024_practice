<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
})->name('home.page');

Route::get('/items', function () {
    return view('item');
})->name('item.page');

Route::get('/pictures', function () {
    return view('picture');
})->name('picture.page');
