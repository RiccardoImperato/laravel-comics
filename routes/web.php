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

    $data = [
        "comics" => config('comicsdb')
    ];

    return view('home', $data);
});

Route::get('/about0', function () {

    $data = [
        "comics" => config('comicsdb')
    ];

    return view('about0', $data);
});

Route::get('/about1', function () {

    $data = [
        "comics" => config('comicsdb')
    ];

    return view('about1', $data);
});

Route::get('/about2', function () {

    $data = [
        "comics" => config('comicsdb')
    ];

    return view('about2', $data);
});

Route::get('/about3', function () {

    $data = [
        "comics" => config('comicsdb')
    ];

    return view('about3', $data);
});
