<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('user/{id}',function($id){
    return view('myUser',['id'=>$id]);
});

Route::get('post/{post_ID}/comment/{comment_ID}',function($post_ID,$comment_ID){
    return view('myPost',['post'=>$post_ID,'comment'=>$comment_ID]);
});
