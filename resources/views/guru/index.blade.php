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
                            @if ($g->j_kel==0)
                            <td>Laki-laki</td>
                            @elseif ($g->j_kel==1)
                                <td>Perempuan</td>
                            @endif
                            <td>{{$g -> no_telp}}</td>
                            <td>{{$g -> email}}</td>
                            <td>
                                @foreach ($g->mapel as $item)
                                {{$item->namaMapel}}
                            <br>
                            @endforeach
                            </td>
                            <td>
                                <a href="{{route ('guru.edit',$g->id)}}" class="btn btn-success btn-sm">Edit</a>
                                <form action="{{route ('guru.destroy', $g->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Hapus</button>
                                </form>
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
