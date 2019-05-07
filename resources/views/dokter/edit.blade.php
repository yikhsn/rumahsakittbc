<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Ini adalah halaman edit untuk dokter {{ $dokter->id }}

    <form method="post" action="/dokter/{{ $dokter->id }}/update">
    
    {{ csrf_field() }}

    <div>
        <label for="nama">nama</label>
        <input type="text" name="nama" id="nama"
        placeholder="required" required value="{{ $dokter->nama }}">
    </div>
    
    <div>
        <label for="usia">usia</label>
        <input type="text" name="usia" id="usia"
        placeholder="required" required value="{{ $dokter->usia }}">
    </div>

    <div>
        <label for="usia">agama</label>
        <input type="text" name="agama" id="agama"
        placeholder="required" required value="{{ $dokter->agama }}">
    </div>

    <div>
        <label for="nik">nik</label>
        <input type="text" name="nik" id="nik"
        placeholder="required" required value="{{ $dokter->nik }}">
    </div>

    <div>
        <label for="no_telepon">no_telepon</label>
        <input type="text" name="no_telepon" id="no_telepon"
        placeholder="required" required value="{{ $dokter->no_telepon }}">
    </div>

    <div>
        <label for="alamat">alamat</label>
        <input type="text" name="alamat" id="alamat"
        placeholder="required" required value="{{ $dokter->alamat }}">
    </div>

    <div>
        <label for="kecamatan_id">kecamatan_id</label>
        <input type="text" name="kecamatan_id" id="kecamatan_id"
        placeholder="required" required value="{{ $dokter->kecamatan->id }}">
    </div>

    <div>
        <label for="rumahsakit_id">rumahsakit_id</label>
        <input type="text" name="rumahsakit_id" id="rumahsakit_id"
        placeholder="required" required value="{{ $dokter->rumahsakit->id }}">
    </div>

    <button type="submit">Submit</button>
</form>
</body>
</html>