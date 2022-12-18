<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <title>Mata Pelajaran</title>
    <link rel="stylesheet" href="css/guru.css">
    {{-- <link rel="stylesheet" href="css/styles.css"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@6.9.96/css/materialdesignicons.min.css">
    {{-- <link rel="stylesheet" href="../css/vendor.bundle.base.css"> --}}
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

</head>
<nav class="navbar p-0 fixed-top d-flex flex-row">
    <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
      <a class="navbar-brand brand-logo-mini" href="/home">
      <i class="fas fa-book text-primary me-3"></i>
      </a>
    </div>
    <div class="navbar-menu-wrapper flex-grow d-flex navbar-light align-items-stretch">

      <a href="/home" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
        <h2 class="m-1"><i class="fas fa-book text-primary me-2"></i>eRaport</h2>
    </a>
      <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item dropdown d-none d-lg-block">
          <a class="nav-link btn btn-warning create-new-button" id="createbuttonDropdown" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-stream"></i>Data</a>

          <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item" href="{{route('guru.index')}}">
              <div class="preview-thumbnail">
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1">Guru</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item" href="{{route('siswa.index')}}">
              <div class="preview-thumbnail">
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1">Siswa</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item" href="{{route('mapel.index')}}">
              <div class="preview-thumbnail">
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1">Mapel</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item" href="{{route('kelas.index')}}">
              <div class="preview-thumbnail">
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1">Kelas</p>
              </div>
            </a>
        </li>
        <li class="nav-item dropdown d-none d-lg-block">
          <a class="nav-link btn btn-warning create-new-button" id="createbuttonDropdown" data-toggle="dropdown" aria-expanded="false" href="#"><i class="far fa-edit"></i>Tambah Data</a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
            <div class="dropdown-divider"></div>
            <button class="dropdown-item preview-item" data-toggle="modal" data-target="#modalTambahGuru">
              <div class="preview-thumbnail">
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1">Guru</p>
              </div>
            </button>
            <div class="dropdown-divider"></div>
            <button class="dropdown-item preview-item" data-toggle="modal" data-target="#modalTambahSiswa">
                <div class="preview-thumbnail">
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1">Siswa</p>
                </div>
              </button>
            <div class="dropdown-divider"></div>
            <button class="dropdown-item preview-item" data-toggle="modal" data-target="#modalTambahMapel">
                <div class="preview-thumbnail">
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1">Mapel</p>
                </div>
              </button>
            <div class="dropdown-divider"></div>
            <button class="dropdown-item preview-item" data-toggle="modal" data-target="#modalTambahKelas">
                <div class="preview-thumbnail">
                </div>
                <div class="preview-item-content">
                  <p class="preview-subject ellipsis mb-1">Kelas</p>
                </div>
              </button>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
            <div class="navbar-profile">
              <img class="img-xs rounded-circle" src="images/faces/face15.jpg" alt="">
              <p class="mb-0 d-none d-sm-block navbar-profile-name">Henry Klein</p>
              <i class="fa fa-caret-down d-none d-sm-block" style="margin-left: 5px"></i>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
            <!-- <h6 class="p-3 mb-0">Profile</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-settings text-success"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject mb-1">Settings</p>
              </div>
            </a>-->
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item" href="home">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-logout" style="color: #ffff"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject mb-1">Log out</p>
              </div>
            </a>
            <!-- <div class="dropdown-divider"></div>
            <p class="p-3 mb-0 text-center">Advanced settings</p>
          </div> -->
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-format-line-spacing"></span>
      </button>
    </div>
  </nav>
<body>




    <div class="cnt" style="margin-top: 50px">
      <div class="row gutters-20">
        <div class="col-xl-6 col-sm-6 col-12">
          <div class="dashboard-summery-one mg-b-20">
            <div class="row align-items-center">
              <div class="col-6">
                <div class="item-icon bg-light-green">
                  <i class="mdi mdi-account-multiple" style="color: #3cb878"></i>
                </div>
              </div>
              <div class="col-6">
                <div class="item-content">
                  <div class="item-title">Siswa</div>
                    <div class="item-number">
                      <span class="counter" data-num="150000">{{$siswaCount}}</span>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-sm-6 col-12">
          <div class="dashboard-summery-one" style="margin-bottom:20px">
            <div class="row align-items-center">
              <div class="col-6">
                <div class="item-icon bg-light-blue">
                  <i class="mdi mdi-badge-account-horizontal" style="color: #3f7afc"></i>
                </div>
              </div>
            <div class="col-6">
              <div class="item-content">
                <div class="item-title">Guru</div>
                <div class="item-number">
                  <span class="counter" data-num="150000">{{$guruCount}}</span>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
        <div class="col-xl-6 col-sm-6 col-12">
          <div class="dashboard-summery-one mg-b-20">
            <div class="row align-items-center">
              <div class="col-6">
                <div class="item-icon bg-light-yellow">
                  <i class="mdi mdi-book-multiple" style="color: #ffa001"></i>
                </div>
              </div>
            <div class="col-6">
              <div class="item-content">
                <div class="item-title">Mata Pelajaran</div>
                <div class="item-number">
                  <span class="counter" data-num="150000">{{$mapelCount}}</span>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
        <div class="col-xl-6 col-sm-6 col-12">
          <div class="dashboard-summery-one mg-b-20">
            <div class="row align-items-center">
              <div class="col-6">
                <div class="item-icon bg-light-red">
                  <i class="mdi mdi-bank" style="color:rgb(248, 9, 9)"></i>
                </div>
              </div>
            <div class="col-6">
              <div class="item-content">
                <div class="item-title">Kelas</div>
                <div class="item-number">
                  <span class="counter" data-num="150000">{{$kelasCount}}</span>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>


        <h1 class="text-center mb-5" style="margin-top:30px">Mata Pelajaran</h1>

        <div class="card-body">

                <table class="table-bordered">
                <thead>
                    <td>No</td>
                    <td>Id Mapel</td>
                    <td>Mata Pelajaran</td>
                    <td>Nama Guru</td>
                    <td>Aksi</td>
                </thead>
                <tbody>
                    @foreach ($mapel as $m)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{$m -> idMapel}}</td>
                        <td>{{$m -> namaMapel}}</td>
                        <td>
                            @foreach ($m->guru as $item)
                                {{$item -> nama}}
                                <br>

                            @endforeach
                        </td>
                            <td style="display: flex;">
                                <a style="margin: 5px " data-toggle="modal" data-target="#updateMapel{{$m->id}}" class="btn btn-success btn-sm">Edit</a>
                                <form action="{{route ('mapel.destroy', $m->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button style="margin: 5px" class="btn btn-danger" type="submit">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>


        </div>
    </div>
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->

    <!-- inject:js -->

    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="js/dashboard.js"></script>

        {{-- MODAL ADD GURU --}}
        <div class="modal fade" id="modalTambahGuru" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header text-center">
              <h4 class="modal-title w-100 font-weight-bold">Tambah Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body mx-3">
                <form action="{{route('guru.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="NIP" class="form-label">NIP</label>
                        <input type="text" class="form-control" name="NIP">

                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">NAMA</label>
                        <input type="text" class="form-control" name="nama">

                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">ALAMAT</label>
                        <input type="text" class="form-control" name="alamat">

                    </div>
                    <div class="mb-3 ">
                        <label class="form-label">Jenis Kelamin</label>
                        <select name="j_kel" for="nama" class="form-control" placeholder="Jenis Kelamin">

                        <option type="radio" value="0">Laki-laki</option>
                        <option type="radio" value="1">Perempuan</option>

                    </select>

                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nomor Telepon</label>
                        <input type="text" class="form-control" name="no_telp">

                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">E-mail</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">PASSWORD</label>
                        <input type="text" class="form-control" name="password">
                    </div>
                    <div class="mb-3 ">
                        <label class="form-label">Mata Pelajaran</label>
                        <select class="form-control" name="id" id="inputState">
                            <option selected>Pilih Mapel</option>
                            @foreach ($mapel as $m)
                            <option value="{{ $m -> id }}">{{ $m -> namaMapel }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </form>

            </div>
          </div>
        </div>
        </div>

        {{-- MODAL UPDATE GURU --}}
        @foreach ($guru as $g )
        <div class="modal fade" id="updateGuru{{$g->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header text-center">
              <h4 class="modal-title w-100 font-weight-bold">Tambah Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body mx-3">
                <form action="{{route('guru.update', $g->id )}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="NIP" class="form-label">NIP</label>
                        <input type="text" class="form-control" name="NIP" value="{{$g->NIP}}" readonly>

                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">NAMA</label>
                        <input type="text" class="form-control" name="nama" value="{{$g->nama}}">

                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">ALAMAT</label>
                        <input type="text" class="form-control" name="alamat" value="{{$g->alamat}}">

                    </div>
                    <div class="mb-3 ">
                        <label class="form-label">Jenis Kelamin</label>
                        @if ($g->j_kel==0)
                        <input type="text" class="form-control" name="j_kel" value="Laki-laki" readonly>
                        @elseif ($g->j_kel==1)
                        <input type="text" class="form-control" name="j_kel" value="Perempuan" readonly>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nomor Telepon</label>
                        <input type="text" class="form-control" name="no_telp" value="{{$g->no_telp}}">

                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">E-mail</label>
                        <input type="text" class="form-control" name="email" value="{{$g->email}}">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">PASSWORD</label>
                        <input type="text" class="form-control" name="password" value="{{$g->password}}">

                    </div>
                    <div class="mb-3 ">
                        <label class="form-label">Mata Pelajaran</label>
                        <select class="form-control" name="id" id="inputState">
                            <option selected>Pilih Mapel</option>
                            @foreach ($mapel as $m)
                            <option value="{{ $m -> id }}">{{ $m -> namaMapel }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </form>

            </div>
          </div>
        </div>
        </div>
        @endforeach


        {{-- MODAL ADD SISWA --}}
        <div class="modal fade" id="modalTambahSiswa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header text-center">
              <h4 class="modal-title w-100 font-weight-bold">Tambah Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body mx-3">
                <form action="{{route('siswa.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="NISN" class="form-label">NISN</label>
                        <input type="text" class="form-control" name="NISN">
                    </div>
                    <div class="mb-3">
                        <label for="namaSiswa" class="form-label">NAMA</label>
                        <input type="text" class="form-control" name="namaSiswa">
                    </div>
                    <div class="mb-3">
                        <label for="alamatSiswa" class="form-label">ALAMAT</label>
                        <input type="text" class="form-control" name="alamatSiswa">
                    </div>
                    <div class="mb-3">
                        <label for="tglLahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tglLahir">
                    </div>
                    <div class="mb-3 ">
                        <label class="form-label">Jenis Kelamin</label>
                        <select name="j_kelSiswa" for="nama" class="form-control" placeholder="Jenis Kelamin">
                        <option type="radio" value="0">Laki-laki</option>
                        <option type="radio" value="1">Perempuan</option>
                    </select>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nomor Telepon</label>
                        <input type="text" class="form-control" name="no_telpSiswa">

                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">E-mail</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">PASSWORD</label>
                        <input type="text" class="form-control" name="password">
                    </div>

                    <div class="mb-3 ">
                        <label class="form-label">Kelas</label>
                        <select class="form-control" name="id" id="inputState">
                            <option selected>Pilih Kelas</option>
                            @foreach ($kelas as $k)
                            <option value="{{ $k -> id }}">{{ $k -> namaKelas }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
          </div>
        </div>
        </div>

        @foreach ($siswa as $s)
        <div class="modal fade" id="updateSiswa{{$s->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Tambah Data</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body mx-3">
              <form action="{{route('siswa.update', $s->id)}}" method="POST">
                  @csrf
                  @method('PUT')
                  <div class="mb-3">
                      <label for="NISN" class="form-label">NISN</label>
                      <input type="text" class="form-control" name="NISN" value="{{$s->NISN}}">
                  </div>
                  <div class="mb-3">
                      <label for="namaSiswa" class="form-label">NAMA</label>
                      <input type="text" class="form-control" name="namaSiswa" value="{{$s->namaSiswa}}">
                  </div>
                  <div class="mb-3">
                      <label for="alamatSiswa" class="form-label">ALAMAT</label>
                      <input type="text" class="form-control" name="alamatSiswa" value="{{$s->alamatSiswa}}">
                  </div>
                  <div class="mb-3">
                      <label for="tglLahir" class="form-label">Tanggal Lahir</label>
                      <input type="date" class="form-control" name="tglLahir" value="{{$s->tglLahir}}">
                  </div>
                  <div class="mb-3 ">
                      <label class="form-label">Jenis Kelamin</label>
                      @if ($s->j_kelSiswa==0)
                      <input type="text" class="form-control" name="j_kelSiswa" value="Laki-laki" readonly>
                      @elseif ($s->j_kelSiswa==1)
                      <input type="text" class="form-control" name="j_kelSiswa" value="Perempuan" readonly>
                      @endif
                  </select>
                  </div>
                  <div class="mb-3">
                      <label for="nama" class="form-label">Nomor Telepon</label>
                      <input type="text" class="form-control" name="no_telpSiswa" value="{{$s->no_telpSiswa}}">

                  </div>
                  <div class="mb-3">
                      <label for="nama" class="form-label">E-mail</label>
                      <input type="text" class="form-control" name="email" value="{{$s->email}}">
                  </div>
                  <div class="mb-3">
                      <label for="nama" class="form-label">PASSWORD</label>
                      <input type="text" class="form-control" name="password" value="{{$s->password}}">
                  </div>

                  <div class="mb-3 ">
                      <label class="form-label">Kelas</label>
                      <select class="form-control" name="id" id="inputState">
                          <option selected>Pilih Kelas</option>
                          @foreach ($kelas as $k)
                          <option value="{{ $k -> id }}">{{ $k -> namaKelas }}</option>
                          @endforeach
                      </select>
                  </div>
                  <div class="form-group">
                      <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
              </form>
          </div>
        </div>
        </div>
        </div>
        @endforeach



        <div class="modal fade" id="modalTambahMapel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header text-center">
              <h4 class="modal-title w-100 font-weight-bold">Tambah Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body mx-3">
                <form action="{{ route('mapel.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="NIP" class="form-label">ID MATA PELAJARAN</label>
                        <input type="text" class="form-control" name="idMapel">

                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">NAMA MATA PELAJARAN</label>
                        <input type="text" class="form-control" name="namaMapel">
                    </div>
                    <div class="mb-3 ">
                        <label class="form-label">Nama Guru</label>
                        <select class="form-control" name="id" id="inputState">
                            <option selected>Pilih Guru</option>
                            @foreach ($guru as $g)
                            <option value="{{ $g -> id }}">{{ $g -> nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
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
        </div>
        </div>

        @foreach ($mapel as $m)
        <div class="modal fade" id="updateMapel{{$m->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header text-center">
              <h4 class="modal-title w-100 font-weight-bold">Tambah Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body mx-3">
                <form action="{{ route('mapel.update', $m->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="NIP" class="form-label">ID MATA PELAJARAN</label>
                        <input type="text" class="form-control" name="idMapel" value="{{$m->idMapel}}">

                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">NAMA MATA PELAJARAN</label>
                        <input type="text" class="form-control" name="namaMapel"  value="{{$m->namaMapel}}">
                    </div>
                    <div class="mb-3 ">
                        <label class="form-label">Nama Guru</label>
                        <select class="form-control" name="id" id="inputState">
                            <option selected>Pilih Guru</option>
                            @foreach ($guru as $g)
                            <option value="{{ $g -> id }}">{{ $g -> nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
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
        </div>
        </div>
        @endforeach

        <div class="modal fade" id="modalTambahKelas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header text-center">
              <h4 class="modal-title w-100 font-weight-bold">Tambah Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body mx-3">
                <form action="{{ route('kelas.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="NIP" class="form-label">ID Kelas</label>
                        <input type="text" class="form-control" name="idKelas">

                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">NAMA KELAS</label>
                        <input type="text" class="form-control" name="namaKelas">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
          </div>
        </div>
        </div>

        @foreach ($kelas as $k)
        <div class="modal fade" id="updateKelas{{$k->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header text-center">
              <h4 class="modal-title w-100 font-weight-bold">Tambah Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body mx-3">
                <form action="{{ route('kelas.update', $k->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="NIP" class="form-label">ID Kelas</label>
                        <input type="text" class="form-control" name="idKelas"  value="{{$k->idKelas}}">

                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">NAMA KELAS</label>
                        <input type="text" class="form-control" name="namaKelas"  value="{{$k->namaKelas}}">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
          </div>
        </div>
        </div>
        @endforeach

</body>
</html>
