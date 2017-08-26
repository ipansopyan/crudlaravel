
@extends('template')
@section('content')


    <div class="container">

      <!-- Static navbar -->
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
      <a href="tambah" class="btn btn-success">Tambah</a>
      <br><br>
        <!-- Main component for a primary marketing message or call to action -->
        <table class="table table-bordered">
          <tr>
          <th>Nama</th>
          <th>Kelas</th>
          <th>Usia</th>
          <th>Alamat</th>
          <th>Opsi</th>
          </tr>

      @if (count($siswa) == 0)
        <tr>
          <td style="text-align:center;" colspan="5">Data Tidak Ada</td>
        </tr>
      @else @foreach ($siswa as $s)
          <tr>
          <td>{{$s->nama_lengkap}}</td>
          <td>{{$s->kelas}}</td>
          <td>{{$s->usia}}</td>
          <td>{{$s->alamat}}</td>
          <td><a href={{'siswa/'.$s->id.'/edit'}}>Edit</a>
              <form action="{{'siswa/'.$s->id}}" method="post">
                <input class="btn btn-link" type="submit" name="submit" value="delete">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="delete">
              </form></td>
        </tr>
        @endforeach
      </table>
      @endif

    </div> <!-- /container -->
@endsection
