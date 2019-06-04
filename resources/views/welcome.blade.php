@extends('layouts.master')

@section('title')
    <title>TBC APPS</title>
@endsection

@section('content')
    <div class="wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <h4 class="header-title m-t-0 m-b-20" style=" font-family: segoe ui light; font-size: 35px;">Selamat Datang</h4>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-4">
                    <div class="card-box">
                        <a href="/pasien" class="btn btn-sm btn-danger pull-right">Selengkapnya</a>
                        <h5 style="font-family: segoe ui light; " >Pasien Baru</h5>
                        <h3 style="  font-family: segoe ui light; font-size: 35px;" class="m-b-20 mt-3" ><span>{{ $jumlah_pasien_baru }}</span></h3>
                        <h5 style="font-family: segoe ui light; " >Pasien Pengobatan Ulang</h6>
                        <h3 style="  font-family: segoe ui light; font-size: 35px;" class="m-b-20 mt-3" ><span>{{ $jumlah_pasien_lama }}</span></h3>
                        <h5 style="font-family: segoe ui light; ">Jumlah Rumah Sakit</h6>
                        <h3 style="  font-family: segoe ui light; font-size: 35px;" class="m-b-20 mt-3" ><span>{{ $jumlah_rumah_sakit }}</span></h3>
                        
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card-box" style="width: 800px;">
                        <h6 class="m-t-0">Jumlah Pasien</h6>
                        <div class="text-center">
                            <ul class="list-inline chart-detail-list">
                                <li class="list-inline-item">
                                    <p class="font-weight-bold"><i class="fa fa-circle m-r-10 text-primary"></i>Pasien Baru</p>
                                </li>
                                <li class="list-inline-item">
                                    <p class="font-weight-bold"><i class="fa fa-circle m-r-10 text-info"></i>Pasien Pengobatan Ulang</p>
                                </li>
                            </ul>
                        </div>
                        <div id="dashboard-line-chart" style="height: 225px;"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->                  

            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <h6 class="m-t-0">Daftar Pasien</h6>
                        <div class="table-responsive">
                            <table class="table table-hover mails m-0 table table-actions-bar">
                                <thead>
                                    <tr>                                    
                                        <th>#</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Tipe</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($pasiens as $pasien)
                                        <tr>
                                            <td>{{ $pasien->id }}</td>
                                            <td>{{ $pasien->nik }}</td>
                                            <td>{{ $pasien->nama }}</td>
                                            <td>
                                                @if(!is_null($pasien->type_id))
                                                    {{ $pasien->type->type }}
                                                @endif
                                            </td>
                                            <td>
                                                <a href="/pasien/{{ $pasien->id }}"><i class="fa fa-info"></i> | </a>
                                                <a href="/pasien/{{ $pasien->id }}/edit"><i class="fa fa-edit"></i> | </a>
                                                <a href="/pasien/{{ $pasien->id }}/delete"><i class="fa fa-trash"></i> | </a>
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
        <!-- end container -->

    </div>
    <!-- end wrapper -->
@endsection