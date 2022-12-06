<?php

use App\Http\Controllers\BlogHomeController;
use Illuminate\Support\Facades\Route;




                                 /* Blog Home Index Page */
Route::get('/blog-home',[BlogHomeController::class,'index'])->name('blog-home');
