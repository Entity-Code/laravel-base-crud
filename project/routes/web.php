<?php

use Illuminate\Support\Facades\Route;

//index
Route::get('/', 'PeripheralController@index')
    -> name('peripheral-index');

//show
Route::get('/details/{id}', 'PeripheralController@show')
    -> name('peripheral-details');


//create
Route::get('/create', 'PeripheralController@create')
    -> name('peripheral-create');
//store
Route::post('/create/store', 'PeripheralController@store')
    -> name('peripheral-store');
 