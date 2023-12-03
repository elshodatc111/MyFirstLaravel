<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShowProfileController;


Route::get('/', function () {
    return view('welcome');
});
//Controllerlar
// php artisan make:controller UserController  -> Controoller xosil qilish
Route::get('/user/{id?}',[UserController::class,'show']);

// Faqat bir vazifani bajaruvchi controllerlar
// php artisan make:controller ShowProfileController --invokable
Route::get('/show/{id}',ShowProfileController::class);



/*
Route::get('/hello/{name}', function($name){
    return "Hello Worlid ".$name;
});
// Malum o'zgazivchilarni larni olish
Route::get('/search', function(Request $request){
    $name = $request->get('name','Elshod');
    return $name;
});
// Barcha Get o'zgarivchilarni olish
Route::get('/search1', function(Request $request){
    $name = $request->all();
    return $name;
});
// Routlarni guruhlash
Route::group(['prefix'=>'dashboard'],function(){
    Route::get("users", function(){
        return 'User Dashboard';
    });
    Route::get("techer", function(){
        return 'Techer Dashboard';
    });
    Route::get("statistik", function(){
        return 'statistik Dashboard';
    });
});
*/

