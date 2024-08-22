<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Dashboard\CategoriesController;
use Illuminate\Support\Facades\Route;





Route::group([

], function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])
    ->('auth')
    ->name('dashboard');

    Route::resource('dashboard/categories', CategoriesController::class)
});
