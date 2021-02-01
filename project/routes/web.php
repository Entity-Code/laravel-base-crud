<?php

use Illuminate\Support\Facades\Route;

//index
Route::get('/', 'PeripheralController@index')
    -> name('/peripheral-index');

//show
Route::get('/details/{id}', 'PeripheralController@show')
    -> name('/peripheral-details');
 