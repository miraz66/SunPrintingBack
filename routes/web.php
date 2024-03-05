<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

//all Listing models
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listing',
        'listings' => Listing::all(),
    ]);
});

// Single Listing model
Route::get('/listings/{id}', function($id) {
    return view('listing', [
        'listing' => Listing::find($id)
    ]);
});

// Route::get('/', function () {
//     return view('listings');
// });

// Route::get('/hello', function () {
//     return response("<h1>Hello world</h1>");
// });

// Route::get('/posts/{id}', function ($id) {
//     dd($id);
//     return response("<h1>Posts</h1>" . $id . "</h1>", status: 200);
// })-> where('id', '[0-9]+');

// Route::get('/search', function (Request $request) {
//    return $request->name .' ' . $request->city . ' ' . $request->post;
// });