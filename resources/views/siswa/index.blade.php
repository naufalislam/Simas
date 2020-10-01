@extends('layouts.master')

@section('content')
        <div class="col-12">
            @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>
            @endif
        <div class="row">
            <div class="col-6">
                <br>
                <h1>Data Siswa</h1>
            </div>

            <div class="col-6">
                <br>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
                    Tambah Data Siswa
                </button>
            </div>

            <div class="col-12">
            <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="/siswa">
            <input name="cari" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
            </form>
            </div>

            <div class="col-12 float-center">
            <br>
            <table class="table table-hover table-dark">
                <tr>
                    <td>Nama</td>
                    <td>Jenis Kelamin</td>
                    <td>Agama</td>
                    <td>Alamat</td>
                    <td>Aksi</td>
                </tr>
                @foreach($data_siswa as $siswa)
                <tr>
                    <td>{{$siswa -> nama}}</td>
                    <td>{{$siswa -> jenis_kelamin}}</td>
                    <td>{{$siswa -> agama}}</td>
                    <td>{{$siswa -> alamat}}</td>
                    <td>
                        <a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                        <a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Mau di hapus ?')">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
            </div>
        </div>
        </div>
    </div>


    
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
      <div class="modal-body">
          <!-- boody -->
          <form action="/siswa/create" method="POST">
        {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            
            <div class="form-group">
                <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="exampleInputEmail1">Agama</label>
                <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Alamat</label>
                <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
</div>

@endsection