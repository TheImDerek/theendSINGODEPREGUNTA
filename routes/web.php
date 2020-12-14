<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('pagina1', 'ClientesController@index');
Route::get('pagina2', 'ClientesController@create');
Route::post('pagina3','ClientesController@save');
Route::get('pagina4/{id}','ClientesController@show');
Route::post('pagina5','ClientesController@update');
Route::get('pagina6/{id}','ClientesController@destroy');