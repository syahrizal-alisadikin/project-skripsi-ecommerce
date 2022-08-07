<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\DashboardUserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/contact', [HomeController::class,'kontak'])->name('kontak');
Route::get('/categories', [HomeController::class,'categories'])->name('categories');

Route::prefix('admin')
        ->middleware('isAdmin')
        ->name('admin.')
        ->group(function () {
            Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
            route::resource('admin', AdminController::class);
            route::resource('category', CategoryController::class);
            route::resource('users', UserController::class);
            route::resource('products', ProductController::class);
            route::resource('transactions', TransactionController::class);
        });

Route::prefix('user')
        ->middleware('auth')
        ->group(function () {
            Route::get('/', [DashboardUserController::class, 'index'])->name('user.index');
            Route::get('/transactions', [DashboardUserController::class, 'transactions'])->name('transactions.user.index');
            Route::get('/setting', [DashboardUserController::class, 'setting'])->name('setting.user.index');
        });
Auth::routes();

