<?php

use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\frontend\ServicesController;
use App\Http\Controllers\frontend\TeamsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// ALL FRONTEND ROUTES
Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/about', [AboutController::class, 'aboutcompany'])->name('about');
Route::get('/team/director', [TeamsController::class, 'director'])->name('team.director');
Route::get('/service', [ServicesController::class, 'index'])->name('service');
