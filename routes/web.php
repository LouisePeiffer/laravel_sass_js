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

Route::get('/service', function () {
    $variable = "Service";
    return view('pages.service', compact('variable'));
});

Route::get('/about', function () {
    $variable = "About";
    return view('pages.about', compact('variable'));
});
