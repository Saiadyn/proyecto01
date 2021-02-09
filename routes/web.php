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
    return view('ejer1_1');
});

Route::view('/ejer1_2','ejer1_2');
Route::view('/ejer1_3','ejer1_3');
Route::view('/ejer1_4','ejer1_4');