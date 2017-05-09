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
    return view('pages/home');
});

Route::get('/documentation', function () {
    return view('pages/documentation');
});

Route::get('/pages/404', function () {
    return view('pages/404');
});

Route::get('/pages/album', function () {
    return view('pages/album');
});

Route::get('/pages/contact', function () {
    return view('pages/contact');
});