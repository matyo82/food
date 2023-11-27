<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/menu', [App\Http\Controllers\HomeController::class, 'menu'])->name('menu');
Route::post('/reserve', [App\Http\Controllers\HomeController::class, 'reserve'])->name('reserve');
Route::get('/blogs', [\App\Http\Controllers\HomeController::class, 'blog'])->name('allblogs');
Route::get('/blogs/{blog}', [\App\Http\Controllers\HomeController::class, 'getBlog'])->name('get.blog');
Route::get('/category/blog/{id}', [\App\Http\Controllers\HomeController::class, 'getCategoryBlog'])->name('category.blog');
