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
        <h1 class="text-center mb-5">Tambah Kelas</h1>
        <a href="{{ route('kelas.index') }}" class="btn btn-primary mb-3">Daftar Kelas</a>
        <div class="card-body">
            <form action="{{route('kelas.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="NIP" class="form-label">Nama Kelas</label>
                    <input type="text" class="form-control" name=NIP>

                </div>
                
                    <button type="submit" class="btn btn-primary">Submit</button>
                

            </form>

        </div>
    </div>

</body>
</html>
