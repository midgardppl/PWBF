<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <title>Data Guru</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-5">Data Guru</h1>
        <a href="{{ route('guru.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
        <div class="card-body">
            <div class="table">
                <table>
                <thead>
                    <td>No</td>
                    <td>NIP</td>
                    <td>Nama</td>
                    <td>Alamat</td>
                    <td>Jenis Kelamin</td>
                    <td>Nomor Telepon</td>
                    <td>E-mail</td>
                </thead>
                <tbody>
                    @foreach ($guru as $g)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{$g -> NIP}}</td>
                            <td>{{$g -> nama}}</td>
                            <td>{{$g -> alamat}}</td>
                            <td>{{$g -> j_kel}}</td>
                            <td>{{$g -> no_telp}}</td>
                            <td>{{$g -> email}}</td>
                            <td>{{$g -> mapel->namaMapel}}</td>
                            <td>
                                <a href="" class="btn btn-success btn-sm">Edit</a>
                                <a href="" class="btn btn-success btn-sm">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
            </div>

        </div>
    </div>

</body>
</html>
