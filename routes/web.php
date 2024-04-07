<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'home page';
})->name('home.index');

Route::get('/contact', function () {
    return 'contact';
})->name('home.contact');
