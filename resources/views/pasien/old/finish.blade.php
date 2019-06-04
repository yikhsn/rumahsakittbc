@extends('layouts.master')

@section('title')
    <title>TBC APPS</title>
@endsection

@section('content')
<div class="wrapper">
            <div class="container-fluid">
                <h2 style="font-family: segoe ui light;">Daftar Pasien Baru</h2>
                <br>
                <div class="col-md-11">
                    <div class="text-right">
                        <a href="print/cetak-pasien-baru.php" class="btn btn-warning"><i class="fa fa-print"></i>  Cetak</a>
                        <a href="/pasien/new/finish_store" class="btn btn-danger"><i class="fa fa-save"></i>  Simpan</a>
                        <a href="print/cetak-pasien-baru.php" class="btn btn-primary"><i class="fa fa-arrow-left"></i>  Kembali</a>
                    </div>
                    <hr style="background-color:#585858 ;">
                    <h6>Identitas Pasien</h6>
                    <hr style="background-color:#585858 ;">
                    <div class="row">
                        <div class="col-md-2">
                            <p>NIK</p>
                            <br>
                            <p>Nama Lengkap</p>
                            <br>
                            <p>Tempat Tanggal Lahir</p>
                            <br>
                            <p>Jenis Kelamin</p>
                            <br>
                            <p>Nomor Telepon</p>
                            <br>
                            <p>E-Mail</p>
                            <br>
                            <p>Agama</p>
                            <br>
                            <p>Alamat Lengkap</p>
                        </div>
                        <div class="col-md-4">
                            
                            <!-- NIK -->
                            <input type="text" value="{{ $pasien->nik }}" class="form-control" style="border-top:0px; border-left:0px; border-right:0px; border-bottom-color: #808080; background-color:white;" disabled name="nik">
                            <br>
                            
                            <!-- Nama Lengkap -->
                            <input type="text" value="{{ $pasien->nama }}" class="form-control" style="border-top:0px; border-left:0px; border-right:0px; border-bottom-color: #808080; background-color:white;" disabled name="nama">
                            <br>
                            
                            <!-- Tempat Tanggal Lahir -->
                            <input type="text" value="{{ $pasien->tempat_lahir }}, {{ $pasien->tanggal_lahir }}" class="form-control" style="border-top:0px; border-left:0px; border-right:0px; border-bottom-color: #808080; background-color:white;" disabled name="tanggal_lahir">
                            <br>
                            
                            <!-- Jenis Kelamin -->
                            <input type="text" value="{{ $pasien->jenis_kelamin }}" class="form-control" style="border-top:0px; border-left:0px; border-right:0px; border-bottom-color: #808080; background-color:white;" disabled name="jenis_kelamin">
                            <br>
                            
                            <!-- Nomor Telepon -->
                            <input type="text" value="{{ $pasien->no_telepon }}" class="form-control" style="border-top:0px; border-left:0px; border-right:0px; border-bottom-color: #808080; background-color:white;" disabled name="nomor_telepon">
                            <br>
                            
                            <!-- E-Mail -->
                            <input type="text" value="{{ $pasien->email }}" class="form-control" style="border-top:0px; border-left:0px; border-right:0px; border-bottom-color: #808080; background-color:white;" disabled name="email">
                            <br>
                            
                            <!-- Agama -->
                            <input type="text" value="{{ $pasien->agama }}" class="form-control" style="border-top:0px; border-left:0px; border-right:0px; border-bottom-color: #808080; background-color:white;" disabled name="agama">
                            <br>
                            
                            <!-- Alamat Lengkap -->
                            <textarea rows="5" class="form-control" style="border-top:0px; border-left:0px; border-right:0px; border-bottom-color: #808080;"  name="alamat_lengkap">
                              {{ $pasien->alamat }}, {{ $pasien->kecamatan->name }}, {{ $pasien->kecamatan->kabupaten->name }}, {{ $pasien->kecamatan->kabupaten->provinsi->name }}
                            </textarea>
                            
                        </div>
                        <div class="col-md-2">
      
                          <p>Jenis Pasien</p>
                          <br>

                          <p>Kondisi Pasien</p>
                          <br>

                          <p>Jumlah Spesimen Sputum SPS</p>
                          <br>

                          <p>Hasil Pemeriksaan Sputum</p>
                          <br>

                          <p> Riwayat Pengobatan Dibawah Satu Bulan</p>
                          <br>

                          <p>Informasi Lainnya</p>
                        </div>
                        <div class="col-md-4">
                          <!-- jenis Pasien -->
                          <input type="text" class="form-control" style="border-top:0px; border-left:0px; border-right:0px; border-bottom-color: #808080; background-color:white;" disabled name="jenis_pasien">
                          <br>

                          <!-- Kondisi Pasien -->
                          <input type="text" class="form-control" style="border-top:0px; border-left:0px; border-right:0px; border-bottom-color: #808080; background-color:white;" disabled name="kondisi_pasien">
                          <br>

                          <!-- Jumlah Spesimen -->
                          <input type="text" value="{{ $pasien->jumlah_sputum }}" class="form-control" style="border-top:0px; border-left:0px; border-right:0px; border-bottom-color: #808080; background-color:white;" disabled name="jumlah_pasien">
                          <br>
                          <br>

                          <!-- Hasil Pemeriksaan Sputum -->
                          <input type="text" value="{{ $pasien->hasil_sputum }}" class="form-control" style="border-top:0px; border-left:0px; border-right:0px; border-bottom-color: #808080; background-color:white;" disabled name="hasil_sputum">
                          <br>

                          <!-- Riwayat Pengobatan Dibawah Satu Bulan -->
                          <br>
                          <input type="text" value="{{ $pasien->pengobatan_satu_bulan }}" class="form-control" style="border-top:0px; border-left:0px; border-right:0px; border-bottom-color: #808080; background-color:white;" disabled >

                          <br>
                          <!-- Informasi Lainnya -->
                          <textarea name="" id=""  rows="10" class="form-control" style="border-top:0px; border-left:0px; border-right:0px;" name="informasi_lainnya">
                          {{ $pasien->alamat }}, {{ $pasien->kecamatan->name }}, {{ $pasien->kecamatan->kabupaten->name }}, {{ $pasien->kecamatan->kabupaten->provinsi->name }}
                          </textarea>
                        </div>
                    </div>
                    <br>

                    <!-- Referensi Kriteria -->
                    <hr style="background-color:#585858 ;">
                    <center>
                    <h6>Rereferensi Kriteria</h6>
                    </center>
                    <hr style="background-color:#585858 ;">
                    <table class="table table-bordered">
                      <thead>
                        <th>Evaluasi</th>
                        <th>Referensi Kriteria Evaluasi</th>
                      </thead>
                      <tbody>
                        <tr>
                          <td name="evaluasi">Sembuh</td>
                          <td name="referensi_kriteria">
                            <p>
                              ( 1-2 bulan tidak berobat teratur) Pemeriksaan pada hasil BTA
                              SPS(Sewaktu, Pagi, Sewaktu) hasil positif (+), lanjutkan
                              pengobatan sampai seluruh dosis selesai dan 1 bulan sebelum
                              akhir pengobatan (AP) harus diperiksa dahak kembali.
                              <hr style="background-color:#585858 ;">
                              ( >=2 bulan tidak berobat teratur) Pemeriksaan dengan hasil
                              satu atau lebih hasil BTA positif (+) maka lanjutkan
                              pengobatan atau rujuk (mungkin kasus kronik)
                            </p>
                          </td>
                        </tr>
                        <tr>
                          <td >Informasi Lainnya</td>
                          <td name="informasi_kriteria_lainnya">
                            <p>Pemeriksaan pasien dilakukan berdasarkan keterangan hasil
                              pemeriksaan sebelumnya atau pasien melakukan pengobatan
                              ulang.
                            </p>
                            <hr style="background-color:#585858 ;">
                            <p>
                              Pemeriksaan pasien pada akhir intensif dengan hasil BTA
                              negatif (-), pengobatan dilanjutkan sampai selesai
                            </p>
                            <hr style="background-color:#585858 ;">
                            <p>
                              Pemeriksaan pasien pada pengobatan bulan ke3, ke5 dan
                              akhir pengobatan tidak dilakukan pemeriksaan ulang (follow
                              Up), pasien hanya minum obat sampai selesai
                            </p>
                          </td>
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                  <br>
                  <br>
                  <!-- /Referensi Kriteria -->

                  <!-- Informasi Pendamping Minum Obat   -->
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <hr style="background-color:#585858 ;">
                  <center>
                    Informasi Pendamping Minum Obat
                  </center>
                  <hr style="background-color:#585858 ;">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-2">
                        <p>Nama Pendamping</p>
                        <br>

                        <p>NIK</p>
                        <br>

                        <p>Usia</p>
                        <br>

                        <p>Jenis Kelamin</p>
                        <br>

                        <p>Agama</p>
                      </div>
                      <div class="col-md-4"> 
                        <!-- Nama Lengkap Pendamping Minum Obat -->
                        <input type="text" value="{{ $pendamping->nama }}" class="form-control" style="border-top:0px; border-left:0px; border-right:0px; border-bottom-color: #808080; background-color:white;" disabled name="nama_pmo">
                        <br>

                        <!-- NIK -->
                        <input type="text" value="{{ $pendamping->nik }}" class="form-control" style="border-top:0px; border-left:0px; border-right:0px; border-bottom-color: #808080; background-color:white;" disabled name="jenis_kelamin_pmo">
                        <br>

                        <!-- Usia -->
                        <input type="text" value="{{ $pendamping->usia }}" class="form-control" style="border-top:0px; border-left:0px; border-right:0px; border-bottom-color: #808080; background-color:white;" disabled name="jenis_kelamin_pmo">
                        <br>

                        <!-- Jenis Kelamin -->
                        <input type="text" value="{{ $pendamping->jenis_kelamin }}" class="form-control" style="border-top:0px; border-left:0px; border-right:0px; border-bottom-color: #808080; background-color:white;" disabled name="jenis_kelamin_pmo">
                        <br>

                        <!-- Jenis Kelamin -->
                        <input type="text" value="{{ $pendamping->agama }}" class="form-control" style="border-top:0px; border-left:0px; border-right:0px; border-bottom-color: #808080; background-color:white;" disabled name="jenis_kelamin_pmo">
                        <br>
                      </div>

                      <!-- Kanan -->

                      <div class="col-md-2">
                        <p>Hubungan dengan Pasien</p>
                        <br>
                        <p>Nomor telepon yang Bisa dihubugi</p>
                        <br>
                        <p>Alamat</p>
                      </div>
                      <div class="col-md-4">
                        <!--  -->
                        <input type="text" value="{{ $pendamping->hubungan_pasien }}" class="form-control" style="border-top:0px; border-left:0px; border-right:0px; border-bottom-color: #808080; background-color:white;" disabled name="hubungan_dengan_pasien" >
                        <br>
                        <!-- Nimor Telepon Yang bisa dihubungi-->

                        <input type="text" value="{{ $pendamping->no_telepon }}" class="form-control" style="border-top:0px; border-left:0px; border-right:0px; border-bottom-color: #808080; background-color:white;" disabled name="nomor_telepon_pmo">
                        <br>
                        
                        <!-- Alamat -->
                        <textarea name="alamat_pasien" id=""  rows="5" class="form-control" style="border-top:0px; border-left:0px; border-right:0px;" >
                          {{ $pendamping->alamat }}, {{ $pendamping->kecamatan->name }}, {{ $pendamping->kecamatan->kabupaten->name }}, {{ $pendamping->kecamatan->kabupaten->provinsi->name }}
                        </textarea>

                      </div>

                    </div>
                    <br>
                    <br>
                    <hr style="background-color:#585858 ;">
                    <center>
                      <h6>Hasil Foto Toraks (Jika Ada)</h6>
                    </center>
      
      <hr style="background-color:#585858 ;">
      <br>
      <br>
      <br>
      <br>
      <hr style="background-color:#585858 ;">
      <center>
        <h6>Scan KTP Pasien</h6>
      </center>
      
      <hr style="background-color:#585858 ;">
<footer>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="text-right">
    <p><u><b>Petugas</b></u> </p>
  </div>
                    </div>
                </div>
            </div>
        </div>

@endsection