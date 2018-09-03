<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BangkokController extends Controller
{
//    public function index(){
//        return 'Welcome to BangkokController';
//    }

    public function index(){
        return view('bangkok.index')
            ->with('title', 'Laravel 5 Training')
            ->with('subtitle','An introduction to Laravel 5');
    }
}
