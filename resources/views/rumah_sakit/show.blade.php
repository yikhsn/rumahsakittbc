@extends('layouts.master')

@section('title')
    <title>TBC APPS</title>
@endsection

@section('content')
<div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h3 style="font-family: segoe ui light;">Informasi Rumah Sakit</h3>
                        <br>
                        <br>

                        <div class="row">
                            
                            <div class="col-md-2">
                                <p style="font-family: segoe ui; font-weight: bold; padding-bottom: 2px; ">Nama Rumah Sakit</p>
                                <hr>
                                <p style="font-family: segoe ui; font-weight: bold; padding-bottom: 5px;">Nomor Telepon</p>
                                <hr>
                                <p style="font-family: segoe ui; font-weight: bold; padding-bottom: 2px;">Jumlah Pasien</p>
                                <hr>
                                <p style="font-family: segoe ui; font-weight: bold; padding-bottom: 7px;">Alamat Lengkap</p>
                                <hr>
                                <p style="font-family: segoe ui; font-weight: bold; padding-bottom: 7px;">Opsi</p>
                                <hr>                                
                            </div>

                            <div class="col-md-10">
                                <input type="text" class="form-control"
                                    value="{{ $rumahsakit->nama }}"
                                    style="border-top:0px; border-left:0px; border-right:0px;
                                        border-bottom-width: 1px;  background-color: white;
                                        border-bottom-color: #bdbdbd;"  name="alamat_lengkap" 
                                    disabled>
                                <br>
                                
                                <input type="text" class="form-control" 
                                    value="{{ $rumahsakit->no_telepon }}"
                                    style="border-top:0px; border-left:0px; border-right:0px;
                                        border-bottom-width: 1px;  background-color: white;
                                         border-bottom-color: #bdbdbd;"  name="alamat_lengkap" 
                                    disabled>
                                <br>
                                
                                <input type="text" class="form-control" 
                                    value="{{ $rumahsakit->pasiens->count() }}"
                                    style="border-top:0px; border-left:0px; border-right:0px;
                                        border-bottom-width: 1px;  background-color: white;
                                         border-bottom-color: #bdbdbd;"  name="alamat_lengkap" 
                                    disabled>
                                <br>
                                
                                <input type="text" class="form-control" 
                                    value="{{ $rumahsakit->alamat }}"
                                    style="border-top:0px; border-left:0px; border-right:0px;
                                        border-bottom-width: 1px;  background-color: white;
                                         border-bottom-color: #bdbdbd;"  name="alamat_lengkap" 
                                    disabled>
                                <br>
                                <div class="text-left">
                                    <a href="/rumahsakit/{{ $rumahsakit->id }}/edit" class="btn btn-warning">
                                        <i class="fa fa-edit"></i>
                                        Edit
                                    </a>
                                    <a href="/rumahsakit/{{ $rumahsakit->id }}/delete" class="btn btn-danger">
                                        <i class="fa fa-close"></i>
                                        Hapus
                                    </a>
                                </div>    
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <br>
                        <div class="card-box">
                            <ul class="nav nav-tabs tabs-bordered nav-justified">
                                
                                <li class="nav-item">
                                    <a href="#profile-b2" data-toggle="tab" aria-expanded="true" class="nav-link ">
                                        Pasien
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#messages-b2" data-toggle="tab" aria-expanded="false" class="nav-link">
                                        Dokter
                                    </a>
                                </li>
                                
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane" id="home-b2">
                                    <div class="row">
                                        
                                    </div>
                                </div>
                                <!-- Tab Dokter -->
                                <div class="tab-pane active" id="profile-b2">
                                    <div class="container">
                                        <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th style="font-family: segoe ui light; font-size:12px; text-align: center;">ID</th>
                                                    
                                                    <th style="font-family: segoe ui light; font-size:12px; text-align: center;">Nama</th>
                                                    <th style="font-family: segoe ui light; font-size:12px; text-align: center;">Tanggal Pendaftaran</th>
                                                    <th style="font-family: segoe ui light; font-size:12px; text-align: center;">Pendamping</th>
                                                    <th style="font-family: segoe ui light; font-size:12px; text-align: center;">Dokter</th>
                                                    <th style="font-family: segoe ui light; font-size:12px; text-align: center;">Durasi Pegobatan</th>
                                                    <th style="font-family: segoe ui light; font-size:12px; text-align: center;">Tipe Pasien</th>
                                                    <th style="font-family: segoe ui light; font-size:12px; text-align: center;">Kondisi Pasien</th>
                                                    <th style="font-family: segoe ui light; font-size:12px; text-align: center;">Evaluasi</th>
                                                    <th style="font-family: segoe ui light; font-size:12px; text-align: center;">Opsi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($rumahsakit->pasiens as $pasien)
                                                <tr>
                                                    <td style="font-family: segoe ui; font-size:13px; text-align: center;">
                                                        {{ $pasien->id }}
                                                    </td>
                                                    <td style="font-family: segoe ui; font-size:13px; text-align: center;">
                                                        <a href="/pasien/{{ $pasien->id }}">
                                                            {{ $pasien->nama }}
                                                        </a>
                                                    </td>
                                                    <td style="font-family: segoe ui; font-size:13px; text-align: center;">
                                                        {{ $pasien->created_at }}    
                                                    </td>
                                                    <td style="font-family: segoe ui; font-size:13px; text-align: center;">
                                                        {{ $pasien->pendamping->nama }}
                                                    </td>
                                                    <td style="font-family: segoe ui; font-size:13px; text-align: center;">
                                                        <a href="/dokter/{{ $pasien->dokter->id }}">
                                                            {{ $pasien->dokter->nama }}
                                                        </a>
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
                                                    <td style="font-family: segoe ui; font-size:15px; text-align: center;">
                                                        <a href="/pasien/{{ $pasien->id }}" style="color:teal;">
                                                            <i class="fa fa-info"></i>
                                                        </a> |
                                                        <a href="/pasien/{{ $pasien->id }}/edit" style="color:orange;">
                                                            <i class="fa fa-edit"></i>
                                                        </a> |
                                                        <a href="/pasien/{{ $pasien->id }}/delete" style="color:tomato;">
                                                            <i class="fa fa-close"></i>
                                                        </a> |
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="tab-pane" id="messages-b2">
                                    <div class="container">
                                        <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th style="font-family: segoe ui light; font-size:12px; text-align: center;">ID</th>
                                                    <th style="font-family: segoe ui light; font-size:12px; text-align: center;">Nama Dokter</th>
                                                    <th style="font-family: segoe ui light; font-size:12px; text-align: center;">Alamat</th>
                                                    <th style="font-family: segoe ui light; font-size:12px; text-align: center;">Jumlah Pasien</th>
                                                    <th style="font-family: segoe ui light; font-size:12px; text-align: center;">Opsi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($rumahsakit->dokters as $dokter)
                                                <tr>
                                                    <td style="font-family: segoe ui; font-size:13px; text-align: center;">
                                                        {{ $dokter->id }}
                                                    </td>
                                                    <td style="font-family: segoe ui; font-size:13px; text-align: center;">
                                                        <a href="/dokter/{{ $dokter->id }}">
                                                            {{ $dokter->nama }}
                                                        </a>
                                                    </td>
                                                    <td style="font-family: segoe ui; font-size:13px; text-align: center;">
                                                        {{ $dokter->alamat }}
                                                    </td>
                                                    <td style="font-family: segoe ui; font-size:13px; text-align: center;">
                                                        <a href="/dokter">
                                                            {{ $dokter->pasiens->count() }}
                                                        </a>
                                                    </td>
                                                    <td style="font-family: segoe ui; font-size:15px; text-align: center;">
                                                        <a href="/dokter/{{ $dokter->id }}" style="color:teal;">
                                                            <i class="fa fa-info"></i>
                                                        </a> |
                                                        <a href="/dokter/{{ $dokter->id }}/edit" style="color:orange;">
                                                            <i class="fa fa-edit"></i>
                                                        </a> |
                                                        <a href="/dokter/{{ $dokter->id }}/delete" style="color:tomato;">
                                                            <i class="fa fa-close"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                            </div>
                        </div>
                        </div> <!-- end col -->
                    </div>
                </div>
                
            </div>   
        </div>
        <!-- end wrapper -->
@endsection       
