<?php

use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Site\HomeController as SiteHomeController;
use Illuminate\Support\Facades\Route;

//Rotas do painel
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminHomeController::class, 'login'])->name('login');
    Route::get('/home', [AdminHomeController::class, 'home'])->middleware('auth');
});

// Rotas do site
Route::get('/', [SiteHomeController::class, 'login'])->name('login');
Route::get('/home', [SiteHomeController::class, 'home'])-> name('home')->middleware('auth');
Route::get('/aula', [SiteHomeController::class, 'aula'])-> name('aula')->middleware('auth');
Route::get('/carteirinha', [SiteHomeController::class, 'carteirinha'])-> name('carteirinha')->middleware('auth');
