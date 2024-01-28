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

Route::get('/about4', function () {

    $data = [
        "comics" => config('comicsdb')
    ];

    return view('about4', $data);
});

Route::get('/about5', function () {

    $data = [
        "comics" => config('comicsdb')
    ];

    return view('about5', $data);
});

Route::get('/about6', function () {

    $data = [
        "comics" => config('comicsdb')
    ];

    return view('about6', $data);
});

Route::get('/about7', function () {

    $data = [
        "comics" => config('comicsdb')
    ];

    return view('about7', $data);
});

Route::get('/about8', function () {

    $data = [
        "comics" => config('comicsdb')
    ];

    return view('about8', $data);
});

Route::get('/about9', function () {

    $data = [
        "comics" => config('comicsdb')
    ];

    return view('about9', $data);
});

Route::get('/about10', function () {

    $data = [
        "comics" => config('comicsdb')
    ];

    return view('about10', $data);
});

Route::get('/about11', function () {

    $data = [
        "comics" => config('comicsdb')
    ];

    return view('about11', $data);
});
