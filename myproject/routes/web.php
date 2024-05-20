<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('base/{id}/{name}', function ($id,$name) {
    // return view('base');
    // echo "hello";
    return "id".$id.$name;
});
Route::get('path',[UserController::class,'index']);
Route::get('path1',[BaseController::class,'base']);
Route::get('home',[BaseController::class,'home']);
Route::get('about',[BaseController::class,'about']);
Route::get('contact',[BaseController::class,'contact']);



