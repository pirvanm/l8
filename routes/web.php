<?php

use Illuminate\Support\Facades\Route;
//use App\Http\CategoriesController;
use App\Http\Controllers\CategoriesController;
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

// dd() functia predefina de sistemul laravel pentru a opri excutia codului
// ce  este scris dupa aceasta functia
// pur si simplu aplicatia nu merge mai departe
// pointer pentru a intelege aceasta linie de cod
Route::get('/', function () {
    dd('s-a oprit aici');
    // se va explica undeva prin sedinta 25 , sau mai devreme daca se voteaza :D 
    return view('welcome');

});


Route::get('/p2', function () {
    dd( 'definirea accesului catre alta pagina se face asa');
    // se va explica undeva prin sedinta 25 , sau mai devreme daca se voteaza :D 
    return view('welcome');
});


    
//Route::get('/categories/', 'CategoriesController@index')->name('categories');

// Route::get('/search/', 'GameController@search')->name('search');
// Route::post('/search/', 'GameController@search')->name('search');
// Route::patch('/search/', 'GameController@search')->name('search');
// Route::delete('/search/', 'GameController@search')->name('search');
// Route::get('/search/', 'GameController@search')->name('search');
// Route::get('/search/', 'GameController@search')->name('search');
// Route::get('/search/', 'GameController@search')->name('search');
//Route::get('/unde', CategoriesController::class );
Route::resource('categories', CategoriesController::class);
// vom vorba despre Nume::get()  prinde sedinta 17
