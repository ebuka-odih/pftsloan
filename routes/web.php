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

Route::view('/', 'pages.index2')->name('index');
Route::get('apply/loan', "LoanController@loan")->name('loan');
Route::post('apply/loan', "LoanController@store")->name('store');
