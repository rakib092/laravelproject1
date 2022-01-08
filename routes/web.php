<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;



Route::get('/',[SiteController::class,'index']);

Route::get('post/create',[PostController::class,'create']);
Route::get('post/show/{id}',[PostController::class,'show']);
Route::get('post/edit/{id}',[PostController::class,'edit']);
Route::post('post/update/{id}',[PostController::class,'update']);
Route::delete('post/delete/{id}',[PostController::class,'delete']);

Route::post('comment/create/{id}',[CommentController::class,'create']);

Route::post('tag/create',[TagController::class,'create']);
