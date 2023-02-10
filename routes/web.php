<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\{
    PostController, CategoryController, TagController
};
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

Route::get('/', function () {
    return view('welcome');
});



/** Admin route **/

Auth::routes();

//Posts 
Route::prefix('dashboard')->group(function() {
    Route::get('/', [HomeController::class, 'index'])->name('dashboard');
    Route::resource('post', PostController::class);
    Route::resource('categorie', CategoryController::class);
    Route::resource('tag', TagController::class);
    // Route::post('/bulkcatdelete', [CategoryController::class, 'bulkDelete'])->name('bulkCatDelete');
});