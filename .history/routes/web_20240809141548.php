<?php

use App\Http\Controllers\Admin\DashboardController;
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
Route::get('/', function(){
    return view('')
});

Route::get('/admin', [DashboardController::class, 'index']);

// Route::any('/', [DashboardController::class, 'index']); // any [for calling any method (get, post, ...)]
// Route::match(['get', 'post'], '/user/profile', function () {}); // we choose the method
