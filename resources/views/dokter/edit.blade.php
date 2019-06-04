<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Ini adalah halaman edit untuk dokter {{ $dokter->id }}

    <form method="post" action="/dokter/{{ $dokter->id }}/update">
    
    {{ csrf_field() }}

    <div>
        <label for="nama">nama</label>
        <input type="text" name="nama" id="nama"
        placeholder="required" required value="{{ $dokter->nama }}">
    </div>
    
    <div>
        <label for="usia">usia</label>
        <input type="text" name="usia" id="usia"
        placeholder="required" required value="{{ $dokter->usia }}">
    </div>

    <div>
        <label for="usia">agama</label>
        <input type="text" name="agama" id="agama"
        placeholder="required" required value="{{ $dokter->agama }}">
    </div>

    <div>
        <label for="nik">nik</label>
        <input type="text" name="nik" id="nik"
        placeholder="required" required value="{{ $dokter->nik }}">
    </div>

    <div>
        <label for="no_telepon">no_telepon</label>
        <input type="text" name="no_telepon" id="no_telepon"
        placeholder="required" required value="{{ $dokter->no_telepon }}">
    </div>

    <div>
        <label for="alamat">alamat</label>
        <input type="text" name="alamat" id="alamat"
        placeholder="required" required value="{{ $dokter->alamat }}">
    </div>

    <div>
        <label for="kecamatan_id">kecamatan_id</label>
        <input type="text" name="kecamatan_id" id="kecamatan_id"
        placeholder="required" required value="{{ $dokter->kecamatan->id }}">
    </div>

    <div>
        <label for="rumahsakit_id">rumahsakit_id</label>
        <input type="text" name="rumahsakit_id" id="rumahsakit_id"
        placeholder="required" required value="{{ $dokter->rumahsakit->id }}">
    </div>

    <button type="submit">Submit</button>
</form>
</body>
</html> -->

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="/dokter/store">
    
    {{ csrf_field() }}

    <div>
        <label for="nama">nama</label>
        <input type="text" name="nama" id="nama">
    </div>
    
    <div>
        <label for="usia">usia</label>
        <input type="text" name="usia" id="usia">
    </div>

    <div>
        <label for="usia">agama</label>
        <input type="text" name="agama" id="agama">
    </div>

    <div>
        <label for="nik">nik</label>
        <input type="text" name="nik" id="nik">
    </div>

    <div>
        <label for="no_telepon">no_telepon</label>
        <input type="text" name="no_telepon" id="no_telepon">
    </div>

    <div>
        <label for="alamat">alamat</label>
        <input type="text" name="alamat" id="alamat">
    </div>

    <div>
        <label for="kecamatan_id">kecamatan_id</label>
        <input type="text" name="kecamatan_id" id="kecamatan_id">
    </div>

    <div>
        <label for="rumahsakit_id">rumahsakit_id</label>
        <input type="text" name="rumahsakit_id" id="rumahsakit_id">
    </div>

    <button type="submit">Submit</button>
</form>
</body>
</html> -->

@extends('layouts.master')

@section('title')
    <title>TBC APPS</title>
@endsection

@section('content')
<div class="wrapper">
            <div class="container-fluid">
                <h2 style="font-family: segoe ui light;">Edit Dokter</h2>
                <br>
                <div class="row">
                    <div class ="col-sm-8">
                        <div class="panel panel-color panel-primary" style="border-color: #a2a2a2;">
                            <div class="panel-heading">
                                <h3 class="panel-title">Dokter {{ $dokter->nama }}</h3>
                            </div>
                            <div class="panel-body">
                                
                                <form class="form-horizontal" role="form"  method="post" action="/dokter/{{ $dokter->id }}/update">

                                    {{ csrf_field() }}

                                    <div class="form-group">
                                        <label for="nama">Nama Dokter</label>
                                        <div class="col-md-11">
                                            <input type="text" class="form-control" placeholder="Nama Dokter" 
                                            value="{{ $dokter->nama }}"
                                            id="nama" name="nama" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="nik">NIK</label>
                                        <div class="col-md-11">
                                            <input type="text" class="form-control" placeholder="NIK Dokter" 
                                            value="{{ $dokter->nik }}"                                            
                                            id="nik" name="nik" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="usia">Usia</label>
                                        <div class="col-md-11">
                                            <input type="text" class="form-control" placeholder="Usia Dokter" 
                                            value="{{ $dokter->nik }}"                                            
                                            id="usia" name="usia" required>
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
                                            <input type="text" class="form-control" placeholder="Nomor Telepon" 
                                            value="{{ $dokter->no_telepon }}"                                            
                                            id="no_telepon" name="no_telepon" required>
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
                                                            <option {{ (isset($dokter->kecamatan) && $dokter->kecamatan->kabupaten->provinsi_id == $provinsi->id) ? "selected=\"selected\"" : "" }} value="{{ $provinsi->id }}">{{ $provinsi->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <!-- session in form is not work yet -->
                                                <div class ="col-md-3">
                                                    <select class="form-control" required>
                                                        @foreach($kabupatens as $kabupaten)
                                                            <option {{ (isset($dokter->kecamatan) && $dokter->kecamatan->kabupaten_id == $kabupaten->id) ? "selected=\"selected\"" : "" }} value="{{ $kabupaten->id }}">{{ $kabupaten->name }}</option>
                                                        @endforeach                 
                                                    </select>
                                                </div>

                                                <div class ="col-md-3">
                                                    <select name="kecamatan_id" id="kecamatan_id" class="form-control" required>
                                                        @foreach($kecamatans as $kecamatan)
                                                            <option {{ (isset($dokter->kecamatan) && $dokter->kecamatan_id == $kecamatan->id) ? "selected=\"selected\"" : "" }} value="{{ $kecamatan->id }}">{{ $kecamatan->name }}</option>
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
                                            {{ $dokter->alamat }}
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
                                                    <button  type="submit" class="btn btn-warning btn-rounded">Simpan <i class=" mdi mdi-content-save"></i></button>
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