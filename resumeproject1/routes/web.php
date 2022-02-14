<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('skills', function () {
    return view('skills');
})->name('skills');

Route::get('service', [ServiceController::class, 'show'])->name('service');
Route::get('contact', [ContactController::class, 'show'])->name('contact');