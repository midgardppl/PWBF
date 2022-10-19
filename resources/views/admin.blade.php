<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('simpan') }}" method="post">
        {{ csrf_field() }}
        <input type="text" id="nama" name="nama" placeholder="nama">
        <input type="text" id="alamat" name="alamat" placeholder="alamat">
        <input type="text" id="no_telp" name="no_telp" placeholder="Nomor Telepon">
        <!-- <p><input type="radio" id="j_kel" name="j_kel" value="Laki-laki">Laki-laki</p>
        <p><input type="radio" id="j_kel" name="j_kel" value="Perempuan">Perempuan</p> -->
        <button type="submit">simpan data</button>
    </form>
</body>
</html>