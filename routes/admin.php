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
Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/', function (){
        return view('layouts.backend');
    });
    // category routes
    Route::resource('/category',
        \App\Http\Controllers\CategoryController::class,
        ['names' => 'category']);

    // Menu routes
    Route::resource('/Menu',
        \App\Http\Controllers\MenuController::class,
        ['names' => 'menu']);

    // Blog routes
    Route::resource('/blog',
        \App\Http\Controllers\BlogController::class,
        ['names' => 'blog']);

    // Gallery routes
    Route::resource('/gallery',
        \App\Http\Controllers\GalleryController::class,
        ['names' => 'gallery']);

    // Slider routes
    Route::resource('/slider',
        \App\Http\Controllers\SliderController::class,
        ['names' => 'slider']);
});
