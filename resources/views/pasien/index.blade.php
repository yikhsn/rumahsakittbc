@extends('layouts.master')

@section('title')
    <title>TBC APPS</title>
@endsection

@section('content')
    <div class="wrapper">
        <div class="container-fluid">
            
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive m-b-30">
                        <h4 class="header-title m-t-0 m-b-20" style=" font-family: segoe ui light; font-size: 35px;">Daftar Pasien</h4>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <input type="text" class="form-control" placeholder ="Cari disini...." >
                        </div>
                        <div class="col-4">
                            <button type="button" class="btn btn-success"><i class="mdi mdi-magnify"></i></button>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Cetak Tabel <i class="mdi mdi-printer"></i></button>
                            <a href="pasien/add" class="btn btn-danger"><i class="mdi mdi-plus"></i>Tambah Pasien</a>

                        </div>
                    </div>
                    <br>
                    <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th style="font-family: segoe ui light; font-size:12px; text-align: center;">ID</th>
                                <th style="font-family: segoe ui light; font-size:12px; text-align: center;">NIK</th>
                                <th style="font-family: segoe ui light; font-size:12px; text-align: center;">Nama</th>
                                <th style="font-family: segoe ui light; font-size:12px; text-align: center;">Tanggal Pendaftaran</th>
                                <th style="font-family: segoe ui light; font-size:12px; text-align: center;">Pendamping</th>
                                <th style="font-family: segoe ui light; font-size:12px; text-align: center;">Durasi Pegobatan</th>
                                <th style="font-family: segoe ui light; font-size:12px; text-align: center;">Tipe Pasien</th>
                                <th style="font-family: segoe ui light; font-size:12px; text-align: center;">Kondisi Pasien</th>
                                <th style="font-family: segoe ui light; font-size:12px; text-align: center;">Rumah Sakit</th>
                                <th style="font-family: segoe ui light; font-size:12px; text-align: center;">Evaluasi</th>
                                <th style="font-family: segoe ui light; font-size:12px; text-align: center;">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pasiens as $pasien)
                                <tr>
                                    <td style="font-family: segoe ui; font-size:13px; text-align: center;">{{ $pasien->id }}</td>
                                    <td style="font-family: segoe ui; font-size:13px; text-align: center;">{{ $pasien->nik }}</td>
                                    <td style="font-family: segoe ui; font-size:13px; text-align: center;">
                                            {{ $pasien->nama }}
                                    </td>
                                    <td style="font-family: segoe ui; font-size:13px; text-align: center;">{{ $pasien->created_at }}</td>
                                    <td style="font-family: segoe ui; font-size:13px; text-align: center;">
                                            @if(!is_null($pasien->pendamping_nik))
                                                {{ $pasien->pendamping->nama }}
                                            @endif
                                    </td>
                                    <td style="font-family: segoe ui; font-size:13px; text-align: center;">6 Bulan</td>
                                    

                                    <td style="font-family: segoe ui; font-size:13px; text-align: center;">
                                        @if(!is_null($pasien->type_id))
                                            {{ $pasien->type->type }}
                                        @endif
                                    </td>
                                    <td style="font-family: segoe ui; font-size:13px; text-align: center;">
                                        @if(!is_null($pasien->jenis_penyakit_id))
                                            {{ $pasien->jenis_penyakit->nama }}
                                        @endif
                                    </td>
                                    <td style="font-family: segoe ui; font-size:13px; text-align: center;">
                                        @if(!is_null($pasien->rumahsakit_id))
                                            {{ $pasien->rumahsakit->nama }}
                                        @endif
                                    </td>
                                    <td style="font-family: segoe ui; font-size:13px; text-align: center; background-color: #tomato; color:black;">
                                        @if(!is_null($pasien->evaluasi_id))
                                            {{ $pasien->evaluasi->nama }}
                                        @endif
                                    </td>
                                    <td style="font-family: segoe ui; font-size:20px; text-align: center;">
                                        <a href="/pasien/{{ $pasien->id }}" style="color:teal; font-weight: bold;"><i class="mdi mdi-information"></i></a>
                                        <a href="/pasien/{{ $pasien->id }}/delete" style="color:tomato; font-weight: bold;"><i class="mdi mdi-delete"></i></a>
                                        <a href="/pasien/{{ $pasien->id }}/edit" style="color:purple; font-weight: bold;"><i class="mdi mdi-tooltip-edit"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- end row -->
        </div> <!-- end container -->


        <!-- Modal Untuk Cetak Tabel -->
        
        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    
                    
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    
                    <div class="modal-body">
                        <br>
                        <center>
                        <i class="mdi mdi-printer" style="font-size: 50px;"></i>
                        <br>
                        <br>
                        <h5 style="font-family: segoe ui light;">Cetak Tabel</h5>
                        </center>
                        <hr>
                        <form class="form" role="form">
                            <div class="form-group">
                                <label>Dari Tanggal</label>
                                <div class="col-md-12">
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Hingga Tanggal</label>
                                <div class="col-md-12">
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                            <center>
                            <button  type="button" class="btn btn-danger btn-rounded">Cetak <i class="mdi mdi-printer"></i></button>
                            </center>
                            <hr>
                            <label for=""> Cetak Semua Data</label>
                            <center>
                            <button  type="button" class="btn btn-info btn-rounded">Cetak Semua Data <i class="mdi mdi-printer"></i></button>
                            </center>
                            
                        </form>
                        
                    </div>
                    </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                    
                </div>


                <!-- Modal Info Pendamping Pasien -->
                <div class="modal fade bs-example-modal-sm" tabindex="-1" id="data-pendamping" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mySmallModalLabel">Penamping Pasien</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <center>
                                <img src="assets/images/meong.png" class="img-circle" alt="Cinque Terre" width="50%" >
                                <br>
                                <br>
                                <h6 style="font-family: segoe ui light;">Ahmad Munir</h6>
                                </center>
                                <br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p>Status</p>
                                        <hr>
                                        
                                        
                                        
                                        <p>No HP</p>
                                        <hr>
                                        
                                        
                                    </div>
                                    <div class="col-md-8">
                                        <p>Anak KAndung</p>
                                        <hr>
                                        
                                        
                                        <p>083456465465</p>
                                        <hr>
                                        <br>
                                        <br>
                                        
                                        
                                    </div>
                                    
                                </div>
                                <center>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Selengkapnya <i class="mdi mdi-account"></i></button>
                                </center>
                                
                                
                            </div>
                            </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->

                                <!-- Modal Info Pasien -->
                <div class="modal fade bs-example-modal-sm" tabindex="-1" id="data-pasien" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mySmallModalLabel">Info Pasien</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <center>
                                <img src="assets/images/meong.png" class="img-circle" alt="Cinque Terre" width="50%" >
                                <br>
                                <br>
                                <h6 style="font-family: segoe ui light;">Mahmud Ali Banna</h6>
                                </center>
                                <br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <p>NIK</p>
                                        <hr>
                                        
                                        
                                        
                                        <p>TTL</p>
                                        <hr>
                                        <p>Usia</p>
                                        
                                    </div>
                                    <div class="col-md-9">
                                        <p>1256465465</p>
                                        <hr>
                                        
                                        
                                        <p>54 Tahun</p>
                                        <hr>
                                        <p>Laki-Laki</p>
                                        
                                    </div>
                                    
                                </div>
                                <center>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Selengkapnya <i class="mdi mdi-account"></i></button>
                                </center>
                                
                                
                            </div>
                            </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                            <!-- end wrapper -->
@endsection