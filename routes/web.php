<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// --------LISTINGS CONTROLLERS-------- //

// All listings
Route::get('/', [ListingController::class, 'index']);

// Create Listing Form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

// Store listings 
Route::post('/listings/store', [ListingController::class, 'store'])->middleware('auth');


// Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// Update listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// Delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// Manage Listings
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');


// Single listings
Route::get('/listings/{listing}', [ListingController::class, 'show']);



// --------USER CONTROLLERS-------- //


// Show registration form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create new users
Route::post('/users', [UserController::class, 'store']);

// Log user out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Authenticate
Route::post('/users/auth', [UserController::class, 'auth']);

