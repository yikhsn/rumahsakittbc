@extends('layouts.master')

@section('title')
    <title>TBC APPS</title>
@endsection

@section('content')

<div class="wrapper">
            <div class="container-fluid">
                <h2 style="font-family: segoe ui light;">Edit Pasien Baru</h2>
                <br>
                <div class="row">
                    <div class ="col-sm-10">
                        <div class="panel panel-color panel-success" style="border-color: #a2a2a2;">
                            <div class="panel-heading">
                                <h3 class="panel-title">Edit Pasien</h3>
                            </div>
                            <div class="panel-body">
                                
                                <form class="form-horizontal" role="form" 
                                    method="post" action="/pasien/{{ $pasien->id }}/update">

                                    {{ csrf_field() }}

                                    <hr>
                                        <center>
                                            <b>Identitas Pasien<b>
                                        </center>
                                    <hr>
                                    
                                    <div class="form-group">
                                        <label for="nik">NIK</label>
                                        <div class="col-md-10">
                                            <input type="number" class="form-control"
                                                value="{{ $pasien->nik }}"
                                                placeholder ="Nomor NIK Pasien"
                                                id="niks" name="nik" required>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="nama">Nama Lengkap</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control"
                                                value="{{ $pasien->nama }}"
                                                placeholder="Nama Lengkap Pasien"
                                                id="nama" name="nama" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="tempat_lahir">Tempat Lahir</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" 
                                                value="{{ $pasien->tempat_lahir }}"
                                                placeholder="Tempat Lahir Pasien" 
                                                id="tempat_lahir" name="tempat_lahir" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="tanggal_lahir">Tanggal Lahir</label>
                                        <div class="col-md-10">
                                            <input type="date" class="form-control"
                                                value="{{ $pasien->tanggal_lahir->format('m-d-Y') }}"
                                                placeholder="Tanggal Lahir Pasien" 
                                                id="tanggal_lahir" name="tanggal_lahir" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <div class="col-md-10">
                                            <select class="form-control" name="jenis_kelamin" required>
                                                <option {{ (isset($pasien->jenis_kelamin) && $pasien->jenis_kelamin == 'Laki-laki') ? "selected=\"selected\"" : "" }} value="Laki-laki">Laki-laki</option>
                                                <option {{ (isset($pasien->jenis_kelamin) && $pasien->jenis_kelamin == 'Perempuan') ? "selected=\"selected\"" : "" }} value ="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="no_telepon">Nomor Telepon</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control"
                                                value="{{ $pasien->no_telepon }}"
                                                placeholder="Nomor Telepon Yang Bisa Dihubungi" 
                                                id="no_telepon" name="no_telepon" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control"
                                                value="{{ $pasien->email }}"
                                                placeholder="E-Mail Aktif"
                                                id="email" name="email" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <div class="col-md-10">
                                            <input type="password" 
                                                value="{{ $pasien->password }}"
                                                class="form-control" 
                                                placeholder="Password"
                                                id="password" name="password" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Agama</label>
                                        <div class="col-md-10">
                                            <select class="form-control" id="agama" name="agama" required>
                                                <option {{ (isset($pasien->agama) && $pasien->agama == 'Islam') ? "selected=\"selected\"" : "" }} value="Islam">Islam</option>
                                                <option {{ (isset($pasien->agama) && $pasien->agama == 'Kristen') ? "selected=\"selected\"" : "" }} value="Kristen">Kristen</option>
                                                <option {{ (isset($pasien->agama) && $pasien->agama == 'Katolik') ? "selected=\"selected\"" : "" }} value="Katolik">Katolik</option>
                                                <option {{ (isset($pasien->agama) && $pasien->agama == 'Hindu') ? "selected=\"selected\"" : "" }} value="Hindu">Hindu</option>
                                                <option {{ (isset($pasien->agama) && $pasien->agama == 'Budha') ? "selected=\"selected\"" : "" }} value="Budha">Budha</option>
                                                <option {{ (isset($pasien->agama) && $pasien->agama == 'Konghucu') ? "selected=\"selected\"" : "" }} value="Konghucu">Konghucu</option>
                                                <option {{ (isset($pasien->agama) && $pasien->agama == 'Lainnya') ? "selected=\"selected\"" : "" }} value="Lainnya">Lainnya</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <div class ="container">
                                            <div class ="row">
                                            
                                            <!-- session in form is not work yet -->
                                                <div class ="col-md-3">
                                                    <select class="form-control" required>
                                                        @foreach($provinsis as $provinsi)
                                                            <option {{ (isset($pasien->kecamatan) && $pasien->kecamatan->kabupaten->provinsi_id == $provinsi->id) ? "selected=\"selected\"" : "" }} value="{{ $provinsi->id }}">{{ $provinsi->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <!-- session in form is not work yet -->
                                                <div class ="col-md-3">
                                                    <select class="form-control" required>
                                                        @foreach($kabupatens as $kabupaten)
                                                            <option {{ (isset($pasien->kecamatan) && $pasien->kecamatan->kabupaten_id == $kabupaten->id) ? "selected=\"selected\"" : "" }} value="{{ $kabupaten->id }}">{{ $kabupaten->name }}</option>
                                                        @endforeach                 
                                                    </select>
                                                </div>

                                                <div class ="col-md-3">
                                                    <select name="kecamatan_id" id="kecamatan_id" class="form-control" required>
                                                        @foreach($kecamatans as $kecamatan)
                                                            <option {{ (isset($pasien->kecamatan) && $pasien->kecamatan_id == $kecamatan->id) ? "selected=\"selected\"" : "" }} value="{{ $kecamatan->id }}">{{ $kecamatan->name }}</option>
                                                        @endforeach                 
                                                    </select>
                                                </div>

                                            </div>                                                
                                        </div>
                                    </div>

                                    <br>
                                    <div class="form-group">
                                        <label>Alamat Kediaman</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" required rows="5" placeholder="RT/RW/Jalan" name="alamat" id="alamat">
                                                {{ $pasien->alamat }}
                                            </textarea>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <hr>
                                    <center>
                                    <b>Riwayat Pasien </b>
                                    </center>
                                    <hr>
                                    <!-- Riwayat Pasien -->
                                    <!-- Tanggal Pengobatan -->
                                    <div class="form-group">
                                        <label>Tanggal Pengobatan</label>
                                        <div class="col-md-10">
                                            <input type="date" class="form-control" 
                                                value="" 
                                                name="" disabled>
                                        </div>
                                    </div>

                                    <!-- Kondisi Pasien -->
                                    <div class="form-group">
                                        <label>Kondisi Pasien</label>
                                        <div class="col-md-10">
                                            <select class="form-control" id="sel1">
                                                <option>BTA (+)</option>
                                                <option>BTA (-)</option>
                                                <option>Ekstra Paru</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Jumlah Sputum Pasien -->
                                    <div class="form-group">
                                        <label>Jumlah Spesimen Sputum SPS</label>
                                        <div class="col-md-10">
                                            <input type="number" class="form-control"
                                                value="{{ $pasien->jumlah_sputum }}"
                                                placeholder="Pasien Minimal Memiliki 3 Spesimen Sputum" 
                                                id="jumlah_sputum" name="jumlah_sputum">
                                        </div>
                                    </div>

                                    <!-- Hasil Pemeriksaan Sputum -->
                                    <div class="form-group">
                                        <label for="hasil_sputum">Hasil Pemeriksaan Sputum</label>
                                        <div class="col-md-10">
                                            <select class="form-control" id="hasil_sputum" name="hasil_sputum">
                                                <option {{ (isset($pasien->hasil_sputum) && $pasien->hasil_sputum == 'Positif') ? "selected=\"selected\"" : "" }} value="Positif">Positif</option>
                                                <option {{ (isset($pasien->hasil_sputum) && $pasien->hasil_sputum == 'Negatif') ? "selected=\"selected\"" : "" }} value="Negatif">Negatif</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Riwayat Pengobatan dibawah Satu Bulan -->
                                    <div class="form-group">
                                        <label for="pengobatan_satu_bulan">Riwayat Pengobatan Dibawah Satu Bulan</label>
                                        <div class="col-md-10">
                                            <select class="form-control" id="pengobatan_satu_bulan" name="pengobatan_satu_bulan" required>
                                                <option {{ (isset($pasien->pengobatan_satu_bulan) && $pasien->pengobatan_satu_bulan == 'Pernah') ? "selected=\"selected\"" : "" }} value="Pernah">Pernah</option>
                                                <option {{ (isset($pasien->pengobatan_satu_bulan) && $pasien->pengobatan_satu_bulan == 'Belum') ? "selected=\"selected\"" : "" }} value="Belum">Belum</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Catatan Lain -->
                                    <div class="form-group">
                                        <label for="catatan_kesehatan">Catatan :</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" rows="5" 
                                                placeholder="Catatan Kesehatan dan Riwayat Pasien, Termasuk Informasi khusus seputar Alergi, Penanganan Khusus, Penyakit Bawaan, DLL" 
                                                name="catatan_kesehatan" id="catatan_kesehatan" required>
                                                {{ $pasien->catatan_kesehatan }}
                                            </textarea>
                                        </div>
                                    </div>

                                    <hr>
                                        <center>
                                            <b>Kriteria Evaluasi<b>
                                        </center>
                                    <hr>
                                    <!-- Kriteria Evaluasi -->

                                    <!--  Evaluasi BTA (+) -->
                                    <label for=""> Evaluasi BTA (+)</label>
                                    <div class="table">
                                        <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <th>Pilih</th>
                                                <th>Evaluasi</th>
                                                <th>Kriteria Evaluasi</th>
                                                
                                            </thead>
                                            <tbody>

                                                <!-- sembuh -->
                                                <tr>
                                                    <td>
                                                        <div class="radio">
                                                            <input type="radio" name="optradio">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <label for="">Sembuh</label>
                                                    </td>
                                                    <td>
                                                        <div class="radio">
                                                            <p>Pemeriksaan pasien pada akhir pengobatan (AP) dengan hasil
                                                                BTA Negatif (-) dan minimal satu kali pemeriksaan
                                                                sebelumnya negatif (-)
                                                            </p>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <!-- Pengobatan Lengkap -->
                                                <tr>
                                                    <td>
                                                        <div class="radio">
                                                            <input type="radio" name="optradio">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <label for="">Pengobatan Lengkap</label>
                                                    </td>
                                                    <td>
                                                        <div class="radio">
                                                            <p>
                                                                Pemeriksaan pasien pada akhir intensif, hasil BTA negatif (-)
                                                                dan melanjutkan pengobatan sampai dengan selesai
                                                                <hr>
                                                                Pemeriksaan pasien pada pengobatan bulan ke3, ke5 dan akhir
                                                                pengobatan tidak dilakukan pemeriksaan ulang (follow Up),
                                                                pasien hanya minum obat sampai selesai
                                                            </p>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <!-- Default -->
                                                <tr>
                                                    <td>
                                                        <div class="radio">
                                                            <input type="radio" name="optradio">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <label for="">Default</label>
                                                    </td>
                                                    <td>
                                                        <div class="radio">
                                                            <p>
                                                                ( 1-2 bulan tidak berobat teratur) Pemeriksaan pada hasil BTA
                                                                SPS(Sewaktu, Pagi, Sewaktu) hasil positif (+), lanjutkan
                                                                pengobatan sampai seluruh dosis selesai dan 1 bulan sebelum
                                                                akhir pengobatan (AP) harus diperiksa dahak kembali.
                                                                <hr>
                                                                ( >=2 bulan tidak berobat teratur) Pemeriksaan dengan hasil
                                                                satu atau lebih hasil BTA positif (+) maka lanjutkan
                                                                pengobatan atau rujuk (mungkin kasus kronik)
                                                            </p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- Gagal -->
                                                <tr>
                                                    <td>
                                                        <div class="radio">
                                                            <input type="radio" name="optradio">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <label for="">Gagal</label>
                                                    </td>
                                                    <td>
                                                        <div class="radio">
                                                            <p>
                                                                Pemeriksaan dengan hasil satu atau lebih hasil BTA positif
                                                                (+) maka lanjutkan pengobatan atau rujuk (mungkin kasus Kronik )
                                                            </p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- Pindah -->
                                                <tr>
                                                    <td>
                                                        <div class="radio">
                                                            <input type="radio" name="optradio">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <label for="">Pindah</label>
                                                    </td>
                                                    <td>
                                                        <div class="radio">
                                                            <p>
                                                                Pemeriksaan pasien dilakukan sebulan sebelum akhir
                                                                pengobatan dengan hasil BTA positif (+), dan ganti OAT
                                                                (Obat Anti Tuberkulosis) kategori 2 dari awal
                                                            </p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                
                                                <!-- Meninggal -->
                                                <tr>
                                                    <td>
                                                        <div class="radio">
                                                            <input type="radio" name="optradio">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <label for="">Meninggal</label>
                                                    </td>
                                                    <td>
                                                        <div class="radio">
                                                            <p>
                                                                Hasil pemeriksaan pasien sebelumnya tidak diketahui
                                                                Pemeriksaan pasien mengalami komplikasi
                                                            </p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- / Evaluasi BTA (+) -->
                                    <!-- Evaluasi BTA (-) -->
                                    <label for=""> Evaluasi BTA (-)</label>
                                    <div class="table">
                                        <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <th>Pilih</th>
                                                <th>Evaluasi</th>
                                                <th>Kriteria Evaluasi</th>
                                                
                                            </thead>
                                            <tbody>
                                                <!-- sembuh -->
                                                <tr>
                                                    <td>
                                                        <div class="radio">
                                                            <input type="radio" name="optradio">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <label for="">Pengobatan Lengkap</label>
                                                    </td>
                                                    <td>
                                                        <div class="radio">
                                                            <p>Pemeriksaan pasien dilakukan berdasarkan keterangan hasil
                                                                pemeriksaan sebelumnya atau pasien melakukan pengobatan
                                                                ulang.
                                                            </p>
                                                            <hr>
                                                            <p>
                                                                Pemeriksaan pasien pada akhir intensif dengan hasil BTA
                                                                negatif (-), pengobatan dilanjutkan sampai selesai
                                                            </p>
                                                            <hr>
                                                            <p>
                                                                Pemeriksaan pasien pada pengobatan bulan ke3, ke5 dan
                                                                akhir pengobatan tidak dilakukan pemeriksaan ulang (follow
                                                                Up), pasien hanya minum obat sampai selesai
                                                            </p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- Pengobatan Lengkap -->
                                                <tr>
                                                    <td>
                                                        <div class="radio">
                                                            <input type="radio" name="optradio">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <label for="">Default</label>
                                                    </td>
                                                    <td>
                                                        <div class="radio">
                                                            <p>
                                                                Pemeriksaan pasien pada hasil BTA(-)/Ro(+) atau
                                                                tuberkulosis extra paru lanjutkan pengobatan sampai seluruh
                                                                dosis selesai
                                                                <hr>
                                                            </p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- Default -->
                                                <tr>
                                                    <td>
                                                        <div class="radio">
                                                            <input type="radio" name="optradio">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <label for="">Gagal</label>
                                                    </td>
                                                    <td>
                                                        <div class="radio">
                                                            <p>
                                                                ( 1-2 bln tidak berobat teratur) Pemeriksaan pasien pada SPS
                                                                dan lanjutkan pengobatan, bila hasil BTA (-) / Ro(+) atau
                                                                tuberkulosis paru, lanjutkan pengobatan samapi seluruh
                                                                dosis selesai
                                                            </p>
                                                            <hr>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- Gagal -->
                                                <tr>
                                                    <td>
                                                        <div class="radio">
                                                            <input type="radio" name="optradio">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <label for="">Pindah</label>
                                                    </td>
                                                    <td>
                                                        <div class="radio">
                                                            <p>
                                                                ( >=2 bulan tidak berobat teratur) Pemeriksaan pasien pada
                                                                SPS (sewaktu Pagi Sewaktu) dengan hasil BTA(-)/Ro(+)
                                                                atau tuberkulosis paru, pengobatan dihentikan, pasien
                                                                diobservasi bila gejalanya semakin parah perlu dilakukan
                                                                pemeriksaan kembali (SPS dan atau biakan)
                                                                Pemeriksaan pasien pada akhir masa intensif pengobatan
                                                                dengan hasil BTA positif (+), ganti dengan kategori 2 mulai
                                                                dari awal
                                                                <hr>
                                                                Pemeriksaan dengan hasil satu atau lebih hasil BTA positif
                                                                (+) maka lanjutkan pengobatan atau rujuk (mungkin kasus
                                                                kronik)
                                                                <hr>
                                                                Pemeriksaan pasien dilakukan berdasarkan keterangan hasil
                                                                pemeriksaan sebelumnya atau pasien melakukanpengobatan ulang
                                                            </p>
                                                            <hr>
                                                            <p>
                                                                Hasil Pemeriksaan pasien sebelumnya tidak diketahui
                                                                <hr>
                                                            </p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- Meninggal -->
                                                <tr>
                                                    <td>
                                                        <div class="radio">
                                                            <input type="radio" name="optradio">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <label for="">Meninggal</label>
                                                    </td>
                                                    <td>
                                                        <div class="radio">
                                                            <p>
                                                                Hasil pemeriksaan pasien sebelumnya tidak diketahui
                                                                Pemeriksaan pasien mengalami komplikasi
                                                            </p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- / Evaluasi BTA (-) -->
                                    <!-- Extra Paru -->
                                    <label for=""> Extra Paru</label>
                                    <div class="table">
                                        <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <th>Pilih</th>
                                                <th>Evaluasi</th>
                                                <th>Kriteria Evaluasi</th>
                                            </thead>
                                            <tbody>
                                                <!-- Pengobatan Lengkap -->
                                                <tr>
                                                    <td>
                                                        <div class="radio">
                                                            <input type="radio" name="optradio">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <label for="">Pengobatan Lengkap</label>
                                                    </td>
                                                    <td>
                                                        <div class="radio">
                                                            <p>
                                                                Pemeriksaan pasien dilakukan berdasarkan keterangan
                                                                hasil pemeriksaan sebelumnya atau pasien melakukan
                                                                pengobatan ulang.
                                                            </p>
                                                            <hr>
                                                            <p>
                                                                Pemeriksaan pasien pada pengobatan bulan ke3, ke5 dan
                                                                akhir pengobatan tidak dilakukan pemeriksaan ulang
                                                                (follow Up), pasien hanya minum obat sampai selesai
                                                            </p>
                                                            <hr>
                                                            
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- Default -->
                                                <tr>
                                                    <td>
                                                        <div class="radio">
                                                            <input type="radio" name="optradio">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <label for="">Default</label>
                                                    </td>
                                                    <td>
                                                        <div class="radio">
                                                            <p>
                                                                Pemeriksaan pasien pada hasil BTA(-)/Ro(+) atau
                                                                tuberkulosis extra paru lanjutkan pengobatan sampai
                                                                seluruh dosis selesai
                                                                <hr>
                                                            </p>
                                                            <p>
                                                                (1-2 bulan tidak berobat teratur) Pemeriksaan pasien pada
                                                                SPS dengan hasil BTA (-) atau tuberkulois extra paru,
                                                                lanjutkan pengobatan samapai seluruh dosisi selesai
                                                                <hr>
                                                            </p>
                                                            <p>
                                                                ( >=2 bulan tidak berobat teratur) Pemeriksaan pasien
                                                                pada SPS dengan hasil BTA (-) atau tuberkulosis ektra
                                                                paru, pengobatan dihentikan, pasien diobservasi bila
                                                                gejalanya semakin parah perlu dilakukan pemeriksaan
                                                                kembali (SPS dan atau biakan)
                                                                <hr>
                                                            </p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- Gagal -->
                                                <tr>
                                                    <td>
                                                        <div class="radio">
                                                            <input type="radio" name="optradio">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <label for="">Gagal</label>
                                                    </td>
                                                    <td>
                                                        <div class="radio">
                                                            <p>
                                                                Pemeriksaan pasien dengan hasil BTA (-) atau
                                                                tuberkulosis extra paru, maka lanjutkan pengobatan atau
                                                                rujik (mungkin kasus kronik)
                                                            </p>
                                                            <hr>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- Pindah -->
                                                <tr>
                                                    <td>
                                                        <div class="radio">
                                                            <input type="radio" name="optradio">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <label for="">Pindah</label>
                                                    </td>
                                                    <td>
                                                        <div class="radio">
                                                            <p>
                                                                Pemeriksaan pasien dilakukan sebulan sebelum akhir
                                                                pengobatan dengan hasil BTA(-) atau tuberkulosis extra
                                                                paru, lanjutkan pengobatan atu ganti OAT (Obat Anti
                                                                Tuberkulosis) kategori 2 mulai dari awal
                                                            </p>
                                                            <hr>
                                                            <p>
                                                                Hasil Pemeriksaan pasien sebelumnya tidak diketahui
                                                                <hr>
                                                            </p>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- Meninggal -->
                                                <tr>
                                                    <td>
                                                        <div class="radio">
                                                            <input type="radio" name="optradio">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <label for="">Meninggal</label>
                                                    </td>
                                                    <td>
                                                        <div class="radio">
                                                            <p>
                                                                
                                                                Pemeriksaan pasien mengalami komplikasi
                                                            </p>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <!-- Pendamping Minum Obat -->
                                    <br>
                                    <br>
                                    <hr>
                                    <center>
                                    <b>Identitas Pendamping Minum Obat</b>
                                    </center>
                                    <hr>
                                    <br>
                                    <br>

                                    <!-- Nama Lengkap Pendamping -->
                                    <div class="form-group">
                                        <label>Nama Lengkap Pendamping</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control"
                                                value="{{ $pasien->pendamping->nama }}"
                                                placeholder ="Nama Lengkap Pendamping Minum Obat"
                                                name="nama_pendamping" id="nama_pendamping" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="nik_pendamping">NIK Pendamping</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control"
                                                value="{{  $pasien->pendamping->nik }}"
                                                placeholder="NIK Pendamping" 
                                                name="nik_pendamping" id="nik_pendamping" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="usia_pendamping">Usia Pendamping</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" 
                                                value="{{ $pasien->pendamping->usia }}"
                                                placeholder="Usia Pendamping" 
                                                name="usia_pendamping" id="usia_pendamping" required>
                                        </div>
                                    </div>

                                    <!-- Hubungan Dengan Pasien -->
                                    <div class="form-group">
                                        <label for="hubungan_pasien">Hubungan Dengan Pasien</label>
                                        <div class="col-md-10">
                                            <select class="form-control" id="hubungan_pasien" name="hubungan_pasien" required>
                                                <option {{ (isset($pasien->pendamping->hubungan_pasien) && $pasien->pendamping->hubungan_pasien == 'Anak Kandung') ? "selected=\"selected\"" : "" }} value="Anak Kandung">Anak Kandung</option>
                                                <option {{ (isset($pasien->pendamping->hubungan_pasien) && $pasien->pendamping->hubungan_pasien == 'Saudara Kandung') ? "selected=\"selected\"" : "" }} value="Saudara Kandung">Saudara Kandung</option>
                                                <option {{ (isset($pasien->pendamping->hubungan_pasien) && $pasien->pendamping->hubungan_pasien == 'Orangtua Kandung') ? "selected=\"selected\"" : "" }} value="Orang Tua Kandung">Orangtua Kandung</option>
                                                <option {{ (isset($pasien->pendamping->hubungan_pasien) && $pasien->pendamping->hubungan_pasien == 'Keluarga') ? "selected=\"selected\"" : "" }} value="Keluarga">Keluarga</option>
                                                <option {{ (isset($pasien->pendamping->hubungan_pasien) && $pasien->pendamping->hubungan_pasien == 'Keluarga Angkat') ? "selected=\"selected\"" : "" }} value="Keluarga Angkat">Keluarga Angkat</option>
                                                <option {{ (isset($pasien->pendamping->hubungan_pasien) && $pasien->pendamping->hubungan_pasien == 'Teman') ? "selected=\"selected\"" : "" }} value="Teman">Teman</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Jenis Kelamin -->
                                    <div class="form-group">
                                        <label for="jenis_kelamin_pendamping">Jenis Kelamin</label>
                                        <div class="col-md-10">
                                            <select class="form-control" id="jenis_kelamin_pendamping" name="jenis_kelamin_pendamping" required>
                                                <option {{ (isset($pasien->pendamping->jenis_kelamin) && $pasien->pendamping->jenis_kelamin == 'Laki-laki') ? "selected=\"selected\"" : "" }} value="Laki-laki">Laki-laki</option>
                                                <option {{ (isset($pasien->pendamping->jenis_kelamin) && $pasien->pendamping->jenis_kelamin == 'Perempuan') ? "selected=\"selected\"" : "" }} value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Nomor Telepon yang bisa dihubungi -->
                                    <div class="form-group">
                                        <label for="no_telepon_pendamping">Nomor Telepon Pendamping</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" 
                                                value="{{ $pasien->pendamping->no_telepon }}"
                                                placeholder="Nomor Telepon Aktif" 
                                                name="no_telepon_pendamping" id="no_telepon_pendamping" required>
                                        </div>
                                    </div>

                                    <!-- Agama -->
                                    <div class="form-group">
                                        <label>Agama</label>
                                        <div class="col-md-10">
                                            <select class="form-control"  id="agama_pendamping" name="agama_pendamping" required>
                                                <option  {{ (isset($pasien->pendamping->agama) && $pasien->pendamping->agama == 'Islam') ? "selected=\"selected\"" : "" }} value="Islam">Islam</option>
                                                <option  {{ (isset($pasien->pendamping->agama) && $pasien->pendamping->agama == 'Kristen') ? "selected=\"selected\"" : "" }} value="Kristen">Kristen</option>
                                                <option  {{ (isset($pasien->pendamping->agama) && $pasien->pendamping->agama == 'Katolik') ? "selected=\"selected\"" : "" }} value="Katolik">Katolik</option>
                                                <option  {{ (isset($pasien->pendamping->agama) && $pasien->pendamping->agama == 'Hindu') ? "selected=\"selected\"" : "" }} value="Hindu">Hindu</option>
                                                <option  {{ (isset($pasien->pendamping->agama) && $pasien->pendamping->agama == 'Budha') ? "selected=\"selected\"" : "" }} value="Budha">Budha</option>
                                                <option  {{ (isset($pasien->pendamping->agama) && $pasien->pendamping->agama == 'Konghucu') ? "selected=\"selected\"" : "" }} value="Konghucu">Konghucu</option>
                                                <option  {{ (isset($pasien->pendamping->agama) && $pasien->pendamping->agama == 'Lainnya') ? "selected=\"selected\"" : "" }} value="Lainnya">Lainnya</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Alamat Pendamping</label>
                                        <div class ="container">
                                            <div class ="row">

                                            <!-- session in form is not work yet -->
                                            <div class ="col-md-3">
                                                    <select class="form-control" required>
                                                        @foreach($provinsis as $provinsi)
                                                            <option {{ (isset($pasien->pendamping->kecamatan) && $pasien->pendamping->kecamatan->kabupaten->provinsi_id == $provinsi->id) ? "selected=\"selected\"" : "" }} value="{{ $provinsi->id }}">
                                                                {{ $provinsi->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <!-- session in form is not work yet -->
                                                <div class ="col-md-3">
                                                    <select class="form-control" required>
                                                        @foreach($kabupatens as $kabupaten)
                                                            <option {{ (isset($pasien->pendamping->kecamatan) && $pasien->pendamping->kecamatan->kabupaten_id == $kabupaten->id) ? "selected=\"selected\"" : "" }} value="{{ $kabupaten->id }}">
                                                                {{ $kabupaten->name }}
                                                            </option>
                                                        @endforeach                 
                                                    </select>
                                                </div>

                                                <div class ="col-md-3">
                                                    <select name="kecamatan_id_pendamping" id="kecamatan_id_pendamping" class="form-control" required>
                                                        @foreach($kecamatans as $kecamatan)
                                                            <option {{ (isset($pasien->pendamping->kecamatan) && $pasien->pendamping->kecamatan_id == $kecamatan->id) ? "selected=\"selected\"" : "" }} value="{{ $kecamatan->id }}">
                                                                {{ $kecamatan->name }}
                                                            </option>
                                                        @endforeach                 
                                                    </select>
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="alamat_pendamping">Jalan</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" rows="5" 
                                                id="alamat_pendamping" name="alamat_pendamping" placeholder="RT/RW/Jalan">
                                                {{ $pasien->pendamping->alamat }}
                                            </textarea>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="col-md-10">
                                            <div class="text-right">
                                                <br>
                                                <button  type="submit" class="btn btn-warning btn-rounded">Simpan <i class="mdi mdi-save"></i></button>
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                            
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
</div>
<!-- End Footer -->
</div>
<!-- end wrapper -->

@endsection