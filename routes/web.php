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

Route::get('/', function () {
    return view('index');
});

// COMPANY==============
Route::get('/company/history', function () {
    return view('company.history');
})->name('company.history');

Route::get('/company/manufacture', function () {
    return view('company.manufacture');
})->name('company.manufacture');

Route::get('/company/v&m', function () {
    return view('company.v&m');
})->name('company.v&m');

// PRODUCT ===========================
Route::get('/product/office', function () {
    return view('product.office');
})->name('product.office');

Route::get('/product/bedroom', function () {
    return view('product.bedroom');
})->name('product.bedroom');

Route::get('/product/livingroom', function () {
    return view('product.livingroom');
})->name('product.livingroom');

Route::get('/product/walkincloset', function () {
    return view('product.walkincloset');
})->name('product.walkincloset');

Route::get('/product/wardrobe', function () {
    return view('product.wardrobe');
})->name('product.wardrobe');

Route::get('/product/kitchen', function () {
    return view('product.kitchen');
})->name('product.kitchen');
// END PRODUCT ===========================

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
