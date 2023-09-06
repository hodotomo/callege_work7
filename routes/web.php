<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\PostController;      //追加
Route::get('/', [PostController::class, 'index']);
=======
use App\Http\Controllers\PostController;  //外部にあるPostControllerクラスをインポート。

// Route::get('/', function () {
//     return view('welcome');
// });
  

// Route::get('/', function() {
//     return view('posts.index');
// });
Route::get('/', [PostController::class, 'index']); 

>>>>>>> origin/master
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
<<<<<<< HEAD
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', function(){
    return view('posts.index');
});
=======
*/
>>>>>>> origin/master
