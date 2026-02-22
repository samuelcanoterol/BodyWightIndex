<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/bwi', [\App\Http\Controllers\BwiController::class, 'index'])->name('bwi.index');

Route::post('/bwi', [\App\Http\Controllers\BwiController::class, 'result'])->name('result');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
