<?php

use Illuminate\Http\Request;

Route::get('/pasien/search/{query}', 'SearchController@pasien');
Route::get('/dokter/search/{query}', 'SearchController@dokter');
Route::get('/rumahsakit/search/{query}', 'SearchController@rumahsakit');

Route::get('/kecamatan/{query}', 'SelectPlaceController@kecamatan');
Route::get('/kabupaten/{query}', 'SelectPlaceController@kabupaten');
Route::get('/provinsi', 'SelectPlaceController@provinsi');

Route::get('/jenis_penyakit/{query}', 'SelectPlaceController@jenis_penyakit');
Route::get('/evaluasi/{query}', 'SelectPlaceController@evaluasi');

Route::get('/dokter/{query}', 'SelectPlaceController@dokter');
Route::get('/rumahsakit', 'SelectPlaceController@rumahsakit');