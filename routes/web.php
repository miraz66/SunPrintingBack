<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;


// ----------------------------------------------------------------
//Common Resource Routes::
//Index - Show all listings
// show - Show single listing
// create - show form to create new listing
// store - Store new listing
// edit - Show form to edit listing 
// update - update listing
// destroy - Delete listing

//all Listing models
Route::get('/',[ListingController::class, 'index']);

// Route::get('/', function () {
//     return view('listings', [
//         'listings' => Listing::all(),
//     ]);
// });


// Single Listing model
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Route::get('/listings/{listing}', function(Listing $listing) {
//     return view('listing', [
//         'listing' => $listing
//     ]);

//     // $listing = Listing::find($id);

//     // if ($listing) {
//     //     return view('listing', [
//     //         'listing' => $listing
//     //     ]);
//     // } else {
//     //     abort(404);
//     // }
// });


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



