<?php

use App\Http\Controllers\CECController;
use Illuminate\Support\Facades\Route;

Route::prefix('cec')->group(function () {
    Route::get('/admin', [CECController::class, 'admin'])->name('cec.admin');
    Route::get('/home', [CECController::class, 'home'])->name('cec.home');
    Route::get('/submenu1', [CECController::class, 'submenu1'])->name('cec.submenu1');
    Route::get('/submenu2', [CECController::class, 'submenu2'])->name('cec.submenu2');
});
