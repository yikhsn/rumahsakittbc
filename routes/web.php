<?php

// all main route
Route::get('/', 'AppController@index');

// all route for rumah sakit data
Route::get('/rumahsakit', 'RumahSakitController@index');
Route::get('/rumahsakit/add', 'RumahSakitController@insert');
Route::get('/rumahsakit/{id}', 'RumahSakitController@show');

// all route for pasien data
Route::get('/pasien', 'PasienController@index');
Route::get('/pasien/add', 'PasienController@insert');
Route::get('/pasien/{id}', 'PasienController@show');

// all route for dokter data
Route::get('/dokter', 'DokterController@index');
Route::get('/dokter/add', 'PasienController@insert');
Route::get('/dokter/{id}', 'PasienController@show');