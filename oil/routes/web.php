<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OilChangeController;

Route::get('/', [OilChangeController::class, 'create'])->name('OilChange.create');

Route::post('/check', [OilChangeController::class, 'store'])->name('OilChange.store');

Route::get('/result/{id}', [OilChangeController::class,'show'])->name('OilChange.show');
