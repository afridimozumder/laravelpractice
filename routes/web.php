<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AboutController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/contacts', [AboutController::class, 'contact'])->name('contact')->middleware('test1');

Route::get('/Hehe', [AboutController::class, 'hehe']);