<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');
Route::post('/import', [App\Http\Controllers\UserController::class, 'import'])->name('user.import');
