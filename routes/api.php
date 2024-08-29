<?php

use App\Http\Controllers\Comment\CommentController;
use App\Http\Controllers\Post\PostController;
use App\Http\Controllers\User\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::group(['namespace'=>'User','prefix'=>'users'], function(){
     Route::post('/', [UserController::class, 'create']);
});
Route::group(['namespace'=>'Post','prefix'=>'posts'], function(){
    Route::get('/', [PostController::class, 'show']);
    Route::get('/{id}', [PostController::class, 'showpost']);
    Route::get('/comments/{id}', [PostController::class, 'postcomments']);
});
Route::group(['namespace'=>'Comment','prefix'=>'сomments'], function(){
    Route::get('/', [CommentController::class, 'allComments']);
});
