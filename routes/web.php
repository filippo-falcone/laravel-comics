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
    $links = config('links');
    $data = [
        'links' => $links
    ];
    return view('home', $data);
})->name('home');

Route::get('/comics', function () {
    $links = config('links');
    $comics = config('comics');
    $data = [
        'links' => $links,
        'comics' => $comics
    ];
    return view('comics', $data);
})->name('comics');