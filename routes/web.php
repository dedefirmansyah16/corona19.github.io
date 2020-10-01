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
Route::get('/master', function () {
    return view('layouts.master');
});


Route::get('/', function () {
    return view('index');
});



Route::get('/master', function () {
    return view('layouts.master');
});



Route::get('/about', function () {
    return view('about');
});

Route::get('/login2', function () {
            return view('login2');
});
           
Route::get('/detail', function () {
            return view('detail');
});

Route::get('/index', function () {
    return view('index');
});