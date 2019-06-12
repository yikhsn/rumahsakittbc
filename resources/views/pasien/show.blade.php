@extends('layouts.master')

@section('title')
    <title>TBC APPS</title>
@endsection

@section('content')
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h3 style="font-family: segoe ui light;">Informasi Pasien</h3>
                        <br>
                        <br>
                        
                        <div class="row">
                            <div class="col-md-2">
                                <p style="font-family: segoe ui; font-weight: bold; padding-bottom: 2px;">
                                    Nama
                                </p>
                                <hr>

                                <p style="font-family: segoe ui; font-weight: bold; padding-bottom: 2px;">
                                    NIK
                                </p>
                                <hr>

                                <p style="font-family: segoe ui; font-weight: bold; padding-bottom: 5px;">
                                    Tipe Pasien
                                </p>
                                <hr>

                                <p style="font-family: segoe ui; font-weight: bold; padding-bottom: 7px;">
                                    Status Pengobatan
                                </p>
                                <hr>
                                
                                <p style="font-family: segoe ui; font-weight: bold; padding-bottom: 7px;">
                                    Opsi
                                </p>
                                <hr>
                            </div>

                            <div class="col-md-3">
                                <input type="text" class="form-control"
                                    value="{{ $pasien->nama }}" 
                                    style="border-top:0px; border-left:0px; border-right:0px;
                                        border-bottom-width: 1px;  background-color: white;
                                        border-bottom-color: #bdbdbd;" 
                                    disabled>
                                <br>
                                
                                <input type="text" class="form-control" 
                                    value="{{ $pasien->nik }}"
                                    style="border-top:0px; border-left:0px; border-right:0px;
                                        border-bottom-width: 1px;  background-color: white;
                                         border-bottom-color: #bdbdbd;" 
                                    disabled>
                                <br>
                                
                                <input type="text" class="form-control" 
                                    value="{{ $pasien->type->type }}"
                                    style="border-top:0px; border-left:0px; border-right:0px;
                                        border-bottom-width: 1px;  background-color: white;
                                         border-bottom-color: #bdbdbd;" 
                                    disabled>
                                <br>
                                
                                <input type="text" class="form-control" 
                                    value="{{ $pasien->evaluasi->nama }}"
                                    style="border-top:0px; border-left:0px; border-right:0px;
                                        border-bottom-width: 1px;  background-color: white;
                                         border-bottom-color: #bdbdbd;" 
                                    disabled>
                                <br>

                                <!-- Opsi -->
                                <div class="text-left">
                                    <a href="/pasien/{{ $pasien->id }}/edit" class="btn btn-warning">
                                        <i class="fa fa-edit"></i>
                                        Edit
                                    </a>
                                    <a href="print/cetak-pasien-baru.php" target="blank" class="btn btn-primary">
                                        <i class="fa fa-print"></i>
                                        Cetak
                                    </a>
                                    <a href="/pasien/{{ $pasien->id }}/delete" class="btn btn-danger">
                                        <i class="fa fa-close"></i>
                                        Hapus
                                    </a>
                                </div>
                                <br>
                                <br>
                            </div>

                            <div class="col-md-1"></div>
                            
                            <div class="col-md-2">
                                <p style="font-family: segoe ui; font-weight: bold; padding-bottom: 2px;">
                                    Durasi Pengobatan
                                </p>
                                <hr>

                                <p style="font-family: segoe ui; font-weight: bold; padding-bottom: 2px;">
                                    Jadwal Pengambilan Obat
                                </p>
                                <hr>

                                <p style="font-family: segoe ui; font-weight: bold; padding-bottom: 5px;">
                                    Jadwal Konsultasi
                                </p>
                                <hr>

                                <p style="font-family: segoe ui; font-weight: bold; padding-bottom: 7px;">
                                    Status Jadwal
                                </p>
                                <hr>

                                <p style="font-family: segoe ui; font-weight: bold; padding-bottom: 7px;">
                                    Opsi
                                </p>
                                <hr>
                            </div>


                            <div class="col-md-3">
                                <input type="text" class="form-control" 
                                    style="border-top:0px; border-left:0px; border-right:0px;
                                        border-bottom-width: 1px;  background-color: white; 
                                        border-bottom-color: #bdbdbd;" 
                                    name="alamat_lengkap" disabled>
                                <br>
                                
                                <input type="text" class="form-control"
                                    style="border-top:0px; border-left:0px; border-right:0px;
                                        border-bottom-width: 1px;  background-color: white;
                                        border-bottom-color: #bdbdbd;"  
                                    name="alamat_lengkap" disabled>
                                <br>
                                
                                <input type="text" class="form-control"
                                    style="border-top:0px; border-left:0px; border-right:0px;
                                        border-bottom-width: 1px;  background-color: white;
                                        border-bottom-color: #bdbdbd;"  
                                    name="alamat_lengkap" disabled>
                                <br>
                                
                                <input type="text" class="form-control"
                                    style="border-top:0px; border-left:0px; border-right:0px;
                                        border-bottom-width: 1px;  background-color: white;
                                        border-bottom-color: #bdbdbd;"  
                                    name="alamat_lengkap"Hari" disabled>
                                <br>
                                <!-- Opsi -->
                                <div class="text-left">
                                    <a href="edit-pasien-baru.php" class="btn btn-warning">
                                        <i class="fa fa-edit"></i>
                                        Lihat Jadwal
                                    </a> 
                                </div>
                                <br>
                                <br> 
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="card-box">
                                <ul class="nav nav-tabs tabs-bordered nav-justified">
                                    <li class="nav-item">
                                        <a href="#tab-identitas" data-toggle="tab" aria-expanded="false" class="nav-link">
                                            Identitas Diri
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#tab-diagnosa" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                            Diagnosa
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#tab-riwayat" data-toggle="tab" aria-expanded="false" class="nav-link">
                                            Riwayat Diagnosa
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#tab-PMO" data-toggle="tab" aria-expanded="false" class="nav-link">
                                            PMO
                                        </a>
                                    </li>
                                    
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane" id="tab-identitas">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p style="font-family: segoe ui; font-weight: bold;">ID</p>
                                                <hr>
                                                <p style="font-family: segoe ui; font-weight: bold;">NIK</p>
                                                <hr>
                                                <p style="font-family: segoe ui; font-weight: bold;">Nama</p>
                                                <hr>
                                                <p style="font-family: segoe ui; font-weight: bold;">Tempat Tanggal Lahir</p>
                                                <hr>
                                                <p style="font-family: segoe ui; font-weight: bold;">Jenis Kelamin</p>
                                                <hr>
                                                <p style="font-family: segoe ui; font-weight: bold;">Nomor Telepon</p>
                                                <hr>
                                                <p style="font-family: segoe ui; font-weight: bold;">Email</p>
                                                <hr>
                                                <p style="font-family: segoe ui; font-weight: bold;">Agama</p>
                                                <hr>
                                                <p style="font-family: segoe ui; font-weight: bold;">Alamat</p>
                                                <hr>
                                            </div>
                                            <div class="col-md-6">
                                                <!-- ID -->
                                                <p> {{ $pasien->id }}</p>
                                                <hr>

                                                <!-- NIK -->
                                                <p>{{ $pasien->nik }}</p>
                                                <hr>

                                                <!-- Nama -->
                                                <p>{{ $pasien->nama }}</p>
                                                <hr>

                                                <!-- TTL -->
                                                <p>{{ $pasien->tempat_lahir }}, {{ date('d-m-Y', strtotime($pasien->tanggal_lahir)) }}</p>
                                                <hr>

                                                <!-- Jenis Kelamin -->
                                                <p>{{ $pasien->jenis_kelamin }}</p>
                                                <hr>

                                                <!-- Nomor Telepon -->
                                                <p>{{ $pasien->no_telepon }}</p>
                                                <hr>

                                                <!-- E-Mail -->
                                                <p>{{ $pasien->email }}</p>
                                                <hr>

                                                <!-- Agama -->
                                                <p>{{ $pasien->jenis_kelamin }}</p>
                                                <hr>

                                                <!-- Alamat -->
                                                <p>
                                                    {{ $pasien->alamat }},
                                                    {{ $pasien->kecamatan->name }},
                                                    {{ $pasien->kecamatan->kabupaten->name }},
                                                    {{ $pasien->kecamatan->kabupaten->provinsi->name }}
                                                </p>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane active" id="tab-diagnosa">
                                        <!-- Durasi Pengobatan -->
                                        <h5 style="font-family: segoe ui light;">Dokter dan Rumah Sakit</h5>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p style="font-family: segoe ui; font-weight: bold; padding-bottom: 2px;">
                                                    Rumah Sakit
                                                </p>
                                                <hr>
                                                
                                                <p style="font-family: segoe ui; font-weight: bold; padding-bottom: 2px;">
                                                    Dokter
                                                </p>
                                                <hr>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control"
                                                    value=" {{ $pasien->rumahsakit->nama }}"
                                                    style="border-top:0px; border-left:0px; 
                                                        border-right:0px; border-bottom-width: 1px;
                                                        background-color: white; 
                                                        border-bottom-color: #bdbdbd;"
                                                    name="alamat_lengkap" disabled>
                                                <br>
                                                
                                                <input type="text" class="form-control"
                                                    value=" {{ $pasien->dokter->nama }}"
                                                    style="border-top:0px; border-left:0px; 
                                                        border-right:0px; border-bottom-width: 1px;
                                                        background-color: white; 
                                                        border-bottom-color: #bdbdbd;"
                                                    name="alamat_lengkap" disabled>
                                            </div>
                                        </div>
                                        <br>
                                        <!-- Tempat Pengobatan Sebelumnya -->
                                        <!-- Label -->
                                        <h5 style="font-family: segoe ui light;">Hasil Diagnosa Saat Ini</h5>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p style="font-family: segoe ui; font-weight: bold;
                                                        padding-bottom: 2px;">
                                                    Tanggal Pendaftaran dan Diagnosa
                                                </p>
                                                <hr>

                                                <p style="font-family: segoe ui; font-weight: bold;
                                                        padding-bottom: 2px;">
                                                    Jumlah Spesimen Sputum
                                                </p>
                                                <hr>

                                                <p style="font-family: segoe ui; font-weight: bold;
                                                        padding-bottom: 2px;">
                                                    Hasil Pemeriksaan Sputum
                                                </p>
                                                <hr>

                                                <br>
                                                <p style="font-family: segoe ui; font-weight: bold;
                                                        padding-bottom: 5px;">
                                                    Catatan Kesehatan
                                                </p>
                                                <br>
                                                <hr>
                                                
                                            </div>
                                            <!-- Value -->
                                            <div class="col-md-6">
                                                <input type="text" class="form-control"
                                                    value=" {{ date('d-m-Y', strtotime($pasien->created_at)) }}"
                                                    style="border-top:0px; border-left:0px;
                                                        border-right:0px; border-bottom-width: 1px;
                                                        background-color: white; border-bottom-color: #bdbdbd;"
                                                    name="alamat_lengkap" disabled>
                                                <br>
                                                <input type="text" class="form-control"
                                                    value=" {{ $pasien->jumlah_sputum }}"
                                                    style="border-top:0px; border-left:0px;
                                                        border-right:0px; border-bottom-width: 1px;
                                                        background-color: white; border-bottom-color: #bdbdbd;"
                                                    name="alamat_lengkap" disabled>
                                                <br>
                                                <input type="text" class="form-control"
                                                    value=" {{ $pasien->hasil_sputum }}"
                                                    style="border-top:0px; border-left:0px;
                                                        border-right:0px; border-bottom-width: 1px;
                                                        background-color: white; border-bottom-color: #bdbdbd;"
                                                    name="alamat_lengkap" disabled>
                                                <br>
                                                <textarea name="" id="" rows="5" class="form-control"
                                                    style="border-top:0px; border-left:0px; border-right:0px;
                                                        background-color:white; 
                                                        border-bottom-color: #bdbdbd; padding-top: 15px;"  
                                                        name="alamat_lengkap" disabled>{{ $pasien->catatan_kesehatan }}</textarea>
                                            </div>
                                        </div>
                                        
                                        <!-- Tempat Pengobatan Sebelumnya -->
                                        <!-- Tempat Pengobatan Sebelumnya -->
                                        <h5 style="font-family: segoe ui light;">Kriteria Evaluasi</h5>
                                        <hr>
                                        <div class="row">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <th>Tipe Pasien</th>
                                                    <th>Evaluasi</th>
                                                    <th>Kriteria Evaluasi</th>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 150px;">{{ $pasien->jenis_penyakit->nama }}</td>
                                                        <td name="evaluasi">{{ $pasien->evaluasi->nama }}</td>
                                                        <td name="referensi_kriteria">
                                                            <p>
                                                                {{ $pasien->evaluasi->keterangan }}
                                                            </p>
                                                        </td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                        <br>
                                        <!-- PMO -->
                                        
                                        
                                    </div>
                                    <div class="tab-pane" id="tab-riwayat">
                                        <div class="container">
                                            <h5 style="font-family: segoe ui light;">
                                                Riwayat Kesehatan Pasien Sebelumnya
                                            </h5>
                                            <hr>
                                            <br>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <h6 style="font-family: segoe ui light;">
                                                        Rumah Sakit dan Dokter
                                                    </h6>
                                                    <br>

                                                    <p style="font-family: segoe ui; font-weight: bold;
                                                        padding-bottom: 2px;">
                                                        Rumah Sakit
                                                    </p>
                                                    <hr>

                                                    <p style="font-family: segoe ui; font-weight: bold;
                                                        padding-bottom: 3px;">
                                                        Dokter
                                                    </p>
                                                    <hr>

                                                    <p style="font-family: segoe ui; font-weight: bold;
                                                        padding-bottom: 3px;">
                                                        Alamat Rumah Sakit
                                                    </p>
                                                    <hr>
                                                    <br>
                                                    <br>

                                                    <h6 style="font-family: segoe ui light;">Durasi Pengobatan</h6>
                                                    <br>
                                                    <p style="font-family: segoe ui; font-weight: bold;
                                                        padding-bottom: 6px;">
                                                            Awal Pengobatan
                                                    </p>
                                                    <hr>
                                                    <p style="font-family: segoe ui; font-weight: bold;
                                                        padding-bottom: 6px;">
                                                            Akhir Pengoban
                                                    </p>
                                                    <hr>
                                                    <p style="font-family: segoe ui; font-weight: bold;
                                                        padding-bottom: 2px;">
                                                            Durasi Pengobatan
                                                    </p>
                                                    <hr>
                                                    <br>
                                                    <br>


                                                    <h6 style="font-family: segoe ui light;">Riwayat Pengobatan</h6>
                                                    <br>

                                                    <p style="font-family: segoe ui; font-weight: bold;
                                                            padding-bottom: 6px;">
                                                        Kelengkapan Pengobatan Sebelumnya
                                                    </p>
                                                    <hr>

                                                    <p style="font-family: segoe ui; font-weight: bold;
                                                            padding-bottom: 6px;">
                                                        Jumlah Spesimen Sputum Sebelumnya
                                                    </p>
                                                    <hr>

                                                    <p style="font-family: segoe ui; font-weight: bold;
                                                            padding-bottom: 6px;">
                                                        Hasil Pemeriksaan Sputum Sebelumnya
                                                    </p>
                                                    <hr>

                                                    <p style="font-family: segoe ui; font-weight: bold;
                                                            padding-bottom: 5px;">
                                                        Status Kesehatan Sebelumnya
                                                    </p>
                                                    <hr>
                                                    
                                                </div>
                                                
                                                <!-- Value -->
                                                <div class="col-md-6">
                                                    
                                                    <!-- RUmah Sakit dan Dokter -->
                                                    <h6>|</h6>
                                                    <br>
                                                    <input type="text" class="form-control"
                                                        value="{{ is_null($pasien->tempat_pengobatan_sebelumnya)
                                                            ?
                                                                '-'
                                                            : 
                                                                $pasien->tempat_pengobatan_sebelumnya 
                                                        }}"
                                                        style="border-top:0px; border-left:0px;
                                                            border-right:0px; border-bottom-width: 1px;
                                                            background-color: white;
                                                            border-bottom-color: #bdbdbd;"
                                                        name="rumah_sakit_sebelumnya" disabled>
                                                    <br>
                                                    <input type="text" class="form-control"
                                                        value="{{ 
                                                            is_null($pasien->nama_dokter_sebelumnya)
                                                            ?
                                                                '-'
                                                            : 
                                                                $pasien->nama_dokter_sebelumnya 
                                                        }}"
                                                        style="border-top:0px; border-left:0px;
                                                            border-right:0px; border-bottom-width: 1px;
                                                            background-color: white;
                                                            border-bottom-color: #bdbdbd;"
                                                        name="dokter_sebelumnya" disabled>
                                                    <br>
                                                    <input type="text" class="form-control"
                                                        value="{{ 
                                                            is_null($pasien->alamat_pengobatan_sebelumnya)
                                                            ?
                                                                '-'
                                                            :
                                                                $pasien->alamat_pengobatan_sebelumnya 
                                                        }}"
                                                        style="border-top:0px; border-left:0px;
                                                            border-right:0px; border-bottom-width: 1px;
                                                            background-color: white;
                                                            border-bottom-color: #bdbdbd;"
                                                        name="dokter_sebelumnya" disabled>
                                                    <br>
                                                    <br>
                                                    <br>

                                                    <!-- Durasi Pengobatan -->
                                                    <h6>|</h6>
                                                    <br>
                                                    <input type="text" class="form-control"
                                                        value="{{ 
                                                            is_null($pasien->awal_pengobatan_sebelumnya)
                                                            ?
                                                                '-'
                                                            :
                                                                date('d-m-Y', strtotime($pasien->awal_pengobatan_sebelumnya))
                                                        }}"
                                                        style="border-top:0px; border-left:0px;
                                                            border-right:0px; border-bottom-width: 1px;
                                                            background-color: white;
                                                            border-bottom-color: #bdbdbd;"
                                                        name="awal_pengobatan_sebelumnya" disabled>
                                                    <br>
                                                    <input type="text" class="form-control"
                                                        value="{{ 
                                                            is_null($pasien->akhir_pengobatan_sebelumnya)
                                                            ?
                                                                '-'
                                                            :
                                                                date('d-m-Y', strtotime($pasien->akhir_pengobatan_sebelumnya))
                                                        }}"
                                                        style="border-top:0px; border-left:0px;
                                                            border-right:0px; border-bottom-width: 1px;
                                                            background-color: white;
                                                            border-bottom-color: #bdbdbd;"
                                                        name="akhir_pengobatan_sebelumya" disabled>
                                                    <br>
                                                    <input type="text" class="form-control"
                                                        value="{{ 
                                                            is_null($pasien->awal_pengobatan_sebelumnya)
                                                            ?
                                                                '-'
                                                            :
                                                                $lama_pengobatan_sebelumnya . ' hari' 
                                                        }}"
                                                        style="border-top:0px; border-left:0px;
                                                            border-right:0px; border-bottom-width: 1px;
                                                            background-color: white;
                                                            border-bottom-color: #bdbdbd;"
                                                        name="durasi_pengobatan_sebelumnya" disabled>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    
                                                    <!-- Riwayat Pengobatan -->
                                                    <h6>|</h6>
                                                    <br>

                                                    <input type="text" class="form-control"
                                                        value="{{ 
                                                            is_null($pasien->kelangkapan_pengobatan_sebelumnya)
                                                            ?
                                                                '-'
                                                            :
                                                                $pasien->kelangkapan_pengobatan_sebelumnya 
                                                        }}"
                                                        style="border-top:0px; border-left:0px;
                                                            border-right:0px; border-bottom-width: 1px;
                                                            background-color: white;
                                                            border-bottom-color: #bdbdbd;"
                                                        name="alamat_lengkap" disabled>
                                                    <br>

                                                    <input type="text" class="form-control"
                                                        value="{{ 
                                                            is_null($pasien->jumlah_sputum_sebelumnya)
                                                            ?
                                                                '-'
                                                            :
                                                                $pasien->jumlah_sputum_sebelumnya 
                                                        }}"
                                                        style="border-top:0px; border-left:0px;
                                                            border-right:0px; border-bottom-width: 1px;
                                                            background-color: white;
                                                            border-bottom-color: #bdbdbd;"
                                                        name="alamat_lengkap" disabled>
                                                    <br>

                                                    <input type="text" class="form-control"
                                                        value="{{ 
                                                            is_null($pasien->hasil_sputum_sebelumnya)
                                                            ?
                                                                '-'
                                                            : 
                                                                $pasien->hasil_sputum_sebelumnya 
                                                        }}"
                                                        style="border-top:0px; border-left:0px;
                                                            border-right:0px; border-bottom-width: 1px;
                                                            background-color: white;
                                                            border-bottom-color: #bdbdbd;"
                                                        name="alamat_lengkap" disabled>
                                                    <br>

                                                    <input type="text" class="form-control"
                                                        value="{{ 
                                                            is_null($pasien->status_kesembuhan_sebelumnya)
                                                            ?
                                                                '-'
                                                            :
                                                                $pasien->status_kesembuhan_sebelumnya 
                                                        }}"
                                                        style="border-top:0px; border-left:0px;
                                                            border-right:0px; border-bottom-width: 1px;
                                                            background-color: white;
                                                            border-bottom-color: #bdbdbd;"
                                                        name="alamat_lengkap" disabled>
                                                    <br>
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                                    <center>
                                    
                                    </center>
                                    <!-- Data Pengobatan -->
                                    <div class="tab-pane" id="tab-PMO">
                                        <h5 style="font-family: segoe ui light;">Pendamping Minum Obat (PMO)</h5>
                                        <hr>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <p style="font-family: segoe ui; font-weight: bold;
                                                    padding-bottom: 2px;">
                                                    Nama PMO
                                                </p>
                                                <hr>


                                                <p style="font-family: segoe ui; font-weight: bold;
                                                    padding-bottom: 5px;">
                                                    NIK
                                                </p>
                                                <hr>


                                                <p style="font-family: segoe ui; font-weight: bold;
                                                    padding-bottom: 2px;">
                                                    Hubungan Dengan Pasien
                                                </p>
                                                <hr>


                                                <p style="font-family: segoe ui; font-weight: bold;
                                                    padding-bottom: 5px;">
                                                    Jenis Kelamin
                                                </p>
                                                <hr>


                                                <p style="font-family: segoe ui; font-weight: bold;
                                                    padding-bottom: 5px;">
                                                    Nomor Telepon PMO
                                                </p>
                                                <hr>


                                                <p style="font-family: segoe ui; font-weight: bold;
                                                    padding-bottom: 5px;">
                                                    Usia
                                                </p>
                                                <hr>


                                                <p style="font-family: segoe ui; font-weight: bold;
                                                    padding-bottom: 5px;">
                                                    Alamat
                                                </p>
                                                <br>
                                                <br>
                                                <hr>
                                                
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control"
                                                    value="{{ $pasien->pendamping->nama }}"
                                                    style="border-top:0px; border-left:0px;
                                                        border-right:0px; border-bottom-width: 1px;
                                                        background-color: white; border-bottom-color: #bdbdbd;"
                                                    name="alamat_lengkap" disabled>
                                                <br>

                                                <input type="text" class="form-control"
                                                    value="{{ $pasien->pendamping->nik }}"
                                                    style="border-top:0px; border-left:0px;
                                                        border-right:0px; border-bottom-width: 1px;
                                                        background-color: white; border-bottom-color: #bdbdbd;"
                                                    name="alamat_lengkap" disabled>
                                                <br>

                                                <input type="text" class="form-control" 
                                                    value="{{ $pasien->pendamping->hubungan_pasien }}"
                                                    style="border-top:0px; border-left:0px;
                                                        border-right:0px; border-bottom-width: 1px;
                                                        background-color: white; border-bottom-color: #bdbdbd;"
                                                    name="alamat_lengkap" disabled>
                                                <br>

                                                <input type="text" class="form-control"
                                                    value="{{ $pasien->pendamping->jenis_kelamin }}"
                                                    style="border-top:0px; border-left:0px;
                                                        border-right:0px; border-bottom-width: 1px;
                                                        background-color: white; border-bottom-color: #bdbdbd;"
                                                    name="alamat_lengkap" disabled>
                                                <br>

                                                <input type="text" class="form-control"
                                                    value="{{ $pasien->pendamping->no_telepon }}"
                                                    style="border-top:0px; border-left:0px;
                                                        border-right:0px; border-bottom-width: 1px;
                                                        background-color: white; border-bottom-color: #bdbdbd;"
                                                    name="alamat_lengkap" disabled>
                                                <br>

                                                <input type="text" class="form-control"
                                                    value="{{ $pasien->pendamping->usia }}"
                                                    style="border-top:0px; border-left:0px;
                                                        border-right:0px; border-bottom-width: 1px;
                                                        background-color: white; border-bottom-color: #bdbdbd;"
                                                    name="alamat_lengkap" disabled>
                                                <br>

                                                <textarea name="" id="" rows="5" class="form-control"
                                                    style="border-top:0px; border-left:0px; border-right:0px;
                                                        background-color:white; 
                                                        border-bottom-color: #bdbdbd; padding-top: 15px;"  
                                                        name="alamat_lengkap" disabled> {{ $pasien->pendamping->alamat }}, {{ $pasien->pendamping->kecamatan->name }}, {{ $pasien->pendamping->kecamatan->kabupaten->name }}, {{ $pasien->pendamping->kecamatan->kabupaten->provinsi->name }}, </textarea>
                                                <br>


                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div> <!-- end col -->
                    </div>
                </div>
                
            </div>
            <!-- Modal Hapus Pasien -->
            <div class="modal fade hapus-pasien" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="mySmallModalLabel">Hapus Rumah Sakit</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <center>
                            <i class="mdi mdi-close-circle" style="font-size: 100px; color:tomato;"></i>
                            <br>
                            Apakah Anda Akan Menghapus Informasi Pasien ?
                            </center>
                            
                        </div>
                        
                        <div class="text-center">
                            <button class="btn btn-primary"><i class="mdi mdi-arrow-left"></i> Batal</button>
                            <a href="hapus-pasien.php" class="btn btn-danger"><i class="mdi mdi-close"></i> Hapus</a>
                        </div>
                        </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                        
                    </div>
                    
                </div>
                <!-- end wrapper -->
@endsection
