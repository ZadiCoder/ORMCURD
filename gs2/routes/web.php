<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function(){
    return view('aboutme');
});

Route::get('adminPro', function(){
    return view('admin.profile');
});

Route::get('contact', function(){
    return view('contactme',['name'=>'Zahid', 'roll'=>'1122']);
});