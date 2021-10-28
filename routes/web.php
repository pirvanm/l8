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
// pointer pentru a intelege aceasta linie de cod
Route::get('/', function () {
    // se va explica undeva prin sedinta 25 , sau mai devreme daca se voteaza :D 
    return view('welcome');
});

// vom vorba despre Nume::get()  prinde sedinta 17
