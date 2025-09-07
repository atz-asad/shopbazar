<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductController;
use App\Models\Categories;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Admin
Route::get('admin', [AdminController::class, 'deshbord'])->name('admin.deshbord');

Route::resource('admin/categori', CategoriesController::class);
Route::resource('admin/product', ProductController::class);
