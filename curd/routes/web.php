<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
Route::get('/', function () {
    return view('welcome');
});

//Route::get('/','TodoController@show');

Route::get('todo_show', [TodoController::class,'show']);
Route::get('todo_delete/{id}', [TodoController::class,'destroy']);
Route::get('todo_create', [TodoController::class,'create']);
Route::post('todo_submit', [TodoController::class,'store']);
Route::get('todo_edit/{id}', [TodoController::class,'edit']);
Route::post('todo_update/{id}', [TodoController::class,'update'])->name('todo.update');

Route::get('index', function () {
    return view('index');
});