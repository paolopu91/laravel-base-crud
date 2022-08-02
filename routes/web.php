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

Route::get('/comics', "ComicController@index")->name('data.index');

Route::get('/comics/create', "ComicController@create")->name('data.create');

Route::get('/comics/{comic}',"ComicController@show")->name('data.show');

Route::post('/comics',"ComicController@store")->name('data.store');