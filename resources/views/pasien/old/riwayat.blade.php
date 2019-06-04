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
                                <h3 class="panel-title">Langkah 2 : Riwayat Kesehatan Pasien Kambuhan</h3>
                            </div>
                            <div class="panel-body">
                                <h5 style="font-family: segoe ui light;">Durasi Pengobatan Sebelumnya</h5>
                                <hr>
                                
                                <form class="form" role="form">
                                    <div class="form-group">
                                        <label>Awal Pengobatan</label>
                                        <div class="col-md-10">
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Akhir Pengobatan</label>
                                        <div class="col-md-10">
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>

                                    <hr>
                                    
                                        <h5 style="font-family: segoe ui light;">Riwayat Pengobatan Sebelumnya</h5>
                                        <hr>
                                        
                                        <div class="form-group">
                                            <label for="hasil_sputum">Hasil Pemeriksaan Sputum</label>
                                            <div class="col-md-10">
                                                <select class="form-control" name="hasil_sputum" id="hasil_sputum">
                                                    <option {{ (isset($pasien->hasil_sputum) && $pasien->hasil_sputum == 'Positif') ? "selected=\"selected\"" : "" }} value="Positif">Positif</option>
                                                    <option {{ (isset($pasien->hasil_sputum) && $pasien->hasil_sputum == 'Negatif') ? "selected=\"selected\"" : "" }} value="Negatif">Negatif</option>
                                                </select>
                                            </div> 
                                        </div>

                                        <div class="form-group">
                                            <label for="jumlah_sputum">Jumlah Spesimen Sputum SPS</label>
                                            <div class="col-md-10">
                                                <input type="number" class="form-control" 
                                                    value="{{ (isset( $pasien->jumlah_sputum )) ? $pasien->jumlah_sputum : '' }}"
                                                    placeholder="Pasien Minimal Memiliki 3 Spesimen Spotum" 
                                                    id="jumlah_sputum" name="jumlah_sputum">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Tipe Pasien Pengobatan Ulang</label>
                                            <div class="col-md-10">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="Positif" >
                                                        Pasien Kambuhan
                                                        <p></p> <p></p>
                                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="Negatif" >
                                                        Pasien Default
                                                        <p></p> <p></p>
                                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="Negatif" >
                                                        Pasien Gagal
                                                        <p></p> <p></p>
                                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="Negatif" >
                                                        Pasien Lain Lain
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <h5 style="font-family: segoe ui light;">Kriteria Pengobatan Sebelumnya</h5>
                                        <hr>
                                        <div class="form-group">
                                            
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <h6>Apakah Pasien Sudah Dinyatakan Sembuh Pada Pengobatan Sebelumnya ?</h6>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="Positif" >
                                                    Sudah
                                                    <p></p> <p></p>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="Negatif" >
                                                    Belum
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h6>Kelengkapan Pengobatan</h6>
                                                    <select class="form-control" required>
                                                        <option>--- Kelengkapan Pengobatan ---</option>
                                                        <option>Pengobatan 1 - 2 Bulan</option>
                                                        <option>Pengobatan 2 - 3 Bulan</option>
                                                        <option>Pengobatan 3 - 4 Bulan</option>
                                                        <option>Pengobatan 4 - 5 Bulan</option>
                                                        <option>Pengobatan 5 - 6 Bulan</option>
                                                        <option>Lengkap 6 Bulan</option>
                                                    </select>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <h5 style="font-family: segoe ui light;">Informasi Lainnya</h5>
                                        <hr>
                                        <div class="form-group">
                                            <label>Hasil Foto Toraks Pasien (Jika Ada)</label>
                                            <div class="col-md-10">
                                                <input type="file" data-buttontext="Select file" data-buttonname="btn-default">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Catatan :</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control" rows="5"  required placeholder="Catatan Kesehatan dan Riwayat Pasien, Termasuk Informasi khusus seputar Alergi, Penanganan Khusus, Penyakit Bawaan, DLL"></textarea>
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        
                                        <div class="col-10">
                                            <div class="text-right">
                                                <br>
                                                <br>
                                                <button  type="button" class="btn btn-danger btn-rounded">Hapus <i class="mdi mdi-delete"></i></button>
                                                <button  type="button" class="btn btn-warning btn-rounded">Selanjutnya <i class="mdi mdi-arrow-right-bold"></i></button>
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