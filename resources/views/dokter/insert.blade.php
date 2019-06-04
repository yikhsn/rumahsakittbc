@extends('layouts.master')

@section('title')
    <title>TBC APPS</title>
@endsection

@section('content')
        <div class="wrapper">
            <div class="container-fluid">
                <h2 style="font-family: segoe ui light;">Tambah Dokter</h2>
                <br>
                <div class="row">
                    <div class ="col-sm-8">
                        <div class="panel panel-color panel-primary" style="border-color: #a2a2a2;">
                            <div class="panel-heading">
                                <h3 class="panel-title">Dokter Baru</h3>
                            </div>
                            <div class="panel-body">
                                
                                <form class="form-horizontal" role="form"  method="post" action="/dokter/store">

                                    {{ csrf_field() }}

                                    <div class="form-group">
                                        <label for="nama">Nama Dokter</label>
                                        <div class="col-md-11">
                                            <input type="text" class="form-control" placeholder="Nama Dokter" id="nama" name="nama" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="nik">NIK</label>
                                        <div class="col-md-11">
                                            <input type="text" class="form-control" placeholder="NIK Dokter" id="nik" name="nik" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="usia">Usia</label>
                                        <div class="col-md-11">
                                            <input type="text" class="form-control" placeholder="Usia Dokter" id="usia" name="usia" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="agama">Agama</label>
                                        <div class="col-md-10">
                                            <select class="form-control"  name="agama" id="agama" required>
                                                <option {{ (isset($dokter->agama) && $dokter->agama == 'Islam') ? "selected=\"selected\"" : "" }} value="Islam">Islam</option>
                                                <option {{ (isset($dokter->agama) && $dokter->agama == 'Kristen') ? "selected=\"selected\"" : "" }} value="Kristen">Kristen</option>
                                                <option {{ (isset($dokter->agama) && $dokter->agama == 'Katolik') ? "selected=\"selected\"" : "" }} value="Katolik">Katolik</option>
                                                <option {{ (isset($dokter->agama) && $dokter->agama == 'Hindu') ? "selected=\"selected\"" : "" }} value="Hindu">Hindu</option>
                                                <option {{ (isset($dokter->agama) && $dokter->agama == 'Budha') ? "selected=\"selected\"" : "" }} value="Budha">Budha</option>
                                                <option {{ (isset($dokter->agama) && $dokter->agama == 'Konghucu') ? "selected=\"selected\"" : "" }} value="Konghucu">Konghucu</option>
                                                <option {{ (isset($dokter->agama) && $dokter->agama == 'Lainnya') ? "selected=\"selected\"" : "" }} value="Lainnya">Lainnya</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="no_telepon">Nomor Telepon Dokter</label>
                                        <div class="col-md-11">
                                            <input type="text" class="form-control" placeholder="Nomor Telepon" id="no_telepon" name="no_telepon" required>
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
                                    
                                    <div class="form-group">
                                        <label>Alamat Kediaman</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control"  rows="5" placeholder="RT/RW/Jalan" name="alamat" id="alamat" required>
                                            </textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="rumah_sakit_id">Rumah Sakit</label>
                                        <div class="col-md-11">
                                            <select class="form-control" 
                                                id="rumah_sakit_id" name="rumahsakit_id">
                                                @foreach($rumahsakits as $rumahsakit)
                                                    <option value="{{ $rumahsakit->id }}">
                                                        {{ $rumahsakit->nama }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                        <div class="form-group">
                                            <div class="col-md-11">
                                                <div class="text-right">
                                                    <br>
                                                    <button  type="submit" class="btn btn-warning btn-rounded">Tambah <i class=" mdi mdi-content-save"></i></button>
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
    </div>
</div>



<!-- End Footer -->
</div>
<!-- end wrapper -->
@endsection