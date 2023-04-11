<?php

use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\BlogsController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\FaqController;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\frontend\MissionController;
use App\Http\Controllers\frontend\ServicesController;
use App\Http\Controllers\frontend\TeamsController;
use App\Http\Controllers\frontend\WhyChooseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// ALL FRONTEND ROUTES
Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/about', [AboutController::class, 'aboutcompany'])->name('about');
Route::get('/about/team/director', [TeamsController::class, 'director'])->name('team.director');
Route::get('/about/team/management', [TeamsController::class, 'management'])->name('team.management');
Route::get('/about/mission', [MissionController::class, 'index'])->name('mission');
Route::get('/about/why-choose', [WhyChooseController::class, 'index'])->name('choose');
Route::get('/service', [ServicesController::class, 'index'])->name('service');
Route::get('/faq', [FaqController::class, 'index'])->name('faq');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/blogs', [BlogsController::class, 'index'])->name('blogs');
