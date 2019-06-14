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
                        <h4 class="header-title m-t-0 m-b-20" style=" font-family: segoe ui light; font-size: 35px;">Daftar Rumah Sakit</h4>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <input type="text" class="form-control searchBoxRumahSakit" placeholder ="Cari...">
                        </div>
                        <div class="col-4">
                            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Cetak Tabel <i class="mdi mdi-printer"></i></button> -->
                            <a href="rumahsakit/add" class="btn btn-danger"><i class="mdi mdi-plus"></i>Tambah Rumah Sakit</a>
                        </div>
                    </div>
                    <br>
                    <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th style="font-family: segoe ui light; font-size:12px; text-align: center;">#</th>
                                <th style="font-family: segoe ui light; font-size:12px; text-align: center;">Nama Rumah Sakit</th>
                                <th style="font-family: segoe ui light; font-size:12px; text-align: center;">Alamat</th>
                                <th style="font-family: segoe ui light; font-size:12px; text-align: center;">Jumlah Pasien</th>
                                <th style="font-family: segoe ui light; font-size:12px; text-align: center;">Opsi</th>
                                
                            </tr>
                        </thead>
                        <tbody class="searchRumahSakitRes">
                            @foreach($rumahsakits as $rumahsakit)
                                <tr>
                                    <td style="font-family: segoe ui; font-size:13px; text-align: center;">{{ $number += 1 }}</td>
                                    <td style="font-family: segoe ui; font-size:13px; text-align: center;">{{ $rumahsakit->nama }}</td>
                                    <td style="font-family: segoe ui; font-size:13px;">
                                        {{ $rumahsakit->alamat }},
                                        {{ $rumahsakit->kecamatan->name  }},
                                        {{ $rumahsakit->kecamatan->kabupaten->name  }},
                                        {{ $rumahsakit->kecamatan->kabupaten->provinsi->name }}
                                    </td>
                                    <td style="font-family: segoe ui; font-size:13px; text-align: center;">
                                            {{ $rumahsakit->pasiens->count() }}    
                                    </td>
                                    <td style="font-family: segoe ui; font-size:13px; text-align: center;">
                                        <a href="/rumahsakit/{{ $rumahsakit->id }}" style="color:teal; font-weight: bold;">Info</a>
                                        <a href="/rumahsakit/{{ $rumahsakit->id }}/delete" style="color:tomato; font-weight: bold;"> | Hapus</a>
                                        <a href="/rumahsakit/{{ $rumahsakit->id }}/edit" style="color:purple; font-weight: bold;"> | Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- PAGINATION LINKS -->
                    {{ $rumahsakits->links() }}

                </div>
            </div>
        </div>
        <!-- end row -->
    </div> <!-- end container -->
        
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

                
    <!-- Modal Jumlah Pasien -->
    <div class="modal fade bs-example-modal-sm" tabindex="-1" id="datapasien" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mySmallModalLabel">Jumlah Pasien</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <center>
                    <i class="mdi mdi-account-multiple-outline" style="font-size:100px;"></i>
                    <br>
                    <h6 style="font-family: segoe ui light;">Pasien</h6>
                    <p>100 Orang</p>
                    </center>
                    <div class="row">
                        <div class="col-md-6">
                            
                            <center>
                            <i class="mdi mdi-gender-female" style="font-size:50px; color:pink;"></i>
                            <br>
                            <h6 style="font-family: segoe ui light;">Perempuan</h6>
                            <p>50 Orang</p>
                            </center>
                            
                        </div>
                        <div class="col-md-6">
                            <center>
                            <i class="mdi mdi-gender-male" style="font-size:50px; color:#0099cc;"></i>
                            <br>
                            <h6 style="font-family: segoe ui light;">Laki Laki</h6>
                            <p>50 Orang</p>
                            </center>
                            
                        </div>
                    </div>
                    
                    
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div><!-- end wrapper -->
<script src="{{ URL::asset('js/app.js') }}"></script>                           

@endsection       
