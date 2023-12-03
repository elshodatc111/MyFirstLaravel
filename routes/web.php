<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/{name}', function($name){
    return "Hello Worlid ".$name;
});

Route::get('/hello/{name?}', function($name=null){
    return "Hello Worlid";
});
