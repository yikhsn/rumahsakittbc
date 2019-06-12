@extends('layouts.master')

@section('title')
    <title>TBC APPS</title>
@endsection

@section('content')
        <div class="wrapper">
            <div class="container-fluid">
                <h2 style="font-family: segoe ui light;">Daftar Pasien Baru</h2>
                <br>

                <div clas="container">
                    <div  class="row">
                        <div class="col-lg-11">
                            <div class="panel panel-color panel-primary" style="border-color: #a2a2a2;">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Langkah 3 : Pilih Kriteria Evaluasi dan Rencana Pengobatan</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="col-11">
                                        <form action="/pasien/old/kriteria_store" method="post" class="form-horizontal">
                                            
                                            {{ csrf_field() }}
                                            
                                            <div class="form-group">
                                                <label for="rumah_sakit_id">Rumah Sakit</label>
                                                <div class="col-md-11">
                                                    <select class="form-control" 
                                                        id="rumah_sakit_id" name="rumahsakit_id">
                                                        @foreach($rumahsakits as $rumahsakit)
                                                            <option 
                                                            {{ (isset($pasien->rumahsakit_id) && $pasien->rumahsakit_id == $rumahsakit->id) ? "selected=\"selected\"" : "" }}
                                                                value="{{ $rumahsakit->id }}">
                                                                {{ $rumahsakit->nama }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="dokter_id">Pilih Dokter</label>
                                                <div class="col-md-11">
                                                    <select class="form-control" 
                                                        id="dokter_id" name="dokter_id">
                                                        @foreach($dokters as $dokter)
                                                            <option 
                                                                {{ (isset($pasien->dokter_id) && $pasien->dokter_id == $dokter->id) ? "selected=\"selected\"" : "" }}
                                                                value="{{ $dokter->id }}">
                                                                {{ $dokter->nama }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            
                                            <div class="form-group">
                                                <div class="col-md-11">
                                                    <label for="jenis_penyakit_id">Tipe Pasien</label>
                                                    <select  id="" class="form-control" name="jenis_penyakit_id">
                                                        @foreach($jenis_penyakits as $jenis_penyakit)
                                                            <option 
                                                                {{ (isset($pasien->jenis_penyakit_id) && $pasien->jenis_penyakit_id == $jenis_penyakit->id) ? "selected=\"selected\"" : "" }}
                                                                value="{{ $jenis_penyakit->id }}">
                                                                {{ $jenis_penyakit->nama }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-md-11">
                                                    <label for="evaluasi_id">Evaluasi</label>
                                                    <select id="" class="form-control" name="evaluasi_id">
                                                        @foreach($evaluasis as $evaluasi)
                                                            <option 
                                                                {{ (isset($pasien->evaluasi_id) && $pasien->evaluasi_id == $evaluasi->id) ? "selected=\"selected\"" : "" }}
                                                                value="{{ $evaluasi->id }}">
                                                                {{ $evaluasi->nama }} - {{ $evaluasi->jenis_penyakit->nama }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-11">
                                                    <div class="text-right">
                                                        <br>
                                                        <br>
                                                        <button  type="submit" class="btn btn-danger btn-rounded">
                                                            Selanjutnya
                                                            <i class="mdi mdi-arrow-right-bold"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                        
                    </div>
                    <!-- End Footer -->
                </div>
                <!-- end wrapper -->
@endsection