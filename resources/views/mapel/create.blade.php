<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Guru</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-5">Data Guru</h1>
        <a href="{{ route('mapel.index') }}" class="btn btn-primary mb-3">Data Mata Pelajaran</a>
        <div class="card-body">
            <form action="{{ route('mapel.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="NIP" class="form-label">ID MATA PELAJARAN</label>
                    <input type="text" class="form-control" name=idMapel>
                    
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">NAMA MATA PELAJARAN</label>
                    <input type="text" class="form-control" name=namaMapel>
                </div>
                <div class="form-group">
                    <label>Nama Guru</label>
                    <select name=id id="inputState">
                        <option selected>Pilih Guru</option>
                        @foreach ($guru as $g)
                        <option value="{{ $g -> id }}">{{ $g -> nama }}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <!-- <div class="mb-3">
                    <label for="alamat" class="form-label">ALAMAT</label>
                    <input type="text" class="form-control" id=alamat>
                    
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Jenis Kelamin</label>
                    <input type="text" class="form-control" id=j_kel>
                    
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nomor Telepon</label>
                    <input type="number" class="form-control" id=no_telp>
                    
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">E-mail</label>
                    <input type="text" class="form-control" id=email>
                    
                </div> -->
                

            </form>
          
        </div>
    </div>
   
</body>
</html>