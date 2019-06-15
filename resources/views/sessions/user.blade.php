@extends('layouts.master')

@section('title')
    <title>TBC APPS</title>
@endsection

@section('content')

<div class="wrapper">
            <div class="container-fluid">
                
                <div class="row">
                    <div class="col-12">
                        <!-- Ini button yang ditambahkan pada tanggal 22 May 2019 -->

                        <div class="table-responsive m-b-30">
                            <h4 class="header-title m-t-0 m-b-20" style=" font-family: segoe ui light; font-size: 35px;">Daftar User</h4>
                        </div>
                        <!-- Ini button yang ditambahkan pada tanggal 22 May 2019 -->
                        <div class="text-right">
                            <a href="/register" class="btn btn-primary"><i class="mdi mdi-plus"></i>Tambah User</a>
                        </div>
                        <br>
                        <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th style="font-family: segoe ui light; font-size:12px; text-align: center;">#</th>
                                    <th style="font-family: segoe ui light; font-size:12px; text-align: center;">Nama</th>
                                    <th style="font-family: segoe ui light; font-size:12px; text-align: center;">E Mail</th>
                                    <th style="font-family: segoe ui light; font-size:12px; text-align: center;">Password</th>
                                    <th style="font-family: segoe ui light; font-size:12px; text-align: center;">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td style="font-family: segoe ui; font-size:13px; text-align: center;"> {{ $number += 1 }}</td>
                                        <td style="font-family: segoe ui; font-size:13px; text-align: center;">{{ $user->name }}</td>
                                        <td style="font-family: segoe ui; font-size:13px; text-align: center;">{{ $user->email }}</td>
                                        <td style="font-family: segoe ui; font-size:13px; text-align: center;">****</td>
                                        <td style="font-family: segoe ui; font-size:13px; text-align: center;">
                                            <a href="/daftar-user/{{ $user->id }}/delete" style="color:tomato; font-weight: bold;">Hapus</a>
                                            <a href="/daftar-user/{{ $user->id }}/edit" style="color:purple; font-weight: bold;"> | Ubah Password</a>
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
@endsection