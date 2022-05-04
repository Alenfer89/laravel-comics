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
    $footLinks = config('footer-links');
    return view('layouts.app', ['links' => $footLinks]);
})->name('home');


Route::get('/comics', function () {
    $comics = config('comics');
    $footLinks = config('footer-links');
    $contentLinks = config('products-links');
    return view('users.guests.comics', ['comics' => $comics, 'contentLinks' => $contentLinks, 'links' => $footLinks]);
})->name('comics');
