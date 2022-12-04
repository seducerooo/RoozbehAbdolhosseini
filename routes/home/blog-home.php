<?php

use App\Http\Controllers\BlogHomeController;
use Illuminate\Support\Facades\Route;



Route::get('/blog-home',[BlogHomeController::class,'index']);
