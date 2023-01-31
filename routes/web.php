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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', 'techreme\dashBoardController@signin')->name('techreme.login');

Auth::routes();
Route::group(['middleware'=>['auth','techreme']],function (){

    Route::get('/techreme', 'techreme\dashBoardController@techreme')->name('techreme');

    Route::prefix('Register')->group(function()
    {
        Route::get('client_view', 'techreme\registerController@client_view')->name('Register.client.view');
        Route::get('stuff_view', 'techreme\registerController@stuff_view')->name('Register.stuff.view');
        Route::get('create', 'techreme\registerController@create')->name('Register.create');
        Route::post('store', 'techreme\registerController@store')->name('Register.store');
        Route::get('edit/{id}', 'techreme\registerController@edit')->name('Register.edit');
        Route::post('update/{id}', 'techreme\registerController@update')->name('Register.update');
        Route::delete('delete/{id}', 'techreme\registerController@delete')->name('Register.delete');
        Route::get('details_client/{id}', 'techreme\registerController@details_client')->name('Register.details.client');
        Route::get('details_stuff/{id}', 'techreme\registerController@details_stuff')->name('Register.details.stuff');
    });

    Route::prefix('Product')->group(function()
    {
        Route::get('view', 'techreme\productController@view')->name('product.view');
        Route::get('create', 'techreme\productController@create')->name('product.create');
        Route::post('store', 'techreme\productController@store')->name('product.store');
        Route::get('edit/{id}', 'techreme\productController@edit')->name('product.edit');
        Route::post('update/{id}', 'techreme\productController@update')->name('product.update');
        Route::delete('delete/{id}', 'techreme\productController@delete')->name('product.delete');
        Route::get('details/{id}', 'techreme\productController@details')->name('product.details');
    });

    Route::prefix('Service')->group(function()
    {
        Route::get('view', 'techreme\serviceController@view')->name('service.view');
        Route::get('create', 'techreme\serviceController@create')->name('service.create');
        Route::post('store', 'techreme\serviceController@store')->name('service.store');
        Route::get('edit/{id}', 'techreme\serviceController@edit')->name('service.edit');
        Route::post('update/{id}', 'techreme\serviceController@update')->name('service.update');
        Route::delete('delete/{id}', 'techreme\serviceController@delete')->name('service.delete');
        Route::get('details/{id}', 'techreme\serviceController@details')->name('service.details');
    });

    Route::prefix('Owner')->group(function()
    {
        Route::get('view', 'techreme\ownerController@view')->name('owner.view');
        Route::get('create', 'techreme\ownerController@create')->name('owner.create');
        Route::post('store', 'techreme\ownerController@store')->name('owner.store');
        Route::get('edit/{id}', 'techreme\ownerController@edit')->name('owner.edit');
        Route::post('update/{id}', 'techreme\ownerController@update')->name('owner.update');
        Route::delete('delete/{id}', 'techreme\ownerController@delete')->name('owner.delete');
        Route::get('details/{id}', 'techreme\ownerController@details')->name('owner.details');
    });
});


