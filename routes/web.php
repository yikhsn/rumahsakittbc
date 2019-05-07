<?php

// all main route
Route::get('/', 'AppController@index');

// all route for rumah sakit data
Route::get('/rumahsakit', 'RumahSakitController@index');
Route::get('/rumahsakit/add', 'RumahSakitController@insert');
Route::post('/rumahsakit/store', 'RumahSakitController@store');
Route::get('/rumahsakit/{id}', 'RumahSakitController@show');
Route::get('/rumahsakit/{id}/delete', 'RumahSakitController@delete');
Route::get('/rumahsakit/{id}/edit', 'RumahSakitController@edit');
Route::post('/rumahsakit/{id}/update', 'RumahSakitController@update');


// all route for pasien data
Route::get('/pasien', 'PasienController@index');
Route::get('/pasien/add', 'PasienController@insert');
Route::post('/pasien/store', 'PasienController@store');
Route::get('/pasien/{id}', 'PasienController@show');
Route::get('/pasien/{id}/delete', 'PasienController@delete');
Route::get('/pasien/{id}/edit', 'PasienController@edit');
Route::post('/pasien/{id}/update', 'PasienController@update');

// all route for dokter data
Route::get('/dokter', 'DokterController@index');
Route::get('/dokter/add', 'DokterController@insert');
Route::post('/dokter/store', 'DokterController@store');
Route::get('/dokter/{id}', 'DokterController@show');
Route::get('/dokter/{id}/delete', 'DokterController@delete');
Route::get('/dokter/{id}/edit', 'DokterController@edit');
Route::post('/dokter/{id}/update', 'DokterController@update');

// register page
Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

// login page
Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');