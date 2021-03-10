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

Route::get('/dashboard', function () {
    return view('welcome');
});

Route::get('/print', function () {
    return view('print');
});
Route::get('/printtest', function () {
    return view('printtest');
});

Route::resource('temuan', 'PrintTemuanController');

Route::post('/dokumentemuan/catch-data', 'PrintTemuanController@catchData');
Route::get('/dokumentemuan/print', 'PrintTemuanController@printData');
