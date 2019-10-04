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

Route::get('IsraelView', function () {
    return view('IsraelView');
});

Route::get('inicio', function () {
    return view('inicio');
});


Route::get('Computacion', function () {
    return view('Computacion');
});

Route::get('Smartphones', function () {
    return view('Smartphones');
});

Route::get('Zapatos', function () {
    return view('Zapatos');
});

Route::get('Ropa', function () {
    return view('Ropa');
});

Route::get('/Electronicos', function () {
    return view('Electronicos');
});

Route::get('/JorgeAnotinioliraMartinez', function () {
    return view('JorgeAnotinioliraMartinez');
});

Route::get('Paulina', function () {
    return view('Paulina');
});

