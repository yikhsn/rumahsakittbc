@extends('layouts.master')

@section('title')
    <title>TBC APPS</title>
@endsection

@section('content')
<div class="wrapper">
<div class="container-fluid">
    <h2 style="font-family: segoe ui light;">Daftar Pasien Baru</h2>
    <br>

    @if ($errors->any())
        <div class="row">
            <div class ="col-sm-11">
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif

    <div class="row">
        <div class ="col-sm-11">
            <div class="panel panel-color panel-danger" style="border-color: #a2a2a2;">
                <div class="panel-heading">
                    <h3 class="panel-title">Langkah 2 : Riwayat Kesehatan Pasien Baru</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="post" action="/pasien/new/riwayat_store">
                        
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="hasil_sputum">Hasil Pemeriksaan Sputum</label>
                            <div class="col-md-10">
                                <select class="form-control" name="hasil_sputum" id="hasil_sputum">
                                    <option {{ (isset($pasien->hasil_sputum) && $pasien->hasil_sputum == 'Positif') ? "selected=\"selected\"" : "" }} value="Positif">Positif</option>
                                    <option {{ (isset($pasien->hasil_sputum) && $pasien->hasil_sputum == 'Negatif') ? "selected=\"selected\"" : "" }} value="Negatif">Negatif</option>
                                </select>
                            </div> 
                        </div>

                        <div class="form-group">
                            <label for="jumlah_sputum">Jumlah Spesimen Sputum Hasil Pemeriksaan</label>
                            <div class="col-md-10">
                                <input type="number" class="form-control" 
                                    value="{{ (isset( $pasien->jumlah_sputum )) ? $pasien->jumlah_sputum : '' }}"
                                    placeholder="Jumlah Spesimen Sputum Hasil Pemeriksaan" 
                                    id="jumlah_sputum" name="jumlah_sputum">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pengobatan_satu_bulan">Riwayat Pengobatan Dibawah Satu Bulan</label>
                            <div class="col-md-10">
                                <select class="form-control" name="pengobatan_satu_bulan" id="pengobatan_satu_bulan">
                                    <option {{ (isset($pasien->pengobatan_satu_bulan) && $pasien->pengobatan_satu_bulan == 'Pernah') ? "selected=\"selected\"" : "" }} value="Pernah">Pernah</option>
                                    <option {{ (isset($pasien->pengobatan_satu_bulan) && $pasien->pengobatan_satu_bulan == 'Belum') ? "selected=\"selected\"" : "" }} value="Belum">Belum</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="catatan_kesehatan">Catatan Kesehatan:</label>
                            <div class="col-md-10">
                                <textarea class="form-control" rows="5" 
                                    placeholder="Catatan Kesehatan dan Riwayat Pasien, Termasuk Informasi khusus seputar Alergi, Penanganan Khusus, Penyakit Bawaan, DLL" 
                                    name="catatan_kesehatan" id="catatan_kesehatan">{{ (isset( $pasien->catatan_kesehatan )) ? $pasien->catatan_kesehatan : '' }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-10">
                                <div class="text-right">
                                    <br>
                                    <button class="btn btn-warning btn-rounded" type="submit">Selanjutnya</button>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection