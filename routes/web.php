<?php

use Faker\Guesser\Name;
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
    return view('home');
})->name('home');
// route index
Route::get('/comics', "ComicController@index")->name('data.index');
// route create
Route::get('/comics/create', "ComicController@create")->name('data.create');
// route show
Route::get('/comics/{comic}',"ComicController@show")->name('data.show');
// route edit
Route::get('/comics/{comic}/edit', "ComicController@edit")->name('data.edit');
// route store with put
Route::post('/comics',"ComicController@store")->name('data.store');
// route patch
Route::patch('/comics/{comic}',"ComicController@update")->name('data.update');