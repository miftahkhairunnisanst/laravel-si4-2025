<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Laravel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/mahasiswa">Mahasiswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/profile">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
          </li>
        </ul>

        <form class="d-flex ms-auto" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <div class="container mt-4">
    <h1>Halaman Tambah Mahasiswa</h1>

      <div class="col-sm-12">
        <h4>Form Mahasiswa</h4>

        @if ($errors->any())
            <div class="pt-3">
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $item)
                      <li>{{$item }}</li>
                  @endforeach
                </ul>
              </div>
            </div>
        @endif

        <form action="/mahasiswa" method="POST">
          @csrf
          <div class="row">
            <div class="col-sm-4">
              <label for="">NPM</label>
              <input type="number" name="npm"class="form-control" placeholder="Input NPM"
              value="{{ Session::get('npm')}}">
            </div>
            <div class="col-sm-4">
              <label for="">Nama Mahasiswa</label>
              <input type="text" name="nama_mahasiswa" class="form-control" placeholder="Input Nama Mahasiswa"
              value="{{ Session::get('nama_mahasiswa')}}">
            </div>
            <div class="col-sm-4">
              <label for="">Jenis Kelamin</label>
              <select name="jk" id="" class="form-select">
                <option>L</option>
                <option>P</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-8">
              <div class="row">
                <div class="col-sm-5">
                   <label for="">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" class="form-control" value="{{ Session::get('tgl_lahir')}}">
                </div>
                <div class="col-sm-7">
                  <label for="">Alamat</label>
                  <input type="text" name="alamat" id="" class="form-control"
                  placeholder="Input alamat" value="{{ Session::get('alamat')}}">
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="row mt-4">
            <div class="col-sm-6">
              <button class="btn btn-primary w-100" type="submit">Simpan</button>
            </div>
            <div class="col-sm-6">
              <a href="/mahasiswa"class="btn btn-secondary  w-100">Kembali</a>
            </div>
          </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
