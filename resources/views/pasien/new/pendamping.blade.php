@extends('layouts.master')

@section('title')
    <title>TBC APPS</title>
@endsection

@section('content')
<div class="wrapper">
            <div class="container-fluid">
                <h2 style="font-family: segoe ui light;">Daftar Pasien Baru</h2>
                <br>
                <div class="row">
                    <div class ="col-sm-11">
                        <div class="panel panel-color panel-primary" style="border-color: #a2a2a2;">
                            <div class="panel-heading">
                                <h3 class="panel-title">Langkah 4 : Pendamping Minum Obat</h3>
                            </div>
                            <div class="panel-body">
                                
                                <form method="post" action="/pasien/new/pendamping_store" class="form-horizontal" role="form">
                                    
                                    {{ csrf_field() }}
                                    
                                    <div class="form-group">
                                        <label for="nama">Nama Pendamping</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" 
                                                value="{{ (isset( $pendamping->nama )) ? $pendamping->nama : '' }}"
                                                placeholder ="Nama Lengkap Pendamping" 
                                                name="nama" id="nama" required >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="nik">NIK Pendamping</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control"
                                                value="{{ (isset( $pendamping->nik )) ? $pendamping->nik : '' }}"
                                                placeholder="NIK Pendamping" 
                                                name="nik" id="nik" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="usia">Usia Pendamping</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" 
                                                value="{{ (isset( $pendamping->usia )) ? $pendamping->usia : '' }}"
                                                placeholder="Usia Pendamping" 
                                                name="usia" id="usia" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="hubungan_pasien">Hubungan Dengan Pasien</label>
                                        <div class="col-md-10">
                                            <select class="form-control" id="hubungan_pasien" name="hubungan_pasien" required>
                                                <option {{ (isset($pendamping->hubungan_pasien) && $pendamping->hubungan_pasien == 'Anak Kandung') ? "selected=\"selected\"" : "" }} value="Anak Kandung">Anak Kandung</option>
                                                <option {{ (isset($pendamping->hubungan_pasien) && $pendamping->hubungan_pasien == 'Saudara Kandung') ? "selected=\"selected\"" : "" }} value="Saudara Kandung">Saudara Kandung</option>
                                                <option {{ (isset($pendamping->hubungan_pasien) && $pendamping->hubungan_pasien == 'Orangtua Kandung') ? "selected=\"selected\"" : "" }} value="Orang Tua Kandung">Orangtua Kandung</option>
                                                <option {{ (isset($pendamping->hubungan_pasien) && $pendamping->hubungan_pasien == 'Keluarga') ? "selected=\"selected\"" : "" }} value="Keluarga">Keluarga</option>
                                                <option {{ (isset($pendamping->hubungan_pasien) && $pendamping->hubungan_pasien == 'Keluarga Angkat') ? "selected=\"selected\"" : "" }} value="Keluarga Angkat">Keluarga Angkat</option>
                                                <option {{ (isset($pendamping->hubungan_pasien) && $pendamping->hubungan_pasien == 'Teman') ? "selected=\"selected\"" : "" }} value="Teman">Teman</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="jenis_kelamin">Jenis Kelamin Pendamping</label>
                                        <div class="col-md-10">
                                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                                                <option {{ (isset($pendamping->jenis_kelamin) && $pendamping->jenis_kelamin == 'Laki-laki') ? "selected=\"selected\"" : "" }} value="Laki-laki">Laki-laki</option>
                                                <option {{ (isset($pendamping->jenis_kelamin) && $pendamping->jenis_kelamin == 'Perempuan') ? "selected=\"selected\"" : "" }} value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="no_telepon">Nomor Telepon Pendamping</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control"
                                                value="{{ (isset( $pendamping->no_telepon )) ? $pendamping->no_telepon : '' }}"
                                                placeholder="Nomor Telepon Aktif"
                                                name="no_telepon" id="no_telepon" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="agama">Agama Pendamping</label>
                                        <div class="col-md-10">
                                            <select class="form-control" id="agama" name="agama" required>
                                                <option  {{ (isset($pendamping->agama) && $pendamping->agama == 'Islam') ? "selected=\"selected\"" : "" }} value="Islam">Islam</option>
                                                <option  {{ (isset($pendamping->agama) && $pendamping->agama == 'Kristen') ? "selected=\"selected\"" : "" }} value="Kristen">Kristen</option>
                                                <option  {{ (isset($pendamping->agama) && $pendamping->agama == 'Katolik') ? "selected=\"selected\"" : "" }} value="Katolik">Katolik</option>
                                                <option  {{ (isset($pendamping->agama) && $pendamping->agama == 'Hindu') ? "selected=\"selected\"" : "" }} value="Hindu">Hindu</option>
                                                <option  {{ (isset($pendamping->agama) && $pendamping->agama == 'Budha') ? "selected=\"selected\"" : "" }} value="Budha">Budha</option>
                                                <option  {{ (isset($pendamping->agama) && $pendamping->agama == 'Konghucu') ? "selected=\"selected\"" : "" }} value="Konghucu">Konghucu</option>
                                                <option  {{ (isset($pendamping->agama) && $pendamping->agama == 'Lainnya') ? "selected=\"selected\"" : "" }} value="Lainnya">Lainnya</option>
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
                                                            <option {{ (isset($pendamping->kecamatan) && $pendamping->kecamatan->kabupaten->provinsi_id == $provinsi->id) ? "selected=\"selected\"" : "" }} value="{{ $provinsi->id }}">
                                                                {{ $provinsi->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <!-- session in form is not work yet -->
                                                <div class ="col-md-3">
                                                    <select class="form-control" required>
                                                        @foreach($kabupatens as $kabupaten)
                                                            <option {{ (isset($pendamping->kecamatan) && $pendamping->kecamatan->kabupaten_id == $kabupaten->id) ? "selected=\"selected\"" : "" }} value="{{ $kabupaten->id }}">
                                                                {{ $kabupaten->name }}
                                                            </option>
                                                        @endforeach                 
                                                    </select>
                                                </div>

                                                <div class ="col-md-3">
                                                    <select name="kecamatan_id" id="kecamatan_id" class="form-control" required>
                                                        @foreach($kecamatans as $kecamatan)
                                                            <option {{ (isset($pendamping->kecamatan) && $pendamping->kecamatan_id == $kecamatan->id) ? "selected=\"selected\"" : "" }} value="{{ $kecamatan->id }}">
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
                                        <label for="alamat">Jalan</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" rows="5" id="alamat" name="alamat" placeholder="RT/RW/Jalan"> {{ (isset( $pendamping->alamat )) ? $pendamping->alamat : '' }}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-10">
                                            <div class="text-right">
                                                <!-- <button  type="button" class="btn btn-danger btn-rounded">Hapus <i class="mdi mdi-delete"></i></button> -->
                                                <button  type="submit" class="btn btn-warning btn-rounded">Selanjutnya <i class="mdi mdi-arrow-right-bold"></i></button>
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
    </div>
</div>



<!-- End Footer -->
</div>
<!-- end wrapper -->

@endsection