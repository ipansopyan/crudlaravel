@extends('template')
@section('content')
<div class="container">
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Data Siswa</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Detail</a></li>
          {{-- <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li class="dropdown-header">Nav header</li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li> --}}
        </ul>
        {{-- <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="./">Default <span class="sr-only">(current)</span></a></li>
          <li><a href="../navbar-static-top/">Static top</a></li>
          <li><a href="../navbar-fixed-top/">Fixed top</a></li>
        </ul> --}}
      </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
  </nav>
<div class="col-md-6 col-ls-6">

  {!! Html::ul($errors->all()) !!}


<form method="post" action="store">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
      <div class="form-group">
        <label for="nama">Nama Lengkap</label>
        <input name="nama_lengkap" type="text" class="form-control" id="nama" placeholder="Nama Lengkap">
      </div>
      <div class="form-group">
        <label for="kelas">Kelas</label>
        <input type="text" class="form-control" id="kelas" placeholder="Kelas" name="kelas">
      </div>
      <div class="form-group">
        <label for="usia">Usia</label>
        <input type="text" class="form-control" id="usia" placeholder="Usia" name="usia">
      </div>
      <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat"></textarea>
      </div>
      <button type="submit" name="button" class="btn btn-primary">Simpan</button>
    </div>
  </div>
@endsection
