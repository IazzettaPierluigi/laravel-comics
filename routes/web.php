<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {




    return view('welcome');
})->name('homePage');

Route::get('/comics', function () {

    $currentComics = config('comics');

    return view('comics', compact('currentComics'));
})->name('comicsPage');
