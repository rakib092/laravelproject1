<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;


Route::get('/',[SiteController::class,'index']);

//post
Route::get('post/create',[PostController::class,'create']);
Route::get('post/store',[PostController::class,'store']);
Route::get('post/stores',[PostController::class,'stores']);
Route::get('post/show/{id}',[PostController::class,'show']);

//comment
Route::post('comment/create/{id}',[CommentController::class,'create']);

//tag
Route::get('tag/create',[TagController::class,'create']);
Route::post('tag/store/{id}',[TagController::class,'store']);
Route::get('tag/show/{id}',[TagController::class,'show']);
