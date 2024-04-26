<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home.index', []);
// })->name('home.index');

// Route::get('/contact', function () {
//     return view('home.contact');
// })->name('home.contact');

Route::view('/', 'home.index')->name('home.index');
Route::view('/contact', 'home.contact')->name('home.contact');

Route::get('/posts/{id}', function ($id) {
    $posts = [
        1 => [
            'title' => 'Intro to Laravel',
            'content' => 'This is a short intro to Laravel',
            'is_new' => true,
            'has_comments' => true
        ],
        2 => [
            'title' => 'Intro to PHP',
            'content' => 'This is a short intro to PHP',
            'is_new' => false
        ]
    ];
    // 當輸入沒有的索引時，會顯示的資訊
    abort_if(!isset($posts[$id]), 404);
    return view('posts.show', ['post' => $posts[$id]]);
})
    // ->where([
    //     'id'=>'[0-9]+'
    // ])
    ->name('posts.show ');

Route::get('/recent-posts/{datys_ago?}', function ($daysAgo = 20) {
    return 'Posts from' . $daysAgo . ' days ago';
})->name('posts.recent.index');
