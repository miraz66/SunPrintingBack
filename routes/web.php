<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return response("<h1>Hello world</h1>");
});

Route::get('/posts/{id}', function ($id) {
    dd($id);
    return response("<h1>Posts</h1>" . $id . "</h1>", status: 200);
})-> where('id', '[0-9]+');