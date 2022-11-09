<!DOCTYPE html>
<html lans="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edse">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <title>Data suru</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-5">Data Siswa</h1>
        <a href="{{ route('siswa.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
        <div class="card-body">
            <div class="table">
                <table>
                <thead>
                    <td>No</td>
                    <td>NISN</td>
                    <td>Nama Siswa</td>
                    <td>Tanggal Lahir</td>
                    <td>Jenis Kelamin</td>
                    <td>Alamat</td>
                    <td>Nomor Telepon</td>
                    <td>Status</td>
                    <td>Mata Pelajaran</td>
                </thead>
                <tbody>
                    @foreach ($siswa as $s)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{$s -> NISN}}</td>
                            <td>{{$s -> namaSiswa}}</td>
                            <td>{{$s -> tglLahir}}</td>
                            <td>{{$s -> j_kelSiswa}}</td>
                            <td>{{$s -> alamatSiswa}}</td>
                            <td>{{$s -> no_telpSiswa}}</td>
                            <td>{{$s -> statusSiswa}}</td>
                            <td>

                                @foreach ($s->mapel as $item)
                                    {{$item -> namaMapel}}
                                    <br>

                                @endforeach
                            </td>
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
