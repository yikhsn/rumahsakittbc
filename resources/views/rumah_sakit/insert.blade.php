
@extends('layouts.master')

@section('title')
    <title>TBC APPS</title>
@endsection

@section('content')
            <div class="wrapper">
                <div class="container-fluid">
                    <h2 style="font-family: segoe ui light;">Tambah Rumah Sakit Baru</h2>
                    <br>
                    <div class="row">
                        <div class ="col-sm-11">
                            <div class="panel panel-color panel-success" style="border-color: #a2a2a2;">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Langkah 1 : Rincian Rumah Sakit</h3>
                                </div>
                                <div class="panel-body">
                                    <form method="post" action="/rumahsakit/store">
    
                                        {{ csrf_field() }}

                                        <div class="form-group">
                                            <label for="nama">Nama Rumah Sakit</label>
                                            <div class="col-md-10">
                                                <input type="text" name="nama" id="nama" class="form-control" placeholder ="Nama Rumah Sakit" required >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="no_rumahsakit">Nomor Rumah Sakit</label>
                                            <div class="col-md-10">
                                                <input type="text" name="no_rumahsakit" id="no_rumahsakit" class="form-control" placeholder ="Nomor Rumah Sakit" required >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="no_telepon">Nomor Telepon</label>
                                            <div class="col-md-10">
                                                <input type="text" name="no_telepon" id="no_telepon" class="form-control" placeholder ="Nomor Telepon" required >
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <div class ="container">
                                                <div class ="row">
                                                    <div class ="col-md-3">
                                                        <select class="form-control" required>
                                                            @foreach($provinsis as $provinsi)
                                                                <option value="{{ $provinsi->id }}">{{ $provinsi->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class ="col-md-3">
                                                        <select class="form-control" required>
                                                            @foreach($kabupatens as $kabupaten)
                                                                <option value="{{ $kabupaten->id }}">{{ $kabupaten->name }}</option>
                                                            @endforeach                 
                                                        </select>
                                                    </div>

                                                    <div class ="col-md-3">
                                                        <select name="kecamatan_id" id="kecamatan_id" class="form-control" required>
                                                            @foreach($kecamatans as $kecamatan)
                                                                <option value="{{ $kecamatan->id }}">{{ $kecamatan->name }}</option>
                                                            @endforeach                 
                                                        </select>
                                                    </div>

                                                </div>                                                
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="alamat">Alamat Kediaman</label>
                                            <div class="col-md-10">
                                                <textarea type="text" name="alamat" id="alamat" class="form-control" required rows="5" placeholder="RT/RW/Jalan"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-10">
                                                <div class="text-right">
                                                <br>
                                                <br>
                                                <button class="btn btn-danger btn-rounded" type="submit">Tambah</button>
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