@extends('layouts.master')

@section('title')
    <title>TBC APPS</title>
@endsection

@section('content')
<div class="wrapper">
            <div class="container-fluid">
                <h2 style="font-family: segoe ui light;">Kriteria Pasien</h2>
                <br>

                <div class="text-right">
                    <a href="/referensi/kriteria/add" class="btn btn-primary"><i class="mdi mdi-plus"></i>Tambah Kriteria</a>
                </div>
                <br>
                <div clas="container">
                    <div  class="row">

                        <div class="table">
                            <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <th>ID</th>
                                    <th>Tipe Pasien</th>
                                    <th>Kategori</th>
                                    <th>Evaluasi</th>
                                    <th>Kriteria Evaluasi</th>
                                    <th style="width:150px;">Opsi</th>
                                </thead>
                                <tbody>
                                    @foreach($evaluasis as $evaluasi)
                                    <tr>
                                        <td>
                                            {{ $evaluasi->id }}
                                        </td>
                                        <td>
                                            {{ $evaluasi->jenis_penyakit->type->type }}
                                        </td>
                                        <td>
                                            {{ $evaluasi->jenis_penyakit->nama }}
                                        </td>
                                        <td>
                                            {{ $evaluasi->nama }}
                                        </td>
                                        <td>
                                            {{ $evaluasi->keterangan }}                                        
                                        </td>
                                        <td>
                                            <a href="/referensi/kriteria/{{ $evaluasi->id }}/edit" style="color:teal;"><i class="fa fa-edit" style="color:teal;"></i> Edit</a>
                                            <a href="/referensi/kriteria/{{ $evaluasi->id }}/delete" style="color:tomato;"> | <i class="fa fa-close" style="color:tomato;"></i> Hapus</a>
                                        </td>
                                    </tr>
                                   @endforeach                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- end wrapper -->
@endsection
