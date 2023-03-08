<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
Use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactController;





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

// Auth::routes();

// Praktikum 1 NOMOR 1 
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    // http://127.0.0.1:8000/home

// Praktikum 1 NOMOR 2
Route::prefix('List')->group(function () {
    Route::get('/Product', [ProductController::class, 'product']);
    // http://127.0.0.1:8000/List/Product
    Route::get('/testing', [ProductController::class, 'test']);
    // http://127.0.0.1:8000/List/testing
});

// Praktikum 1 NOMOR 3
Route::get('/News/{id?}', [NewsController::class, 'news']);
    // http://127.0.0.1:8000/News/Parameter
Route::get('/News2', [NewsController::class, 'news2']);
    // http://127.0.0.1:8000/news

// Praktikum 1 NOMOR 4
Route::prefix('/List')->group(function () {
    Route::get('/Program', [ProgramController::class, 'program']);
    // http://127.0.0.1:8000/List/Program
    Route::get('/Program1', [ProgramController::class, 'program1']);
    // http://127.0.0.1:8000/List/Program1
});

// Praktikum 1 NOMOR 5
Route::get('/About-us', [AboutController::class, 'aboutus']);
    // http://127.0.0.1:8000/About-us


// Praktikum 1 NOMOR 6
Route::resource('/contact-us', ContactController::class);
    // http://127.0.0.1:8000/contact-us

    



