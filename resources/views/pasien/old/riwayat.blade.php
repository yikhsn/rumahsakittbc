@extends('layouts.master')

@section('title')
    <title>TBC APPS</title>
@endsection

@section('content')
        <div class="wrapper">
            <div class="container-fluid">
                <h2 style="font-family: segoe ui light;">Registrasi Pasien Pengobatan Ulang</h2>
                <br>
                <div class="row">
                    
                    <div class ="col-sm-11">
                        <div class="panel panel-color panel-danger" style="border-color: #a2a2a2;">
                            <div class="panel-heading">
                                <h3 class="panel-title">Langkah 2 : Riwayat dan Kesehatan Pasien Kambuhan</h3>
                            </div>
                            <div class="panel-body">
                                <h5 style="font-family: segoe ui light;">Hasil Pemeriksaan Kesehatan Pasien Saat Ini</h5>
                                <hr>
                                
                                <form class="form" role="form" method="post" action="/pasien/old/riwayat_store">
                                    
                                    {{ csrf_field() }}

                                    <div class="form-group">
                                        <label for="hasil_sputum">Hasil Pemeriksaan Sputum</label>
                                        <div class="col-md-10">
                                            <select class="form-control" name="hasil_sputum" id="hasil_sputum" required>
                                                <option {{ (isset($pasien->hasil_sputum) && $pasien->hasil_sputum == 'Positif') ? "selected=\"selected\"" : "" }} value="Positif">Positif</option>
                                                <option {{ (isset($pasien->hasil_sputum) && $pasien->hasil_sputum == 'Negatif') ? "selected=\"selected\"" : "" }} value="Negatif">Negatif</option>
                                            </select>
                                        </div> 
                                    </div>

                                    <div class="form-group">
                                        <label for="jumlah_sputum">Jumlah Spesimen Sputum Hasil Pemeriksaan</label>
                                        <div class="col-md-10">
                                            <input type="number" class="form-control" 
                                                value="{{ (isset( $pasien->jumlah_sputum )) ? $pasien->jumlah_sputum : '' }}"
                                                placeholder="Jumlah Spesimen Sputum Hasil Pemeriksaan" 
                                                id="jumlah_sputum" name="jumlah_sputum" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="catatan_kesehatan">Catatan Kesehatan:</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" rows="5" 
                                                placeholder="Catatan Kesehatan, Termasuk Informasi khusus seputar Alergi, Penanganan Khusus, Penyakit Bawaan, DLL" 
                                                name="catatan_kesehatan" id="catatan_kesehatan">{{ (isset( $pasien->catatan_kesehatan )) ? $pasien->catatan_kesehatan : '' }}</textarea>
                                        </div>
                                    </div>

                                    <hr>
                                    <!-- Informasi Lokasi Pengobatan Sebelumnya -->
                                    <h5 style="font-family: segoe ui light;">Durasi Pengobatan Sebelumnya</h5>
                                    <hr>
                                    <div class="form-group">
                                        <label>Awal Pengobatan</label>
                                        <div class="col-md-10">
                                            <input type="date" class="form-control"
                                                value="{{ (isset( $pasien->awal_pengobatan_sebelumnya )) ? $pasien->awal_pengobatan_sebelumnya : '' }}"
                                                name="awal_pengobatan_sebelumnya" id="awal_pengobatan_sebelumnya" 
                                                required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Akhir Pengobatan</label>
                                        <div class="col-md-10">
                                            <input type="date" class="form-control" 
                                                value="{{ (isset( $pasien->akhir_pengobatan_sebelumnya )) ? $pasien->akhir_pengobatan_sebelumnya : '' }}"
                                                name="akhir_pengobatan_sebelumnya" id="akhir_pengobatan_sebelumnya" 
                                                required>
                                        </div>
                                    </div>

                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label for="">Kelengkapan Pengobatan</label>
                                            <select class="form-control" name="kelangkapan_pengobatan_sebelumnya" id="kelangkapan_pengobatan_sebelumnya" required>
                                                <option  {{ (isset($pasien->kelangkapan_pengobatan_sebelumnya) && $pasien->kelangkapan_pengobatan_sebelumnya == '1-2 Bulan') ? "selected=\"selected\"" : "" }}value="1-2 Bulan">1-2 Bulan</option>
                                                <option  {{ (isset($pasien->kelangkapan_pengobatan_sebelumnya) && $pasien->kelangkapan_pengobatan_sebelumnya == '2-3 Bulan') ? "selected=\"selected\"" : "" }}value="2-3 Bulan">2-3 Bulan</option>
                                                <option  {{ (isset($pasien->kelangkapan_pengobatan_sebelumnya) && $pasien->kelangkapan_pengobatan_sebelumnya == '3-4 Bulan') ? "selected=\"selected\"" : "" }}value="3-4 Bulan">3-4 Bulan</option>
                                                <option  {{ (isset($pasien->kelangkapan_pengobatan_sebelumnya) && $pasien->kelangkapan_pengobatan_sebelumnya == '4-5 Bulan') ? "selected=\"selected\"" : "" }}value="4-5 Bulan">4-5 Bulan</option>
                                                <option  {{ (isset($pasien->kelangkapan_pengobatan_sebelumnya) && $pasien->kelangkapan_pengobatan_sebelumnya == '6 Bulan') ? "selected=\"selected\"" : "" }}value="6 Bulan">6 Bulan</option>
                                            </select>
                                            
                                        </div>
                                    </div>
                                    <br>

                                    <hr>
                                    <!-- Informasi Lokasi Pengobatan Sebelumnya -->
                                    <h5 style="font-family: segoe ui light;">Tempat Pengobatan Sebelumnya</h5>
                                    <hr>
                                    
                                    <div class="form-group">
                                        <label>Tempat Pengobatan Sebelumnya</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control"
                                                value="{{ (isset( $pasien->tempat_pengobatan_sebelumnya )) ? $pasien->tempat_pengobatan_sebelumnya : '' }}"
                                                placeholder="Rumah Sakit/Klinik/Puskesmas Tempat Pengobatan Sebelunya" 
                                                name="tempat_pengobatan_sebelumnya" id="tempat_pengobatan_sebelumnya"
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Dokter Pengobatan Sebelumnya</label>
                                        <div class="col-md-10">
                                            <input type="text" placeholder="Nama Dokter Pengobatan Sebelunya" 
                                                value="{{ (isset( $pasien->nama_dokter_sebelumnya )) ? $pasien->nama_dokter_sebelumnya : '' }}"
                                                class="form-control" name="nama_dokter_sebelumnya" 
                                                id="nama_dokter_sebelumnya" required>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label>Informasi Alamat Pengobatan Sebelumnya</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control" required rows="5" placeholder="RT/RW/Jalan" name="alamat_pengobatan_sebelumnya" id="alamat_pengobatan_sebelumnya" required>{{ (isset( $pasien->alamat_pengobatan_sebelumnya )) ? $pasien->alamat_pengobatan_sebelumnya : '' }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <h5 style="font-family: segoe ui light;">Hasil Pemeriksaan Sebelumnya</h5>
                                    <hr>
                                    
                                    <div class="form-group">
                                        <label>Jumlah Spesimen Sputum SPS Sebelumnya</label>
                                        <div class="col-md-10">
                                            <input type="number" class="form-control"
                                                value="{{ (isset( $pasien->jumlah_sputum_sebelumnya )) ? $pasien->jumlah_sputum_sebelumnya : '' }}"
                                                placeholder="Jumlah Spesimen Sputum SPS Sebelumnya" name="jumlah_sputum_sebelumnya"
                                                id="jumlah_sputum_sebelumnya" required> 
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                        <label>Hasil Pemeriksaan Sputum SPS Sebelumnya</label>
                                        <div class="col-md-10">
                                            <select class="form-control" id="hasil_sputum_sebelumnya" name="hasil_sputum_sebelumnya" required>
                                                <option {{ (isset($pasien->hasil_sputum_sebelumnya) && $pasien->hasil_sputum_sebelumnya == 'Positif') ? "selected=\"selected\"" : "" }} value="Positif">Positif</option>
                                                <option {{ (isset($pasien->hasil_sputum_sebelumnya) && $pasien->hasil_sputum_sebelumnya == 'Negatif') ? "selected=\"selected\"" : "" }} value="Negatif">Negatif</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label for=""> Status Kesembuhan pada Pengobatan Sebelumnya</label>
                                                <select class="form-control" id="status_kesembuhan_sebelumnya" name="status_kesembuhan_sebelumnya" required>
                                                    <option {{ (isset($pasien->status_kesembuhan_sebelumnya) && $pasien->status_kesembuhan_sebelumnya == 'Sembuh') ? "selected=\"selected\"" : "" }} value="Sembuh">Sembuh</option>
                                                    <option {{ (isset($pasien->status_kesembuhan_sebelumnya) && $pasien->status_kesembuhan_sebelumnya == 'Belum Sembuh') ? "selected=\"selected\"" : "" }} value="Belum Sembuh">Belum Sembuh</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="col-10">
                                            <div class="text-right">
                                                <br>
                                                <br>
                                                <button class="btn btn-warning btn-rounded" type="submit">Selanjutnya</button>
                                            </div>
                                        </div>
                                    </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


 
                            </div>
                            
                            
                            
                            <!-- End Footer -->
                        </div>
                        <!-- end wrapper -->
@endsection