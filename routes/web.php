<?php

use App\Models\category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;

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

Route::get('/', [CategoryController::class, 'index']);


Route::get('/category/{category}', [ListingController::class, 'index']);
Route::get('/category/{category}/{listing}', [ListingController::class, 'shows']);
Route::get('/manage', [ListingController::class, 'manage'])->middleware('auth');
// Route::get('/edit/{listing}', [ListingController::class, 'edit'])->middleware('auth');
Route::get('/create', [ListingController::class, 'create'])->middleware('auth');
Route::post('/', [ListingController::class, 'store'])->middleware('auth');

Route::get('/edit/{listing}', [ListingController::class, 'edit'])->middleware('auth');
Route::put('/edit/{listing}', [ListingController::class, 'update'])->middleware('auth');
Route::delete('/delete/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

Route::get('/about', [ListingController::class, 'about']);
Route::get('/contact', [ListingController::class, 'contact']);




Route::get('/signup',[UserController::class, 'create'])->middleware('guest');
Route::post('/signup/user',[UserController::class, 'store']);

Route::get('/login',[UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login/authenticate',[UserController::class, 'authenticate']);

Route::get('/logout',[UserController::class, 'logout'])->middleware('auth');





// Route::get('/mobile/1', function () {
//     return view('listings.single');
// });

// Route::get('/login', function () {
//     return view('users.login');
// });

// Route::get('/signup', function () {
//     return view('users.signup');
// });

// Route::get('/create', function () {
//     return view('listings.create');
// });

// Route::get('/edit', function () {
//     return view('listings.edit');
// });

