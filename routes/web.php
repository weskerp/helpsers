<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/format-data', function (Request $request) {
    $date_before = $request->date_before;
    $date_after = getDateFormatted($request->date_before);
    return view('home', compact('date_before', 'date_after'));
})->name('format-data');
Route::get('/register', function () {
    return view('home');
})->name('register');
