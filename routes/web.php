<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\NepalnewsController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\AdController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [PageController::class, 'home']);
Route::get('/category/{slug}', [PageController::class, 'category']);
Route::get('/news/{id}', [PageController::class, 'newsdetail']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['admin'])->group(function(){
    Route::resource('/nepalnews',NepalnewsController::class);
    Route::resource('/posts',PostController::class);
    Route::resource('/categories',CategoryController::class);
    Route::resource('/ads',AdController::class);
});

