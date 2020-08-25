<?php

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
    return view('welcome');
});

Route::get('/best_champs', function () {
    return view('best_champs');
});

Route::get('/unawakened', function () {
    return view('unawakened');
});

Route::get('/four_stars', function () {
    return view('four_stars');
});


