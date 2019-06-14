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
Route::get('/pasien/search', 'PasienController@search');

// start route for add new pasien
Route::get('/pasien/new/id', 'PasienBaruController@new_pasien_id');
Route::post('/pasien/new/store', 'PasienBaruController@new_pasien_id_store');
Route::get('/pasien/new/riwayat', 'PasienBaruController@new_pasien_riwayat');
Route::post('/pasien/new/riwayat_store', 'PasienBaruController@new_pasien_riwayat_store');
Route::get('/pasien/new/kriteria', 'PasienBaruController@new_pasien_kriteria');
Route::post('/pasien/new/kriteria_store', 'PasienBaruController@new_pasien_kriteria_store');
Route::get('/pasien/new/pendamping', 'PasienBaruController@new_pasien_pendamping');
Route::post('/pasien/new/pendamping_store', 'PasienBaruController@new_pasien_pendamping_store');
Route::get('/pasien/new/finish', 'PasienBaruController@new_pasien_finish');
// **not using post method for can be used using a href tag link
Route::get('/pasien/new/finish_store', 'PasienBaruController@new_pasien_finish_store');
// end route for add new pasien

// start route for add old pasien
Route::get('/pasien/old/id', 'PasienUlangController@old_pasien_id');
Route::post('/pasien/old/store', 'PasienUlangController@old_pasien_store');
Route::get('/pasien/old/id', 'PasienUlangController@old_pasien_id');
Route::post('/pasien/old/store', 'PasienUlangController@old_pasien_id_store');
Route::get('/pasien/old/riwayat', 'PasienUlangController@old_pasien_riwayat');
Route::post('/pasien/old/riwayat_store', 'PasienUlangController@old_pasien_riwayat_store');
Route::get('/pasien/old/kriteria', 'PasienUlangController@old_pasien_kriteria');
Route::post('/pasien/old/kriteria_store', 'PasienUlangController@old_pasien_kriteria_store');
Route::get('/pasien/old/pendamping', 'PasienUlangController@old_pasien_pendamping');
Route::post('/pasien/old/pendamping_store', 'PasienUlangController@old_pasien_pendamping_store');
Route::get('/pasien/old/finish', 'PasienUlangController@old_pasien_finish');
// **not using post method for can be used using a href tag link
Route::get('/pasien/old/finish_store', 'PasienUlangController@old_pasien_finish_store');
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
Route::get('/referensi', 'KriteriaController@referensi');
Route::get('/referensi/kriteria', 'KriteriaController@referensi_kriteria');
Route::get('/referensi/kriteria/add', 'KriteriaController@add_kriteria');
Route::post('/referensi/kriteria/store', 'KriteriaController@store_kriteria');
Route::get('/referensi/kriteria/{id}/edit', 'KriteriaController@edit_kriteria');
Route::post('/referensi/kriteria/{id}/update', 'KriteriaController@update_kriteria');
Route::get('/referensi/kriteria/{id}/delete', 'KriteriaController@delete_kriteria');


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