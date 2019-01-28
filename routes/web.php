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
Route::get('reports',[
   'uses' => 'Controller@reports',
   'as' => 'reports'
]);

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
    Route::redirect('/', 'orders/inProgress')->name('orders');
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
    Route::post('packed', [
        'uses' => 'OrdersController@packed',
        'as' => 'packed'
    ]);
    Route::post('pass', [
        'uses' => 'OrdersController@pass',
        'as' => 'pass'
    ]);
});


Route::group(['prefix' => 'warehouse'], function (){
    Route::get('/', 'WarehouseController@home')
        ->name('warehouse');
    Route::get('search', [
        'uses' => 'WarehouseController@getFilteredCommodities',
        'as' => 'warehouse.search'
    ]);


    Route::get('acceptgoods', [
        'uses' => 'WarehouseController@getCommodityAcceptance',
        'as' => 'warehouse.acceptgoods'
    ]);
    Route::post('acceptgoods', [
        'uses' => 'WarehouseController@postCommodityAcceptance',
        'as' => 'warehouse.acceptgoods'
    ]);
    Route::post('confirmacceptanceNew', [
        'uses' => 'WarehouseController@postConfirmAcceptanceNew',
        'as' => 'warehouse.confacceptNew'
    ]);
    Route::post('confirmacceptanceAdd', [
        'uses' => 'WarehouseController@postConfirmAcceptanceAdd',
        'as' => 'warehouse.confacceptAdd'
    ]);


    Route::get('issuegoods', [
        'uses' => 'WarehouseController@getCommodityIssuance',
        'as' => 'warehouse.issuegoods'
    ]);
    Route::post('issuegoods', [
        'uses' => 'WarehouseController@postCommodityIssuance',
        'as' => 'warehouse.issuegoods'
    ]);
    Route::post('confirmissuance', [
        'uses' => 'WarehouseController@postConfirmIssuance',
        'as' => 'warehouse.confissue'
    ]);


});