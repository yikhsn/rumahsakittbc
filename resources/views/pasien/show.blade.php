@extends('layouts.master')

@section('title')
    <title>TBC APPS</title>
@endsection

@section('content')
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h3 style="font-family: segoe ui light;">Informasi Pasien</h3>
                        <br>
                        <br>
                        
                        <div class="row">
                            <div class="col-md-2">
                                <p style="font-family: segoe ui; font-weight: bold; padding-bottom: 2px;">
                                    Nama
                                </p>
                                <hr>

                                <p style="font-family: segoe ui; font-weight: bold; padding-bottom: 2px;">
                                    NIK
                                </p>
                                <hr>

                                <p style="font-family: segoe ui; font-weight: bold; padding-bottom: 5px;">
                                    Tipe Pasien
                                </p>
                                <hr>

                                <p style="font-family: segoe ui; font-weight: bold; padding-bottom: 7px;">
                                    Status Pengobatan
                                </p>
                                <hr>
                                
                                <p style="font-family: segoe ui; font-weight: bold; padding-bottom: 7px;">
                                    Opsi
                                </p>
                                <hr>
                            </div>

                            <div class="col-md-3">
                                <input type="text" class="form-control"
                                    value="{{ $pasien->nama }}" 
                                    style="border-top:0px; border-left:0px; border-right:0px;
                                        border-bottom-width: 1px;  background-color: white;
                                        border-bottom-color: #bdbdbd;" 
                                    disabled>
                                <br>
                                
                                <input type="text" class="form-control" 
                                    value="{{ $pasien->nik }}"
                                    style="border-top:0px; border-left:0px; border-right:0px;
                                        border-bottom-width: 1px;  background-color: white;
                                         border-bottom-color: #bdbdbd;" 
                                    disabled>
                                <br>
                                
                                <input type="text" class="form-control" 
                                    value="{{ $pasien->type->type }}"
                                    style="border-top:0px; border-left:0px; border-right:0px;
                                        border-bottom-width: 1px;  background-color: white;
                                         border-bottom-color: #bdbdbd;" 
                                    disabled>
                                <br>
                                
                                <input type="text" class="form-control" 
                                    value="{{ $pasien->evaluasi->nama }}"
                                    style="border-top:0px; border-left:0px; border-right:0px;
                                        border-bottom-width: 1px;  background-color: white;
                                         border-bottom-color: #bdbdbd;" 
                                    disabled>
                                <br>

                                <!-- Opsi -->
                                <div class="text-left">
                                    <a href="/pasien/{{ $pasien->id }}/edit" class="btn btn-warning">
                                        <i class="fa fa-edit"></i>
                                        Edit
                                    </a>
                                    <a href="print/cetak-pasien-baru.php" target="blank" class="btn btn-primary">
                                        <i class="fa fa-print"></i>
                                        Cetak
                                    </a>
                                    <a href="/pasien/{{ $pasien->id }}/delete" class="btn btn-danger">
                                        <i class="fa fa-close"></i>
                                        Hapus
                                    </a>
                                </div>
                                <br>
                                <br>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="card-box">
                                <ul class="nav nav-tabs tabs-bordered nav-justified">
                                    <li class="nav-item">
                                        <a href="#home-b2" data-toggle="tab" aria-expanded="false" class="nav-link">
                                            Identitas Diri
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#profile-b2" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                            Riwayat Pengobatan
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#messages-b2" data-toggle="tab" aria-expanded="false" class="nav-link">
                                            Data Pengobatan
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    
                                    <!-- PANEL IDENTITAS -->
                                    <div class="tab-pane" id="home-b2">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p style="font-family: segoe ui; font-weight: bold;">ID</p>
                                                <hr>
                                                <p style="font-family: segoe ui; font-weight: bold;">NIK</p>
                                                <hr>
                                                <p style="font-family: segoe ui; font-weight: bold;">Nama</p>
                                                <hr>
                                                <p style="font-family: segoe ui; font-weight: bold;">Tempat Tanggal Lahir</p>
                                                <hr>
                                                <p style="font-family: segoe ui; font-weight: bold;">Jenis Kelamin</p>
                                                <hr>
                                                <p style="font-family: segoe ui; font-weight: bold;">Nomor Telepon</p>
                                                <hr>
                                                <p style="font-family: segoe ui; font-weight: bold;">Email</p>
                                                <hr>
                                                <p style="font-family: segoe ui; font-weight: bold;">Agama</p>
                                                <hr>
                                                <p style="font-family: segoe ui; font-weight: bold;">Alamat</p>
                                                <hr>
                                            </div>
                                            <div class="col-md-6">
                                                <!-- ID -->
                                                <p> {{ $pasien->id }}</p>
                                                <hr>

                                                <!-- NIK -->
                                                <p>{{ $pasien->nik }}</p>
                                                <hr>

                                                <!-- Nama -->
                                                <p>{{ $pasien->nama }}</p>
                                                <hr>

                                                <!-- TTL -->
                                                <p>{{ $pasien->tempat_lahir }}, {{ $pasien->tanggal_lahir }}</p>
                                                <hr>

                                                <!-- Jenis Kelamin -->
                                                <p>{{ $pasien->jenis_kelamin }}</p>
                                                <hr>

                                                <!-- Nomor Telepon -->
                                                <p>{{ $pasien->no_telepon }}</p>
                                                <hr>

                                                <!-- E-Mail -->
                                                <p>{{ $pasien->email }}</p>
                                                <hr>

                                                <!-- Agama -->
                                                <p>{{ $pasien->jenis_kelamin }}</p>
                                                <hr>

                                                <!-- Alamat -->
                                                <p>
                                                    {{ $pasien->alamat }},
                                                    {{ $pasien->kecamatan->name }},
                                                    {{ $pasien->kecamatan->kabupaten->name }},
                                                    {{ $pasien->kecamatan->kabupaten->provinsi->name }}
                                                </p>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- PANEL RIWAYAT PENGOBATAN -->
                                    <div class="tab-pane active" id="profile-b2">
                                        <!-- Durasi Pengobatan -->
                                        <h5 style="font-family: segoe ui light;">Durasi Pengobatan Sebelumnya</h5>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p style="font-family: segoe ui; font-weight: bold; ">Awal Pengobatan</p>
                                                
                                                <p style="font-family: segoe ui; font-weight: bold; ">Akhir Pengobatan</p>
                                                
                                            </div>
                                            <div class="col-md-6">
                                                <p style="font-family: segoe ui; ">07/10/2015</p>
                                                
                                                <p style="font-family: segoe ui; ">07/10/2016</p>
                                                
                                            </div>
                                        </div>
                                        <br>
                                        <!-- Tempat Pengobatan Sebelumnya -->
                                        <h5 style="font-family: segoe ui light;">Tempat Pengobatan Sebelumnya</h5>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p style="font-family: segoe ui; font-weight: bold; ">Rumah Sakit/ Kliknik/Puskesmas</p>
                                                
                                                <p style="font-family: segoe ui; font-weight: bold; ">Alamat</p>
                                                
                                            </div>
                                            <div class="col-md-6">
                                                <p style="font-family: segoe ui; ">Rumah Sakit Cipta Karya Semesta</p>
                                                
                                                <p style="font-family: segoe ui; ">Provinsi : Aceh</p>
                                                <p style="font-family: segoe ui; ">Kabupaten : Aceh Utara</p>
                                                <p style="font-family: segoe ui; ">Kecamatan : Dewantara</p>
                                                <p style="font-family: segoe ui; ">JL KARYA BAKTI NO 58 GANG SEMPIT RW 01 RT 03</p>
                                            </div>
                                        </div>
                                        <!-- Tempat Pengobatan Sebelumnya -->
                                        <h5 style="font-family: segoe ui light;">Riwayat Pengobatan Sebelumnya</h5>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p style="font-family: segoe ui; font-weight: bold; ">Tipe Pasien Pengobatan Ulang</p>
                                                <p style="font-family: segoe ui; font-weight: bold; ">Jumlah Spesimen Sputum</p>
                                                <p style="font-family: segoe ui; font-weight: bold; ">Hasil Pemeriksaan Sputum</p>
                                            </div>
                                            <div class="col-md-6">
                                                <p style="font-family: segoe ui; ">Pasien Kambuhan</p>
                                                <p style="font-family: segoe ui; ">3</p>
                                                <p style="font-family: segoe ui; ">Positif</p>
                                            </div>
                                        </div>
                                        <br>
                                        <!-- Tempat Pengobatan Sebelumnya -->
                                        <h5 style="font-family: segoe ui light;">Kriteria Pengobatan Sebelumnya</h5>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p style="font-family: segoe ui; font-weight: bold; ">Kesembuhan Pengobatan </p>
                                                <p style="font-family: segoe ui; font-weight: bold; ">kelengkapan Pengobatan</p>
                                                
                                            </div>
                                            <div class="col-md-6">
                                                <p style="font-family: segoe ui; ">Sudah Sembuh</p>
                                                <p style="font-family: segoe ui; ">Pengobatan 1 - 2 Bulan</p>
                                                
                                            </div>
                                        </div>
                                        <br>
                                        <!-- Tempat Pengobatan Sebelumnya -->
                                        <h5 style="font-family: segoe ui light;">Informasi Lain</h5>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p style="font-family: segoe ui; font-weight: bold; ">Foto Toraks Pasien </p>
                                                <p style="font-family: segoe ui; font-weight: bold; ">Catatan Lain</p>
                                                
                                            </div>
                                            <div class="col-md-6">
                                                <p style="font-family: segoe ui; "><a href="#"><u>Unduh</u></a></p>
                                                <p></p>
                                                <p style="font-family: segoe ui; ">Lorem Isum</p>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="messages-b2">
                                        <div class="container">
                                            1. Buat Kalender untuk pengingat minum obat
                                            2. Buat status pengambilan obat
                                            3. Jadwal konsultasi dokter
                                        </div>
                                    </div>
                                    <center>
                                    
                                    </center>
                                    <div class="tab-pane" id="settings-b2">
                                        <div class="row">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div> <!-- end col -->
                        </div>
                    </div>
                    
                </div>
                <!-- Modal Hapus Pasien -->
                <div class="modal fade hapus-pasien" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mySmallModalLabel">Hapus Rumah Sakit</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <center>
                                <i class="mdi mdi-close-circle" style="font-size: 100px; color:tomato;"></i>
                                <br>
                                Apakah Anda Akan Menghapus Informasi Pasien ?
                                </center>
                                
                            </div>
                            
                            <div class="text-center">
                                <button class="btn btn-primary"><i class="mdi mdi-arrow-left"></i> Batal</button>
                                <a href="hapus-pasien.php" class="btn btn-danger"><i class="mdi mdi-close"></i> Hapus</a>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->          
            </div>                
        </div>
        <!-- end wrapper -->
@endsection
