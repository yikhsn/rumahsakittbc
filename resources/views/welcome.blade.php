@extends('layouts.master')

@section('title')
    <title>TBC APPS</title>
@endsection

@section('content')
<div class="wrapper">
            <div class="container-fluid">
                
                <!-- Menu Shorthcut -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box" style="border-color:#cacaca;">
                            <h5>Menu</h5>
                            <div class="row">
                                <!-- Pasien -->
                                <div class="col-md-3">
                                    <div class="card-box" style="background-color:tomato;">
                                        <center>
                                        <p style="color:white;">Pasien</p>
                                        <hr>
                                        <i class="mdi mdi-account-plus" style="font-size:30px; color:white;"></i>
                                        <br>
                                        <!-- <p style="color:white;">Tambah Pasien Baru</p> -->
                                        <button class="btn btn-link" data-toggle="modal" data-target=".bs-example-modal-sm" style="text-align: left; color: white;">Tambah Pasien Baru</button>
                                        <br>
                                        <i class="mdi mdi-format-list-bulleted" style="font-size:30px; color:white;"></i>
                                        <br>
                                        <a href="/pasien" class="btn btn-link" style="color:white;">Daftar Pasien</a>
                                        </center>
                                        </i>
                                    </div>
                                </div>
                                <!-- Dokter -->
                                <div class="col-md-3">
                                    <div class="card-box" style="background-color: teal;">
                                        <center>
                                        <p style="color:white;">Dokter</p>
                                        <hr>
                                        <i class="mdi mdi-stethoscope" style="font-size:30px; color:white;"></i>
                                        <br>
                                        <a href="/dokter/add" class="btn btn-link" style="color:white;">Tambah Dokter</a>
                                        
                                        <br>
                                        <i class="mdi mdi-format-list-bulleted" style="font-size:30px; color:white;"></i>
                                        <br>
                                        <a href="/dokter" class="btn btn-link" style="color:white;">Daftar Dokter</a>
                                        </center>
                                        </i>
                                    </div>
                                </div>
                                <!-- Rumah Sakit -->
                                <div class="col-md-3">
                                    <div class="card-box" style="background-color: #33cc33;">
                                        <center>
                                        <p style="color:white;">Rumah Sakit</p>
                                        <hr>
                                        <i class="mdi mdi-hospital-building" style="font-size:30px; color:white;"></i>
                                        <br>
                                        <a href="/rumahsakit/add" class="btn btn-link" style="color:white;">Tambah Rumah Sakit</a>
                                        <br>
                                        <i class="mdi mdi-format-list-bulleted" style="font-size:30px; color:white;"></i>
                                        <br>
                                        <a href="/rumahsakit" class="btn btn-link" style="color:white;">Daftar Rumah Sakit</a>
                                        </center>
                                        </i>
                                    </div>
                                </div>
                                <!-- Grafik -->
                                <div class="col-md-3">
                                    <div class="card-box" style="background-color: #00cc99;">
                                        <center>
                                        <p style="color:white;">Grafik</p>
                                        <hr>
                                        <i class="mdi mdi-trending-up" class="btn btn-link" style="font-size:30px; color:white;"></i>
                                        <br>
                                        <a href="grafik.php" style="color:white;">Grafik Data</a>
                                        <br>
                                        <br>
                                        <i class=" mdi mdi-blur-radial" class="btn btn-link" style="font-size:25px; color:white;"></i>
                                        <br>
                                        <button class="btn btn-link" data-toggle="modal" data-target=".bs-example-modal-lg" style="text-align: left; color: white;">Halaman</button>
                                        </center>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h4>Grafik Data</h4>
                <hr>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card-box" style="border-color:#cacaca;">
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>Statistik</h5>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-right">
                                        <a href="/pasien" class="btn btn-primary">Selengkapnya..</a>
                                    </div>
                                </div>
                            </div>
                            
                            <hr>
                            <h5 style="font-family: segoe ui light;">Pasien Baru</h5>
                            <h3 style="  font-family: segoe ui light; font-size: 35px;" class="m-b-20 mt-3" ><span>{{ $jumlah_pasien_baru }}</span></h3>
                            <h5 style="font-family: segoe ui light;">Pasien Pengobatan Ulang</h6>
                            <h3 style="  font-family: segoe ui light; font-size: 35px;" class="m-b-20 mt-3" ><span>{{ $jumlah_pasien_lama }}</span></h3>
                            <h5 style="font-family: segoe ui light; ">Jumlah Rumah Sakit</h6>
                            <h3 style="  font-family: segoe ui light; font-size: 35px;" class="m-b-20 mt-3" ><span>{{ $jumlah_rumah_sakit }}</span></h3>                            
                        </div>
                    </div>
                    
                    <div class="col-sm-8">
                        <div class="card-box" style="border-color:#cacaca;">
                            <h6 class="m-t-0">Jadwal Pasien</h6>
                            <div class="table-responsive">
                                <table class="table table-hover mails m-0 table table-actions-bar">
                                    <thead>
                                        <th style="font-size: 11px;">No</th>
                                        <th style="font-size: 11px;">Nama</th>
                                        <th style="font-size: 11px;">Tipe</th>
                                        <th style="font-size: 11px;">Kriteria</th>
                                        <th style="font-size: 11px;">Jadwal</th>
                                        <th style="font-size: 11px;">Tanggal</th>
                                        <th style="font-size: 11px;">Rumah Sakit</th>
                                        <th style="font-size: 11px;">Dokter</th>
                                        <th style="font-size: 11px;">Lihat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($jadwal_pasien_hari_ini as $jadwal)
                                        <tr>
                                            <td style="font-size: 12px;">{{ $jadwal_pasien_hari_ini_number++ }}</td>
                                            <td style="font-size: 12px;">{{ $jadwal->pasien->nama}}</td>
                                            <td style="font-size: 12px;">{{ $jadwal->pasien->type->type}}</td>
                                            <td style="font-size: 12px;">{{ $jadwal->pasien->jenis_penyakit->nama}}</td>
                                            <td style="font-size: 12px;">{{ $jadwal->nama_jadwal}}</td>
                                            <td style="font-size: 12px;">{{ date('d-m-Y', strtotime($jadwal->start)) }}</td>
                                            <td style="font-size: 12px;">{{ $jadwal->pasien->rumahsakit->nama}}</td>
                                            <td style="font-size: 12px;">{{ $jadwal->pasien->dokter->nama}}</td>
                                            <td style="font-size: 12px;"><a href="/pasien/{{$jadwal->pasien->id}}/jadwal" class="btn btn-primary"><i class="fa fa-eye"></i></a></td>
                                        </tr>;
                                    @endforeach                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Akhir Penambahan Kode -->
                </div>
                <!--  -->
                <h4>Tabel Data</h4>
                <hr>
                <!-- end row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box" style="border-color:#cacaca;">
                            <h6 class="m-t-0">Daftar Pasien</h6>
                            <div class="table-responsive">
                                <table class="table table-hover mails m-0 table table-actions-bar">
                                    <thead>
                                        <th>No</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Tipe Pasien</th>
                                        <th>Kategori</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($pasiens as $pasien)
                                    <tr>
                                        <td>{{ $pasiens_number += 1 }}</td>
                                        <td>{{ $pasien->nik }}</td>
                                        <td>{{ $pasien->nama }}</td>
                                        <td>
                                            @if(!is_null($pasien->type_id))
                                                {{ $pasien->type->type }}
                                            @endif
                                        </td>
                                        <td>
                                            @if(!is_null($pasien->jenis_penyakit_id))
                                                {{ $pasien->jenis_penyakit->nama }}
                                            @endif
                                        </td>
                                        <td>
                                            @if(!is_null($pasien->evaluasi_id))
                                                {{ $pasien->evaluasi->nama }}
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="card-box" style="border-color:#cacaca;">
                        <h6 class="m-t-0">Daftar Rumah Sakit</h6>
                        <div class="table-responsive">
                            <table class="table table-hover mails m-0 table table-actions-bar">
                                <thead>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jumlah Pasien</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($rumahsakits as $rumahsakit)
                                <tr>
                                    <td>{{ $rumahsakits_number += 1 }}</td>
                                    <td>{{ $rumahsakit->nama }}</td>
                                    <td>{{ $rumahsakit->pasiens->count() }}</td>
                                </tr>
                                @endforeach                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-6">
                <div class="card-box" style="border-color:#cacaca;">
                    <h6 class="m-t-0">Daftar Dokter</h6>
                    <div class="table-responsive">
                        <table class="table table-hover mails m-0 table table-actions-bar">
                            <thead>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jumlah Pasien</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dokters as $dokter)
                            <tr>
                                <td>{{ $dokters_number += 1 }}</td>
                                <td>{{ $dokter->nama }}</td>
                                <td>{{ $dokter->pasiens->count() }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div> <!-- end container -->
    <!-- Menu Modal -->
    
</div>
<!-- end wrapper -->
@endsection