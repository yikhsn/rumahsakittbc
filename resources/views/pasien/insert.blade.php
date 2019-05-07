<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="/pasien/store">
    
        {{ csrf_field() }}

        <div>
            <label for="nama">nama</label>
            <input type="text" name="nama" id="nama">
        </div>
        
        <div>
            <label for="usia">usia</label>
            <input type="text" name="usia" id="usia">
        </div>

        <div>
            <label for="agama">agama</label>
            <input type="text" name="agama" id="agama">
        </div>

        <div>
            <label for="nik">nik</label>
            <input type="text" name="nik" id="nik">
        </div>

        <div>
            <label for="no_telepon">no_telepon</label>
            <input type="text" name="no_telepon" id="no_telepon">
        </div>

        <div>
            <label for="alamat">alamat</label>
            <input type="text" name="alamat" id="alamat">
        </div>

        <div>
            <label for="kecamatan_id">kecamatan_id</label>
            <input type="text" name="kecamatan_id" id="kecamatan_id">
        </div>

        <div>
            <label for="type_id">type_id</label>
            <input type="text" name="type_id" id="type_id">
        </div>

        <div>
            <label for="jenis_penyakit_id">jenis_penyakit_id</label>
            <input type="text" name="jenis_penyakit_id" id="jenis_penyakit_id">
        </div>

        <div>
            <label for="pendamping_id">pendamping_id</label>
            <input type="text" name="pendamping_id" id="pendamping_id">
        </div>

        <div>
            <label for="dokter_id">dokter_id</label>
            <input type="text" name="dokter_id" id="dokter_id">
        </div>

        <div>
            <label for="rumahsakit_id">rumahsakit_id</label>
            <input type="text" name="rumahsakit_id" id="rumahsakit_id">
        </div>
        
        <button type="submit">Submit</button>

    </form>
</body>
</html>