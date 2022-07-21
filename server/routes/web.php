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
    return view('home');
});

Route::prefix('book')->group(function () {
    Route::get('create', function () {
        return view('book.create');
    });
});

Route::prefix('user')->group(function () {
    Route::get('/', function () {
        return view('user.index');
    });
});
