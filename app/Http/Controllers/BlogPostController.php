<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    //
    public function index(){
        return view('pages.blog-post.index');
    }
}
