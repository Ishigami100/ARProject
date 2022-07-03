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

/*Route::get('', function () {
    return view('welcome');
});*/

Route::get('', function () {
    return view('compass');
});

Route::get('/model', function () {
    return view('model');
});

Route::get('/compass', function () {
    return view('compass');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/avatar', function () {
    return view('avatar');
});
