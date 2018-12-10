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

Route::view('/', 'welcome')->name('welcome');
Route::view('alerts', 'alerts')->name('alerts');
Route::view('reports', 'reports')->name('reports');
Route::view('addgoods', 'addgoods')->name('addgoods');
Route::view('issuegoods', 'issuegoods')->name('issuegoods');


Route::group(['prefix' => 'orders'], function (){
    Route::redirect('/', 'orders/inProgress');
    Route::get('awaitingPayment', [
        'uses' => 'OrdersController@showAwaitingPayment',
        'as' => 'awaitingPayment'
    ]);
    Route::get('inProgress', [
        'uses' => 'OrdersController@showInProgress',
        'as' => 'inProgress'
    ]);
    Route::get('awaitingIssue', [
        'uses' => 'OrdersController@showAwaitingIssue',
        'as' => 'awaitingIssue'
    ]);
    Route::get('issued', [
        'uses' => 'OrdersController@showIssued',
        'as' => 'issued'
    ]);
    Route::get('{order}', [
        'uses' => 'OrdersController@showPackage',
        'as' => 'showPackage'
    ]);
});


Route::group(['prefix' => 'warehouse'], function (){
    Route::get('/', 'WarehouseController@home')
        ->name('warehouse');
    Route::get('search', [
        'uses' => 'WarehouseController@getFilteredCommodities',
        'as' => 'warehouse.search'
    ]);
});