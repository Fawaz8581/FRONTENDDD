<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/cancer', function () {
    return view('cancer');
});

Route::get('/cardiology', function () {
    return view('cardiology');
});


Route::get('/dentistry', function () {
    return view('dentistry');
});


Route::get('/dermatology', function () {
    return view('dermatology');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/neurology', function () {
    return view('neurology');
});

Route::get('/ophthalmology', function () {
    return view('ophthalmology');
});
