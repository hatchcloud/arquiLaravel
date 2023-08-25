<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\productController;
use App\Http\Controllers\scheduleController;

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

Route::get('/', [homeController::class, 'index'])->name('home.index');
Route::get('product/create', [productController::class, 'create'])->name('product.create');
Route::post('product', [productController::class, 'store'])->name('product.store');
Route::get('product/show/{productAppointment}', [productController::class, 'show'])->name('product.show');

Route::get('schedule', [scheduleController::class, 'index'])->name('schedule.index');
