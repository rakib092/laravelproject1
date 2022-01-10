<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/',[SiteController::class,'index']);

Route::get('user/create',[UserController::class,'create']);
Route::post('user/store',[UserController::class,'store']);
Route::get('user/edit/{id}',[UserController::class,'edit']);
Route::post('user/update/{id}',[UserController::class,'update']);
Route::get('user/delete/{id}',[UserController::class,'delete']);


Route::get('post/create/{id}',[PostController::class,'create']);
Route::post('post/store/{id}',[PostController::class,'store']);
Route::get('post/show',[PostController::class,'index']);
Route::get('post/delete/{id}',[PostController::class,'delete']);
Route::get('post/edit/{id}',[PostController::class,'edit']);
Route::post('post/update/{id}',[PostController::class,'update']);
Route::get('post/display/{id}',[PostController::class,'dispaly']);


Route::post('comment/store/{id}',[CommentController::class,'store']);

Route::post('tag/store',[TagController::class,'store']);