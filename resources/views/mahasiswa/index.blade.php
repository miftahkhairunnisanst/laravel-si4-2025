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
    <h1>Ini adalah halaman Mahasiswa</h1>

    <div class="row">
      <div class="col-sm-6">
          <h4>Tabel Mahasiswa</h4>
      </div>
      <div class="col-sm-6" style="text-align: right">
        <a href="/mahasiswa/create"class="btn btn-info btn-sm">Tambah mahasiswa</a>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong> Successfully </strong>{{Session::get('success')}} .
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
              <table class="table table-danger table-sm table-hover table-striped table-bordered text-center mt-2">
          <thead>
            <tr>
              <th>No.</th>
              <th>NIM</th>
              <th>Nama Mahasiswa</th>
              <th>Jenis Kelamin</th>
              <th>Tanggal Lahir</th>
              <th>Alamat</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
          <?php $no=1;?>
          @foreach ($mahasiswa as $m)
             <tr>
              <td>{{$no++}}</td>
              <td>{{$m->npm}}</td>
              <td>{{$m->nama_mahasiswa}}</td>
              <td>{{$m->jk}}</td>
              <td>{{$m->tgl_lahir}}</td>
              <td>{{$m->alamat}}</td>
             </tr> 
          @endforeach
        </table>
      </div>
          </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
