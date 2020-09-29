@extends('layouts.master')

@section('content')
        <div class="col-12">
            @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>
            @endif
        <div class="row">
            <div class="col-9">
                <h1>Edit Data Siswa</h1>
            
           <!-- boody -->
        <form action="/siswa/{{$siswa->id}}/update" method="POST">
        {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input name="nama" value="{{$siswa->nama}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
           
            <div class="form-group">
                <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
                <select name="jenis_kelamin"  class="form-control" id="exampleFormControlSelect1">
                <option value="Laki-Laki" @if($siswa->jenis_kelamin == 'Laki-Laki') selected @endif>Laki-Laki</option>
                <option value="Perempuan"  @if($siswa->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Agama</label>
                <input name="agama" value="{{$siswa->agama}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Alamat</label>
                <textarea name="alamat"  class="form-control" id="exampleFormControlTextarea1" rows="3">{{$siswa->alamat}}</textarea>
            </div>
            <button type="submit" class="btn btn-warning float-right">Update</button>
        </form>
        </div>
        </div>
@endsection