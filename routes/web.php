<?php

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
})->name('welcome');

Route::get('alerts', function () {
    return view('alerts');
})->name('alerts');

Route::get('reports', function () {
    return view('reports');
})->name('reports');

Route::get('createpack', function () {
    return view('createpack');
})->name('createpack');

Route::get('warehouse', function () {
    return view('warehouse');
})->name('warehouse');

Route::get('addgoods', function () {
    return view('addgoods');
})->name('addgoods');

Route::get('issuegoods', function () {
    return view('issuegoods');
})->name('issuegoods');