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

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');
Route::view('reports', 'reports')->name('reports');
Route::view('addgoods', 'addgoods')->name('addgoods');
Route::view('issuegoods', 'issuegoods')->name('issuegoods');


Route::group(['prefix' => 'alerts'], function(){
    Route::get('/', [
        'uses' => 'AlertsController@show',
        'as' => 'alerts'
    ]);
    Route::get('/search', [
        'uses' => 'AlertsController@search',
        'as' => 'alerts.search'
    ]);
    Route::get('/new', [
        'uses' => 'AlertsController@getNew',
        'as' => 'alerts.create'
    ]);
    Route::post('/new', [
        'uses' => 'AlertsController@postNew',
        'as' => 'alerts.create'
    ]);
    Route::post('/delete', [
        'uses' => 'AlertsController@delete',
        'as' => 'alerts.delete'
    ]);
    Route::get('/{commodity}', [
        'uses' => 'AlertsController@getEdit',
        'as' => 'alerts.edit'
    ]);
    Route::post('/edit', [
        'uses' => 'AlertsController@postEdit',
        'as' => 'alerts.edit'
    ]);
});

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
        'uses' => 'OrdersController@show',
        'as' => 'show'
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