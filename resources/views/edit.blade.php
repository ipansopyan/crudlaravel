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
          </nav>
          <div class="col-md-6 col-ls-6">
            <form  method="POST" action="update">
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                  <label for="">Nama Lengkap</label>
                  <input name="nama_lengkap" type="text" class="form-control" id="" placeholder="" value="{{$siswa->nama_lengkap}}">
                  <p class="help-block">Help text here.</p>
                </div>
                <div class="form-group">
                  <label for="">Kelas</label>
                  <input name="kelas" type="text" class="form-control" id="" placeholder="" value="{{$siswa->kelas}}">
                  <p class="help-block">Help text here.</p>
                </div>
                <div class="form-group">
                  <label for="">Usia</label>
                  <input name="usia" type="text" class="form-control" id="" placeholder="" value="{{$siswa->usia}}">
                  <p class="help-block">Help text here.</p>
                </div>
                <div class="form-group">
                  <label for="">Alamat</label>
                  <textarea name="alamat" class="form-control" name="name" rows="8" cols="80">{{$siswa->alamat}}</textarea>
                  <p class="help-block">Help text here.</p>
                </div>
                <button class="btn btn-success" type="submit" class="btn btn-primarry">simpan</button>
                {{ csrf_field() }}

              </form>
        </div>
    </div>
@endsection
