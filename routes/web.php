<?php

// ==============================================================================
// ============================== MAIN ROUTE ====================================
// ==============================================================================
Route::get('/', 'AppController@index');

// ==============================================================================
// ====================== ALL ROUTE FOR RUMAH SAKIT DATA ========================
// ==============================================================================
Route::get('/rumahsakit', 'RumahSakitController@index');
Route::get('/rumahsakit/add', 'RumahSakitController@insert');
Route::post('/rumahsakit/store', 'RumahSakitController@store');
Route::get('/rumahsakit/{id}', 'RumahSakitController@show');
Route::get('/rumahsakit/{id}/delete', 'RumahSakitController@delete');
Route::get('/rumahsakit/{id}/edit', 'RumahSakitController@edit');
Route::post('/rumahsakit/{id}/update', 'RumahSakitController@update');

// ==============================================================================
// ========================= ALL ROUTE FOR PASIEN DATA ==========================
// ==============================================================================
Route::get('/pasien', 'PasienController@index');
Route::get('/pasien/old/id', 'PasienController@old_pasien_id');
Route::post('/pasien/old/store', 'PasienController@old_pasien_store');

// start route for add new pasien
Route::get('/pasien/new/id', 'PasienController@new_pasien_id');
Route::post('/pasien/new/store', 'PasienController@new_pasien_id_store');
Route::get('/pasien/new/riwayat', 'PasienController@new_pasien_riwayat');
Route::post('/pasien/new/riwayat_store', 'PasienController@new_pasien_riwayat_store');
Route::get('/pasien/new/kriteria', 'PasienController@new_pasien_kriteria');
Route::post('/pasien/new/kriteria_store', 'PasienController@new_pasien_kriteria_store');
Route::get('/pasien/new/pendamping', 'PasienController@new_pasien_pendamping');
Route::post('/pasien/new/pendamping_store', 'PasienController@new_pasien_pendamping_store');
Route::get('/pasien/new/finish', 'PasienController@new_pasien_finish');
// **not using post method for can be used using a href tag link
Route::get('/pasien/new/finish_store', 'PasienController@new_pasien_finish_store');
// end route for add new pasien

// start route for add old pasien
Route::get('/pasien/old/id', 'PasienController@old_pasien_id');
Route::post('/pasien/old/store', 'PasienController@old_pasien_id_store');
Route::get('/pasien/old/riwayat', 'PasienController@old_pasien_riwayat');
Route::post('/pasien/old/riwayat_store', 'PasienController@old_pasien_riwayat_store');
Route::get('/pasien/old/kriteria', 'PasienController@old_pasien_kriteria');
Route::post('/pasien/old/kriteria_store', 'PasienController@old_pasien_kriteria_store');
Route::get('/pasien/old/pendamping', 'PasienController@old_pasien_pendamping');
Route::post('/pasien/old/pendamping_store', 'PasienController@old_pasien_pendamping_store');
Route::get('/pasien/old/finish', 'PasienController@old_pasien_finish');
// **not using post method for can be used using a href tag link
Route::get('/pasien/old/finish_store', 'PasienController@old_pasien_finish_store');
// end route for add old pasien

// lanjutan main route for pasien
Route::get('/pasien/{id}', 'PasienController@show');
Route::get('/pasien/{id}/delete', 'PasienController@delete');
Route::get('/pasien/{id}/edit', 'PasienController@edit');
Route::post('/pasien/{id}/update', 'PasienController@update');

// ==============================================================================
// ======================== ALL ROUTE FOR DOKTER DATA ===========================
// ==============================================================================
Route::get('/dokter', 'DokterController@index');
Route::get('/dokter/add', 'DokterController@insert');
Route::post('/dokter/store', 'DokterController@store');
Route::get('/dokter/{id}', 'DokterController@show');
Route::get('/dokter/{id}/delete', 'DokterController@delete');
Route::get('/dokter/{id}/edit', 'DokterController@edit');
Route::post('/dokter/{id}/update', 'DokterController@update');

// ==============================================================================
// ======================== ALL ROUTE FOR REFERENSI PAGE ========================
// ==============================================================================
Route::get('/referensi/kriteria', 'AppController@referensi_kriteria');
Route::post('/referensi', 'AppController@referensi');

// ==============================================================================
// ======================== ALL ROUTE FOR REGISTER PAGE =========================
// ==============================================================================
Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

// ==============================================================================
// ========================= ALL ROUTE FOR LOGIN PAGE ===========================
// ==============================================================================
Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');