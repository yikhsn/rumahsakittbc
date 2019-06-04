@extends('layouts.master')

@section('title')
    <title>TBC APPS</title>
@endsection

@section('content')
<div class="wrapper">
            <div class="container-fluid">
                <h2 style="font-family: segoe ui light;">Daftar User Baru</h2>
                <br>
                <div class="row">
                    <div class ="col-sm-8">
                        <div class="panel panel-color panel-primary" style="border-color: #a2a2a2;">
                            <div class="panel-heading">
                                <h3 class="panel-title">Informasi User</h3>
                            </div>
                            <div class="panel-body">
                                
                                <form class="form-horizontal" role="form" method="post" action="/register">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="name">Nama Lengkap</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" 
                                                placeholder="Masukan Nama" 
                                                name="name" id="name" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">E-mail</label>
                                        <div class="col-md-12">
                                            <input type="email" class="form-control"
                                                placeholder ="Masukan E-mail" 
                                                name="email" id="email" required >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <div class="col-md-12">
                                            <input type="password" class="form-control"
                                                placeholder ="Masukan Password" 
                                                name="password" id="password" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password_confirmation">Ulang Password</label>
                                        <div class="col-md-12">
                                            <input type="password" class="form-control" 
                                                placeholder ="Ketik Ulang Password" 
                                                name="password_confirmation" id="password_confirmation" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="text-right">
                                                <button  type="submit" class="btn btn-warning btn-rounded">Selanjutnya <i class=" mdi mdi-content-save"></i></button>
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