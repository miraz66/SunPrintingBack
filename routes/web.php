<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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
Route::get('/', [ListingController::class, 'index']);

// Route::get('/', function () {
//     return view('listings', [
//         'listings' => Listing::all(),
//     ]);
// });

//Show create from
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

// Store Listings in database
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

//Show Edit From Listings
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

//Edit Submissions from Listings/update
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

//Delete Listings
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

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

//Show register / create form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//Create New User
Route::post('/users', [UserController::class, 'store']);

//Show Login / create form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//Log user out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//Log in user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);