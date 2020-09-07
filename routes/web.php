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

Route::get('/Andarra', function() {
    return 'Ohayo Minasan';
});

Route::get ('/Belajar', function() {
    echo '<h1> Hello EveryBody </h1>';
});

Route::get('/Latihan', function(){
    return view('Latihan');
});

Route::get('/Percobaan1', function(){
    return view('Percobaan1');
});

Route::get('/Percobaan2', function(){
    return view('Percobaan2');
});

Route::get('/Percobaan3', function(){
    return view('Percobaan3');
});

