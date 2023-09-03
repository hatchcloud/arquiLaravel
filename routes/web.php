<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
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
Route::get('schedule/create', [scheduleController::class, 'create'])->name('schedule.create');
Route::post('schedule', [scheduleController::class, 'store'])->name('schedule.store');
Route::get('schedule/show/{appointment}', [scheduleController::class, 'show'])->name('schedule.show');

Route::get('schedule/{appointment}/edit', [scheduleController::class, 'edit'])->name('schedule.edit');
Route::put('schedule/{appointment}', [scheduleController::class, 'update'])->name('schedule.update');
Route::delete('schedule/{appointment}', [scheduleController::class, 'destroy'])->name('schedule.destroy');

Route::get('schedule', [scheduleController::class, 'index'])->name('schedule.index');
