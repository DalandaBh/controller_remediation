<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index(){
        return view('index');
    }

    public function show(){
        return view('show');
    }

    public function edit(){
        return view('edit');
    }
}
