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
    return view('users.guests.home');
})->name('generic-home');

Route::get('/home', function () {
    return view('users.guests.home');
})->name('home');


Route::get('/comics', function () {
    $comics = config('comics');
    $contentLinks = config('products-links');
    return view('users.guests.comics', ['comics' => $comics, 'contentLinks' => $contentLinks]);
})->name('comics');
