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
                                                value="{{ $pasien->tanggal_lahir }}"
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
                                            <textarea class="form-control" required rows="5" placeholder="RT/RW/Jalan" name="alamat" id="alamat">{{ $pasien->alamat }}</textarea>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <hr>
                                    <center>
                                    <b>Riwayat Pasien </b>
                                    </center>
                                    <hr>


                                    <!-- RIWAYAT PASIEN -->

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
                                    @if(!is_null($pasien->pengobatan_satu_bulan))
                                        <div class="form-group">
                                            <label for="pengobatan_satu_bulan">Riwayat Pengobatan Dibawah Satu Bulan</label>
                                            <div class="col-md-10">
                                                <select class="form-control" id="pengobatan_satu_bulan" name="pengobatan_satu_bulan" required>
                                                    <option {{ (isset($pasien->pengobatan_satu_bulan) && $pasien->pengobatan_satu_bulan == 'Pernah') ? "selected=\"selected\"" : "" }} value="Pernah">Pernah</option>
                                                    <option {{ (isset($pasien->pengobatan_satu_bulan) && $pasien->pengobatan_satu_bulan == 'Belum') ? "selected=\"selected\"" : "" }} value="Belum">Belum</option>
                                                </select>
                                            </div>
                                        </div>
                                    @endif

                                    <!-- Catatan Lain -->
                                    <div class="form-group">
                                        <label for="catatan_kesehatan">Catatan Kesehatan:</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" rows="5" 
                                                placeholder="Catatan Kesehatan dan Riwayat Pasien, Termasuk Informasi khusus seputar Alergi, Penanganan Khusus, Penyakit Bawaan, DLL" 
                                                name="catatan_kesehatan" id="catatan_kesehatan">{{ $pasien->catatan_kesehatan }}</textarea>
                                        </div>
                                    </div>

                                    @if(!is_null($pasien->awal_pengobatan_sebelumnya))
                                        <div class="form-group">
                                            <label>Awal Pengobatan Sebelumnya</label>
                                            <div class="col-md-10">
                                                <input type="date" class="form-control" 
                                                    value="{{ $pasien->awal_pengobatan_sebelumnya }}"
                                                    name="awal_pengobatan_sebelumnya" id="awal_pengobatan_sebelumnya" 
                                                    required>
                                            </div>
                                        </div>
                                    @endif

                                    @if(!is_null($pasien->akhir_pengobatan_sebelumnya))
                                        <div class="form-group">
                                            <label>Akhir Pengobatan Sebelumnya</label>
                                            <div class="col-md-10">
                                                <input type="date" class="form-control"
                                                    value="{{ $pasien->akhir_pengobatan_sebelumnya }}"
                                                    name="akhir_pengobatan_sebelumnya" id="akhir_pengobatan_sebelumnya" 
                                                    required>
                                            </div>
                                        </div>
                                    @endif

                                    @if(!is_null($pasien->kelangkapan_pengobatan_sebelumnya))
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
                                    @endif

                                    @if(!is_null($pasien->tempat_pengobatan_sebelumnya))
                                        <div class="form-group">
                                            <label>Tempat Pengobatan Sebelumnya</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control"
                                                    value="{{ $pasien->tempat_pengobatan_sebelumnya }}"
                                                    name="tempat_pengobatan_sebelumnya" id="tempat_pengobatan_sebelumnya" 
                                                    required>
                                            </div>
                                    </div>
                                    @endif

                                    @if(!is_null($pasien->tempat_pengobatan_sebelumnya))
                                        <div class="form-group">
                                            <label>Nama Dokter Pengobatan Sebelumnya</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" 
                                                    value=" {{ $pasien->nama_dokter_sebelumnya }}"
                                                    name="nama_dokter_sebelumnya" id="nama_dokter_sebelumnya" 
                                                    required>
                                            </div>
                                        </div>
                                    @endif

                                    @if(!is_null($pasien->alamat_pengobatan_sebelumnya))
                                    <div class="form-group">
                                        <label>Alamat Pengobatan Sebelumnya</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" required rows="5" name="alamat_pengobatan_sebelumnya" id="alamat_pengobatan_sebelumnya" required>{{ $pasien->alamat_pengobatan_sebelumnya }}</textarea>
                                        </div>
                                    </div>
                                    @endif

                                    @if(!is_null($pasien->jumlah_sputum_sebelumnya))
                                    <div class="form-group">
                                        <label>Jumlah Spesimen Sputum SPS Sebelumnya</label>
                                        <div class="col-md-10">
                                            <input type="number" class="form-control"
                                                value="{{ $pasien->jumlah_sputum_sebelumnya }}"
                                                name="jumlah_sputum_sebelumnya" id="jumlah_sputum_sebelumnya" 
                                                required> 
                                        </div>
                                    </div>
                                    @endif
                                    
                                    @if(!is_null($pasien->hasil_sputum_sebelumnya))                                    
                                        <div class="form-group">
                                            <label>Hasil Pemeriksaan Sputum SPS Sebelumnya</label>
                                            <div class="col-md-10">
                                                <select class="form-control" id="hasil_sputum_sebelumnya" name="hasil_sputum_sebelumnya" required>
                                                    <option {{ (isset($pasien->hasil_sputum_sebelumnya) && $pasien->hasil_sputum_sebelumnya == 'Positif') ? "selected=\"selected\"" : "" }} value="Positif">Positif</option>
                                                    <option {{ (isset($pasien->hasil_sputum_sebelumnya) && $pasien->hasil_sputum_sebelumnya == 'Negatif') ? "selected=\"selected\"" : "" }} value="Negatif">Negatif</option>
                                                </select>
                                            </div>
                                        </div>
                                    @endif
                                    
                                    @if(!is_null($pasien->status_kesembuhan_sebelumnya))
                                        <div class="form-group">
                                            <div class="col-md-10">
                                                <label for=""> Status Kesembuhan pada Pengobatan Sebelumnya</label>
                                                <select class="form-control" id="status_kesembuhan_sebelumnya" name="status_kesembuhan_sebelumnya" required>
                                                    <option {{ (isset($pasien->status_kesembuhan_sebelumnya) && $pasien->status_kesembuhan_sebelumnya == 'Sembuh') ? "selected=\"selected\"" : "" }} value="Sembuh">Sembuh</option>
                                                    <option {{ (isset($pasien->status_kesembuhan_sebelumnya) && $pasien->status_kesembuhan_sebelumnya == 'Belum Sembuh') ? "selected=\"selected\"" : "" }} value="Belum Sembuh">Belum Sembuh</option>
                                                </select>
                                            </div>
                                        </div>
                                    @endif

                                    <br>
                                    <br>


                                    <!-- KRITERIA EVALUASI -->
                                    <hr>
                                        <center>
                                            <b>Kriteria Evaluasi<b>
                                        </center>
                                    <hr>

                                    <div class="form-group">
                                        <div class="col-md-10">
                                            <label for="jenis_penyakit_id">Tipe Pasien</label>
                                            <select  id="" class="form-control" name="jenis_penyakit_id">
                                                @foreach($jenis_penyakits as $jenis_penyakit)
                                                    <option 
                                                        {{ (isset($pasien->jenis_penyakit_id) && $pasien->jenis_penyakit_id == $jenis_penyakit->id) ? "selected=\"selected\"" : "" }}
                                                        value="{{ $jenis_penyakit->id }}">
                                                        {{ $jenis_penyakit->nama }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-10">
                                            <label for="evaluasi_id">Evaluasi</label>
                                            <select id="" class="form-control" name="evaluasi_id">
                                                @foreach($evaluasis as $evaluasi)
                                                    <option 
                                                        {{ (isset($pasien->evaluasi_id) && $pasien->evaluasi_id == $evaluasi->id) ? "selected=\"selected\"" : "" }}
                                                        value="{{ $evaluasi->id }}">
                                                        {{ $evaluasi->nama }} - {{ $evaluasi->jenis_penyakit->nama }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>


                                    <br>
                                    <br>


                                    <!-- DOKTER DAN RUMAHSAKIT -->
                                    <hr>
                                        <center>
                                            <b>Dokter dan Rumah Sakit<b>
                                        </center>
                                    <hr>

                                    <div class="form-group">
                                        <div class="col-md-10">
                                            <label for="rumahsakit_id">Tipe Pasien</label>
                                            <select  id="rumahsakit_id" class="form-control" name="rumahsakit_id">
                                                @foreach($rumahsakits as $rumahsakit)
                                                    <option 
                                                        {{ (isset($pasien->rumahsakit_id) && $pasien->rumahsakit_id == $rumahsakit->id) ? "selected=\"selected\"" : "" }}
                                                        value="{{ $rumahsakit->id }}">
                                                        {{ $rumahsakit->nama }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-10">
                                            <label for="dokter_id">Evaluasi</label>
                                            <select id="dokter_id" class="form-control" name="dokter_id">
                                                @foreach($dokters as $dokter)
                                                    <option 
                                                        {{ (isset($pasien->dokter_id) && $pasien->dokter_id == $dokter->id) ? "selected=\"selected\"" : "" }}
                                                        value="{{ $dokter->id }}">
                                                        {{ $dokter->nama }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <br>
                                    <br>

                                    <!-- PENDAMPING MINUM OBAT -->
                                    <hr>
                                    <center>
                                    <b>Identitas Pendamping Minum Obat</b>
                                    </center>
                                    <hr>

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

                                    <!-- <div class="form-group">
                                        <label for="nik_pendamping">NIK Pendamping</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control"
                                                value="{{  $pasien->pendamping->nik }}"
                                                placeholder="NIK Pendamping" 
                                                name="nik_pendamping" id="nik_pendamping" readonly>
                                        </div>
                                    </div> -->

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
                                                <option {{ (isset($pasien->pendamping->hubungan_pasien) && $pasien->pendamping->hubungan_pasien == 'Orangtua Kandung') ? "selected=\"selected\"" : "" }} value="Orangtua Kandung">Orangtua Kandung</option>
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
                                                id="alamat_pendamping" name="alamat_pendamping" placeholder="RT/RW/Jalan">{{ $pasien->pendamping->alamat }}</textarea>
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