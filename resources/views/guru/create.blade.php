<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <title>Tambah Data Guru</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-5">Data Guru</h1>
        <a href="{{ route('guru.index') }}" class="btn btn-primary mb-3">Data Guru</a>
        <div class="card-body">
            <form action="/guru" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="NIP" class="form-label">NIP</label>
                    <input type="text" class="form-control" name=NIP>

                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">NAMA</label>
                    <input type="text" class="form-control" name=nama>

                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">PASSWORD</label>
                    <input type="text" class="form-control" name=passGuru>

                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">ALAMAT</label>
                    <input type="text" class="form-control" name=alamat>

                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Jenis Kelamin</label>
                    <input type="text" class="form-control" name=j_kel>

                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nomor Telepon</label>
                    <input type="text" class="form-control" name=no_telp>

                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">E-mail</label>
                    <input type="text" class="form-control" name=email>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>

            </form>

        </div>
    </div>

</body>
</html>
