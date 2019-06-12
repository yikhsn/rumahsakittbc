@extends('layouts.master')

@section('title')
    <title>TBC APPS</title>
@endsection

@section('content')
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h3 style="font-family: segoe ui light;">Informasi Dokter</h3>
                        <br>
                        <br>
                        
                        <div class="row">
                            <div class="col-md-2">
                                <p style="font-family: segoe ui; font-weight: bold; padding-bottom: 2px;">
                                    Nama Dokter
                                </p>
                                <hr>
                                
                                <p style="font-family: segoe ui; font-weight: bold; padding-bottom: 2px;">
                                    Jumlah Pasien
                                </p>
                                <hr>
                                
                                <p style="font-family: segoe ui; font-weight: bold; padding-bottom: 5px;">
                                    Nomor Telepon
                                </p>
                                <hr>

                                <p style="font-family: segoe ui; font-weight: bold; padding-bottom: 7px;">
                                    Alamat Lengkap
                                </p>
                                <hr>
                            </div>

                            <div class="col-md-10">
                                <input type="text" class="form-control"
                                    value="{{ $dokter->nama }}"
                                    style="border-top:0px; border-left:0px; border-right:0px; 
                                        border-bottom-width: 1px;  background-color: white;
                                        border-bottom-color: #bdbdbd;"
                                    name="alamat_lengkap" disabled>
                                <br>
                                
                                <input type="text" class="form-control"
                                    value="{{ $dokter->pasiens->count() }}"
                                    style="border-top:0px; border-left:0px;border-right:0px; 
                                        border-bottom-width: 1px;  background-color: white;  
                                        border-bottom-color: #bdbdbd;"
                                    name="alamat_lengkap" disabled>
                                <br>
                                
                                <input type="text" class="form-control"
                                    value="{{ $dokter->no_telepon }}"
                                    style="border-top:0px;border-left:0px; border-right:0px;
                                        border-bottom-width: 1px;  background-color: white;
                                        border-bottom-color: #bdbdbd;" 
                                    name="alamat_lengkap" disabled>
                                <br>
                                
                                <input type="text" class="form-control" 
                                    value="{{ $dokter->alamat }}"
                                    style="border-top:0px; border-left:0px; border-right:0px;
                                        border-bottom-width: 1px;  background-color: white;
                                        border-bottom-color: #bdbdbd;" 
                                    name="alamat_lengkap"  disabled="">
                                <br>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <hr>
                        <center>
                        <h6>Daftar Pasien</h6>
                        <hr>
                        <br>
                        </center>
                        
                        <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th style="font-family: segoe ui light; font-size:12px; text-align: center;">ID</th>
                                    <th style="font-family: segoe ui light; font-size:12px; text-align: center;">Nama</th>
                                    <th style="font-family: segoe ui light; font-size:12px; text-align: center;">Tanggal Pendaftaran</th>
                                    <th style="font-family: segoe ui light; font-size:12px; text-align: center;">Pendamping</th>
                                    <th style="font-family: segoe ui light; font-size:12px; text-align: center;">Durasi Pegobatan</th>
                                    <th style="font-family: segoe ui light; font-size:12px; text-align: center;">Tipe Pasien</th>
                                    <th style="font-family: segoe ui light; font-size:12px; text-align: center;">Kondisi Pasien</th>
                                    <th style="font-family: segoe ui light; font-size:12px; text-align: center;">Evaluasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($dokter->pasiens as $pasien)
                                <tr>
                                    <td style="font-family: segoe ui; font-size:13px; text-align: center;">
                                        {{ $pasien->id }}
                                    </td>

                                    <td style="font-family: segoe ui; font-size:13px; text-align: center;">
                                        <a href="info-pasien.php">
                                            {{ $pasien->nama }}
                                        </a>
                                    </td>

                                    <td style="font-family: segoe ui; font-size:13px; text-align: center;">
                                        {{ date('m-d-Y', strtotime($pasien->created_at)) }}
                                    </td>

                                    <td style="font-family: segoe ui; font-size:13px; text-align: center;">
                                        {{ $pasien->pendamping->nama }}
                                    </td>

                                    <td style="font-family: segoe ui; font-size:13px; text-align: center;">
                                        6 Bulan
                                    </td>

                                    <td style="font-family: segoe ui; font-size:13px; text-align: center;">
                                        {{ $pasien->type->type }}
                                    </td>

                                    <td style="font-family: segoe ui; font-size:13px; text-align: center;">
                                        {{ $pasien->jenis_penyakit->nama }}
                                    </td>
                                    
                                    <td style="font-family: segoe ui; font-size:13px; text-align: center;">
                                        {{ $pasien->evaluasi->nama }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>
    
    <div class="modal fade hapus_dokter" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mySmallModalLabel">Hapus Dokter</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <center>
                        <i class="fa fa-close" style="color:tomato; font-size: 50px;"></i>
                        <br>
                        <p>Apakah Anda Akan Menghapus Dokter Ini ?</p>
                    </center>
                    <br>
                    <div class="text-right">
                        <button class="btn btn-primary" class="close" data-dismiss="modal" aria-hidden="true"><i class="mdi mdi-arrow-left-bold"></i> kembali</button>
                        <button class="btn btn-danger" ><i class="mdi mdi-close"></i> Hapus</button>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- end wrapper -->
@endsection