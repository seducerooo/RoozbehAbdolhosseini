<?php

use App\Http\Controllers\IndexPage;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;



Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::get('/',[IndexPage::class, 'index'])->name('index-page');
