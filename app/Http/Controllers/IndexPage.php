<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexPage extends Controller
{
    //
    public function index(){
        return view('index');
    }
}
