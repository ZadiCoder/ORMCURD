<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;

Route::get('/', function () {
    return view('welcome');
});

/* Route::get('about/{name}', [AboutController::class,'show']); */
/* Route::get('about', [AboutController::class,'show']); */

Route::get('about1', [AboutController::class,'show1']);
Route::get('about2', [AboutController::class,'show2']);