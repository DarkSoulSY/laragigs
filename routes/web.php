<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Common Resource Routes:

//Index - Show all listings
//show - Show single listing
//create - Show form to create new listing
//store - Store new listing
//edit - Show form to edit listing
//update- Update listing
//destroy - Delete listing

// All Listings
Route::get('/', [ListingController::class, 'index']);

// Show Create Form

Route::get('/listings/create', [ListingController::class, 'create']);

// Store Listing Data

Route::post('/listings', [ListingController::class, 'store']);

// Show Edit Form

Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

// Update Listing

Route::put('/listings/{listing}', [ListingController::class, 'update']);

// Delete Listing

Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);


// Single Listing **Very important note we want the single listing to stay at the bottom on purpose!

Route::get('/listings/{listing}', [ListingController::class, 'show']);