<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;  //外部にあるPostControllerクラスをインポート。

// Route::get('/', function () {
//     return view('welcome');
// });
  

// Route::get('/', function() {
//     return view('posts.index');
// });
Route::get('/', [PostController::class, 'index']); 

Route::get('/posts/create', [PostController::class, 'create']); 

Route::get('/posts/{post}', [PostController::class, 'show']); 

Route::post('/posts', [PostController::class, 'store']); 

Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
Route::put('/posts/{post}', [PostController::class, 'update']);

Route::delete('/posts/{post}', [PostController::class, 'delete']);
