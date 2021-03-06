<?php

use Illuminate\Support\Facades\Route;

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

Route::prefix("/")->middleware([])->group(function () {

    Route::get('/', function () {
        return view('index');
    })->name('index');

    Route::get('/about', function () {
        return view('about');
    })->name('about');

    Route::get('/blog', function () {
        return view('blog');
    })->name('blog');

    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');

    Route::get('/catalog', function () {
        return view('catalog');
    })->name('catalog');
    // Route::get('/cart', [CartController::class , "index"])->name('cart')->middleware(CheckLogin::class);
    // Route::get('/cheakout', [CheckoutController::class , "index"])->name('chekout')->middleware(CheckLogin::class);


});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
