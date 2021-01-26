<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/category/{slug}', [\App\Http\Controllers\WebsiteController::class, 'category'])->name('category');
Route::get('/prices', [\App\Http\Controllers\WebsiteController::class, 'prices'])->name('prices');
Route::get('/reviews', [\App\Http\Controllers\WebsiteController::class, 'reviews'])->name('reviews');
Route::post('/reviews', [\App\Http\Controllers\WebsiteController::class, 'saveReview'])->name('reviews.save');
Route::get('/contacts', [\App\Http\Controllers\WebsiteController::class, 'contacts'])->name('contacts');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
