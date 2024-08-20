<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Dashboard\CategoriesController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', [DashboardController::class, 'index'])
->middleware(['auth', 'verified'])->name('dashboard');
Route::resource('dashboard/categories', CategoriesController::class);