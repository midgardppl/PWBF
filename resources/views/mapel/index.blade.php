<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <title>Mata Pelajaran</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-5">Mata Pelajaran</h1>
        <a href="{{ route('mapel.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
        <div class="card-body">
            <div class="table">
                <table>
                <thead>
                    <td>No</td>
                    <td>ID</td>
                    <td>Nama</td>
                    <!-- <td>Nama Guru</td>
                    <td>Nomor Telepon</td> -->
                </thead>
                <tbody>
                    @foreach ($mapel as $m)

                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{$m -> idMapel}}</td>
                            <td>{{$m -> namaMapel}}</td>
                            <td>
                                @foreach ($m->guru as $guru)
                            {{$guru->nama}}
                            <br>
                            @endforeach
                            </td>
                            <td>
                                @foreach ($m->siswa as $item)
                            {{$item->namaSiswa}}
                            <br>
                            @endforeach
                            </td>
                            <td>
                                <a href="{{ route('mapel.edit') }}" class="btn btn-success btn-sm">Edit</a>
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
