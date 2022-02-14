<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
 
/* Route::get('about', function(){
    return "Hello World";
}); */

/* Route::get('uri/{p_para}', function($para){
    return $para;
}); */

/* Route::get('id/{user_id}/comments/{comment}', function($id,$com){
    return $id.$com;
}); */

/* Route::get('uri/{para}',function($para){
    return $para;
})->whereNumber('para'); */

/* Route::get('uri/{para}',function($para){
    return $para;
})->whereAlpha('para'); */