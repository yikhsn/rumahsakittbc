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
                            <h4 class="header-title m-t-0 m-b-20" style=" font-family: segoe ui light; font-size: 35px;">Daftar Dokter</h4>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <input type="text" class="form-control" placeholder ="Cari..." >
                            </div>
                            <div class="col-4">
                                <button type="button" class="btn btn-success"><i class="mdi mdi-magnify"></i></button>
                                <a href="/dokter/add" class="btn btn-danger"><i class="mdi mdi-plus"></i>Tambah Dokter</a>
                            </div>
                        </div>
                        <br>
                        <!-- Ini button yang ditambahkan pada tanggal 22 May 2019 -->
                        
                        <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th style="font-family: segoe ui light; font-size:12px; text-align: center;">#</th>
                                    <th style="font-family: segoe ui light; font-size:12px; text-align: center;">Nama Dokter</th>
                                    <th style="font-family: segoe ui light; font-size:12px; text-align: center;">Rumah Sakit</th>
                                    <th style="font-family: segoe ui light; font-size:12px; text-align: center;">Jumlah Pasien</th>
                                    <th style="font-family: segoe ui light; font-size:12px; text-align: center;">Opsi</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($dokters as $dokter)
                                <tr>
                                    <td style="font-family: segoe ui; font-size:13px; text-align: center;">{{ $dokter->id }}</td>
                                    <td style="font-family: segoe ui; font-size:13px; text-align: center;">{{ $dokter->nama }}</td>
                                    <td style="font-family: segoe ui; font-size:13px; text-align: center;">{{ $dokter->rumahsakit->nama }}</td>
                                    <td style="font-family: segoe ui; font-size:13px; text-align: center;">
                                        {{ $dokter->pasiens->count() }}
                                    </td>
                                    
                                    <td style="font-family: segoe ui; font-size:13px; text-align: center;">
                                        <a href="/dokter/{{ $dokter->id }}" style="color:teal; font-weight: bold;">Info</a>
                                        <a href="/dokter/{{ $dokter->id }}/delete" style="color:tomato; font-weight: bold;"> | Hapus</a>
                                        <a href="/dokter/{{ $dokter->id }}/edit" style="color:purple; font-weight: bold;"> | Edit</a>
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
            
        </div>
        
   
    </div>
<!-- end wrapper -->
@endsection