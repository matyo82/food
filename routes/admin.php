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

    // Slider routes
    Route::resource('/service',
        \App\Http\Controllers\ServiceController::class,
        ['names' => 'service']);

    // Staff routes
    Route::resource('/staff',
        \App\Http\Controllers\StaffController::class,
        ['names' => 'staff']);

    // reservation routes
    Route::get('/reserve', [App\Http\Controllers\ReserveController::class, 'index'])->name('admin.reserve');
    Route::get('/reserve/{type}/{reserve}', [App\Http\Controllers\ReserveController::class, 'confirmation'])->name('admin.reserve.confirmation');
    Route::delete('/reserve/{reserve}', [App\Http\Controllers\ReserveController::class, 'delete'])->name('admin.reserve.delete');

    // General routes
    Route::get('/general', [App\Http\Controllers\GeneralController::class, 'index'])->name('admin.general');
    Route::put('/general/{type}', [App\Http\Controllers\GeneralController::class, 'store'])->name('admin.general.store');
});
