<?php


use App\Http\Controllers\BlogPostController;
use Illuminate\Support\Facades\Route;

Route::get('/blog-post',[BlogPostController::class,'index'])->name('blog-post');
