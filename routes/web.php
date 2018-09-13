<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return App\Artists::all();
});

Route::get('/press', 'PressController@index');
Route::get('/press/{id}', 'PressController@show');
Route::post('/press', 'PressController@store');