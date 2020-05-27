<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post','PostController@index');

Route::get('/control', function(){
    return view('post');
});

Route::get('/variable', function(){
    // $nom ="Linda";

    return view('post',['nom'=>'Linda']);
});