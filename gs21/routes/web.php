<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('about', function () {
    return view('about');
})->name('aboutme');

Route::get('contact' , [ContactController::class, 'show'])->name('contact');


Route::get('post', function () {
    return view('post');
})->name('post');