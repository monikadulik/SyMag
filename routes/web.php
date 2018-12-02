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


Route::group(['prefix' => 'orders'], function (){
    Route::get('inProgress', [
        'uses' => 'CreatePackController@showInProgress',
        'as' => 'inProgress'
    ]);
    Route::get('awaitingPayment', [
        'uses' => 'CreatePackController@showAwaitingPayment',
        'as' => 'awaitingPayment'
    ]);
    Route::get('awaitingIssue', [
        'uses' => 'CreatePackController@showAwaitingIssue',
        'as' => 'awaitingIssue'
    ]);
    Route::get('issued', [
        'uses' => 'CreatePackController@showIssued',
        'as' => 'issued'
    ]);
    Route::get('createPackage', [
        'uses' => 'CreatePackController@createPackage',
        'as' => 'createPackage'
    ]);
//    Route::get('createPackage/{package_id}', [
//        'uses' => 'CreatePackController@createPackage',
//        'as' => 'createPackage'
//    ]);
});

Route::group(['prefix' => 'warehouse'], function (){
    Route::get('', 'WarehouseController@home')
        ->name('warehouse');
    Route::get('search', [
        'uses' => 'WarehouseController@getFilteredCommodities',
        'as' => 'warehouse.search'
    ]);
});


Route::get('addgoods', function () {
    return view('addgoods');
})->name('addgoods');

Route::get('issuegoods', function () {
    return view('issuegoods');
})->name('issuegoods');