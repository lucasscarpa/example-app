<?php

use App\Http\Controllers\CECController;
use App\Http\Controllers\WiseController;
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

Route::get('/',  [WiseController::class, 'index'])->name('home');

Route::prefix('cec')->group(function () {
    Route::get('/', [CECController::class, 'index'])->name('cec');
});

