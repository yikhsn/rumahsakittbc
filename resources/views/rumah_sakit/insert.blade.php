<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Ini adalah halaman insert

    <form method="post" action="/rumahsakit/store">
    
    {{ csrf_field() }}

    <div>
        <label for="no_rumahsakit">no_rumahsakit</label>
        <input type="text" name="no_rumahsakit" id="no_rumahsakit">
    </div>
    
    <div>
        <label for="nama">nama</label>
        <input type="text" name="nama" id="nama">
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
        <label for="kecamatan_id">kecamatan</label>
        <input type="text" name="kecamatan_id" id="kecamatan_id">
    </div>
    
    <button type="submit">Submit</button>

</form>
</body>
</html>