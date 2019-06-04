@extends('layouts.master')

@section('title')
    <title>TBC APPS</title>
@endsection

@section('content')
        <div class="wrapper">
            <div class="container-fluid">
                <h2 style="font-family: segoe ui light;">Daftar Pasien Baru</h2>
                <br>
                <div class="row">
                    <div class ="col-sm-10">
                        <div class="panel panel-color panel-success" style="border-color: #a2a2a2;">
                            <div class="panel-heading">
                                <h3 class="panel-title">Langkah 1 : Idenditas Pasien</h3>
                            </div>
                            <div class="panel-body">
                                
                                <form class="form-horizontal" role="form" method="post" action="/pasien/new/store">
                                    
                                    {{ csrf_field() }}
                                    
                                    <input type="hidden" value="1"
                                        name="type_id" id="type_id" required>


                                    <div class="form-group">
                                        <label for="nik">NIK</label>
                                        <div class="col-md-10">
                                            <input type="number" class="form-control" 
                                                value="{{ (isset( $pasien->nik )) ? $pasien->nik : '' }}" 
                                                placeholder="Nomor NIK Pasien" 
                                                name="nik" id="nik" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="nama">Nama Lengkap</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" 
                                                value="{{ (isset( $pasien->nama )) ? $pasien->nama : '' }}" 
                                                placeholder ="Nama Lengkap Pasien" 
                                                name="nama" id="nama" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="tempat_lahir">Tempat Lahir</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" 
                                                value="{{ (isset( $pasien->tempat_lahir )) ? $pasien->tempat_lahir : '' }}"
                                                placeholder ="Tempat Lahir Pasien"  
                                                name="tempat_lahir" id="tempat_lahir" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="tanggal_lahir">Tanggal Lahir</label>
                                        <div class="col-md-10">
                                            <input type="date" class="form-control"
                                                value="{{ (isset( $pasien->tanggal_lahir )) ? $pasien->tanggal_lahir : '' }}"
                                                placeholder ="Tanggal Lahir Pasien"
                                                name="tanggal_lahir" id="tanggal_lahir" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <div class="col-md-10">
                                            <select class="form-control"  name="jenis_kelamin" id="jenis_kelamin" required>
                                                <option {{ (isset($pasien->jenis_kelamin) && $pasien->jenis_kelamin == 'Laki-laki') ? "selected=\"selected\"" : "" }} value="Laki-laki">Laki-laki</option>
                                                <option {{ (isset($pasien->jenis_kelamin) && $pasien->jenis_kelamin == 'Perempuan') ? "selected=\"selected\"" : "" }} value ="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="no_telepon">Nomor Telepon</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" 
                                            value="{{ (isset( $pasien->no_telepon )) ? $pasien->no_telepon : '' }}"
                                            placeholder="Nomor Telepon Yang Bisa Dihubungi"
                                            name="no_telepon" id="no_telepon" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" 
                                                value="{{ (isset( $pasien->email )) ? $pasien->email : '' }}"
                                                placeholder="E-Mail Aktif (Opsional)"
                                                name="email" id="email" required>
                                        </div>
                                    </div>

                                    <!-- Belum di hash -->
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <div class="col-md-10">
                                            <input type="password" class="form-control"
                                                value="{{ (isset( $pasien->password )) ? $pasien->password : '' }}"
                                                placeholder="Password" 
                                                name="password" id="password" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="agama">Agama</label>
                                        <div class="col-md-10">
                                            <select class="form-control"  name="agama" id="agama" required>
                                                <option {{ (isset($pasien->agama) && $pasien->agama == 'Islam') ? "selected=\"selected\"" : "" }} value="Islam">Islam</option>
                                                <option {{ (isset($pasien->agama) && $pasien->agama == 'Kristen') ? "selected=\"selected\"" : "" }} value="Kristen">Kristen</option>
                                                <option {{ (isset($pasien->agama) && $pasien->agama == 'Katolik') ? "selected=\"selected\"" : "" }} value="Katolik">Katolik</option>
                                                <option {{ (isset($pasien->agama) && $pasien->agama == 'Hindu') ? "selected=\"selected\"" : "" }} value="Hindu">Hindu</option>
                                                <option {{ (isset($pasien->agama) && $pasien->agama == 'Budha') ? "selected=\"selected\"" : "" }} value="Budha">Budha</option>
                                                <option {{ (isset($pasien->agama) && $pasien->agama == 'Konghucu') ? "selected=\"selected\"" : "" }} value="Konghucu">Konghucu</option>
                                                <option {{ (isset($pasien->agama) && $pasien->agama == 'Lainnya') ? "selected=\"selected\"" : "" }} value="Lainnya">Lainnya</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <div class ="container">
                                            <div class ="row">
                                            
                                            <!-- session in form is not work yet -->
                                                <div class ="col-md-3">
                                                    <select class="form-control" required>
                                                        @foreach($provinsis as $provinsi)
                                                            <option {{ (isset($pasien->kecamatan) && $pasien->kecamatan->kabupaten->provinsi_id == $provinsi->id) ? "selected=\"selected\"" : "" }} value="{{ $provinsi->id }}">{{ $provinsi->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <!-- session in form is not work yet -->
                                                <div class ="col-md-3">
                                                    <select class="form-control" required>
                                                        @foreach($kabupatens as $kabupaten)
                                                            <option {{ (isset($pasien->kecamatan) && $pasien->kecamatan->kabupaten_id == $kabupaten->id) ? "selected=\"selected\"" : "" }} value="{{ $kabupaten->id }}">{{ $kabupaten->name }}</option>
                                                        @endforeach                 
                                                    </select>
                                                </div>

                                                <div class ="col-md-3">
                                                    <select name="kecamatan_id" id="kecamatan_id" class="form-control" required>
                                                        @foreach($kecamatans as $kecamatan)
                                                            <option {{ (isset($pasien->kecamatan) && $pasien->kecamatan_id == $kecamatan->id) ? "selected=\"selected\"" : "" }} value="{{ $kecamatan->id }}">{{ $kecamatan->name }}</option>
                                                        @endforeach                 
                                                    </select>
                                                </div>

                                            </div>                                                
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Alamat Kediaman</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control"  rows="5" placeholder="RT/RW/Jalan" name="alamat" id="alamat" required>
                                                {{ (isset( $pasien->alamat )) ? $pasien->alamat : '' }}
                                            </textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-10">
                                            <div class="text-right">
                                                <br>
                                                <br>
                                                <!-- <button  type="button" class="btn btn-danger btn-rounded">Hapus <i class="mdi mdi-delete"></i></button>
                                                <button  type="button" class="btn btn-warning btn-rounded">Selanjutnya <i class="mdi mdi-arrow-right-bold"></i></button>
                                                <br> -->
                                                <a href="pasien-pengobatan-ulang.php"  class="btn btn-danger btn-rounded"> Daftar Sebagai Pasien Pengobatan Ulang</a>
                                                <button class="btn btn-warning btn-rounded" type="submit">Daftar Sebagai Pasien Baru</button>
                                            </div>
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




<!-- End Footer -->
</div>

@endsection