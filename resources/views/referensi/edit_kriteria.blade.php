@extends('layouts.master')

@section('title')
    <title>TBC APPS</title>
@endsection

@section('content')
<div class="wrapper">
            <div class="container-fluid">
                <h2 style="font-family: segoe ui light;">Edit Kriteria</h2>
                <br>
                <div class="row">
                    <div class ="col-sm-8">
                        <div class="panel panel-color panel-primary" style="border-color: #a2a2a2;">
                            <div class="panel-heading">
                                <h3 class="panel-title">Kriteria Baru</h3>
                            </div>
                            <div class="panel-body">
                                
                                <form class="form-horizontal" role="form" method="post" action="/referensi/kriteria/{{ $evaluasi->id }}/update">

                                    {{ csrf_field() }}

                                    <div class="form-group">
                                        <label>Tipe Pasien</label>
                                        <div class="col-md-11">
                                            <select name="type_id" id="type_id" class="form-control" required>
                                                @foreach($types as $type)
                                                    <option {{ (isset($evaluasi->jenis_penyakit_id) && $evaluasi->jenis_penyakit->type_id == $type->id) ? "selected=\"selected\"" : "" }} value="{{ $type->id }}">
                                                        {{ $type->type }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Kondisi Pasien</label>
                                        <div class="col-md-11">
                                            <select name="jenis_penyakit_id" id="jenis_penyakit_id" class="form-control" required>
                                                @foreach($jenis_penyakits as $jenis_penyakit)
                                                    <option {{ (isset($evaluasi->jenis_penyakit_id) && $evaluasi->jenis_penyakit->id == $jenis_penyakit->id) ? "selected=\"selected\"" : "" }} value="{{ $jenis_penyakit->id }}">
                                                        {{ $jenis_penyakit->nama }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Evaluasi</label>
                                        <div class="col-md-11">
                                            <input type="text" class="form-control"
                                                value="{{ $evaluasi->nama }}"
                                                placeholder="Masukan Nama Evaluasi"
                                                name="nama" id="nama" required>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label>Kriteria Evaluasi</label>
                                        <div class="col-md-11">
                                            <textarea name="keterangan" id="keterangan" cols="30" rows="10"
                                                 class="form-control" placeholder="Masukan Kriteria" required>{{ $evaluasi->keterangan }}</textarea>
                                        </div>
                                    </div>
                                        <div class="form-group">
                                            <div class="col-md-11">
                                                <div class="text-right">
                                                    <br>
                                                    <button  type="submit" class="btn btn-danger btn-rounded">
                                                        Ubah 
                                                        <i class="mdi mdi-delete"></i>
                                                    </button>
                                                </div>
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
