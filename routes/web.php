<?php

use App\Http\Controllers\frontend\FrontendController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// ALL FRONTEND ROUTES
Route::get('/', [FrontendController::class, 'index'])->name('index');
