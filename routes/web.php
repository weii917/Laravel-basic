<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'home page';
})->name('home.index');

Route::get('/contact', function () {
    return 'contact';
})->name('home.contact');

Route::get('/posts/{id}', function ($id) {
    return 'Blog post ' . $id;
})
// ->where([
//     'id'=>'[0-9]+'
// ])
->name('posts.show');

Route::get('/recent-posts/{datys_ago?}', function ( $daysAgo = 20) {
    return 'Posts from' . $daysAgo . ' days ago';
})->name('posts.recent.index');
