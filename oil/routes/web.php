<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OilChanController;

Route::get('/', [OilChanController::class, 'create'])->name('OilChange.create');

Route::post('/check', [OilChanController::class, 'store'])->name('OilChange.store');

Route::get('/result/{id}', [OilChanController::class,'show'])->name('OilChange.show');
