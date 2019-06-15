@extends('layouts.master')

@section('title')
    <title>TBC APPS</title>
@endsection

@section('content')
    <div class="wrapper">
                <div class="container-fluid">
                    <h2 style="font-family: segoe ui light;">Ubah Password</h2>
                    <br>
                    <div class="row">
                        <div class ="col-sm-8">
                            <div class="panel panel-color panel-primary" style="border-color: #a2a2a2;">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Password</h3>
                                </div>
                                <div class="panel-body">
                                    
                                    <form class="form-horizontal" role="form" method="post" action="/daftar-user/{{ $user->id }}/update">
                                        {{ csrf_field() }}

                                        <div class="form-group">
                                            <label for="password">Password Baru</label>
                                            <div class="col-md-12">
                                                <input type="password" class="form-control"
                                                    placeholder ="Masukan Password" 
                                                    name="password" id="password" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="password_confirmation">Ulangi Password Baru</label>
                                            <div class="col-md-12">
                                                <input type="password" class="form-control" 
                                                    placeholder ="Ketik Ulang Password" 
                                                    name="password_confirmation" id="password_confirmation" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <div class="text-right">
                                                    <button  type="submit" class="btn btn-warning btn-rounded">Simpan <i class=" mdi mdi-content-save"></i></button>
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