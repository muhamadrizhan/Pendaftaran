@extends('layouts.main')
@section ('conten')
<div class="container mt-4">
    <h1>Edit Data Siswa</h1>
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
      {{session('sukses')}}
    </div>  
    @endif
    <div class="row">
    <div class="col-center-12">
   
    <form action="/siswa/{{$siswa->id}}/update"  method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1">Nis</label>
                <input name="nis" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="nis"value="{{$siswa->nis}}">
                    </div>
                    <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input name="nama" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="nama"value="{{$siswa->nama}}">
                    </div>
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                    <select name="jeniskelamin" class="form-control" id="exampleFormControlSelect1">
                    <option value="Laki-Laki" @if($siswa -> jeniskelamin == 'Laki-Laki')selected @endif>Laki-Laki</option>
                    <option value="Perempuan" @if($siswa -> jeniskelamin == 'Perempuan')selected @endif>Perempuan</option>
                    </select>
                    <div class="form-group">
                <label for="exampleInputEmail1">Tempat Lahir</label>
                <input name="tempatlahir" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="tempatlahir"value="{{$siswa->tempatlahir}}">
                    </div>
                    <div class="form-group">
                <label for="exampleInputEmail1">Tanggal Lahir</label>
                <input name="ttl" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="ttl"value="{{$siswa->ttl}}">
                    </div>
                    <div class="form-group">
                <label for="exampleInputEmail1">Alamat</label>
                <input name="alamat" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="alamat"value="{{$siswa->alamat}}">
                    </div>
                    <div class="form-group">
                <label for="exampleInputEmail1">Asal Sekolah</label>
                <input name="asalsekolah" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="asalsekolah"value="{{$siswa->asalsekolah}}">
                    </div>
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">Kelas</label>
                    <select name="kelas" class="form-control" id="exampleFormControlSelect1">
                    <option value="X" @if($siswa -> kelas == 'X')selected @endif>X</option>
                    <option value="XI" @if($siswa -> kelas == 'XI')selected @endif>XI</option>
                    <option value="XII" @if($siswa -> kelas == 'XII')selected @endif>XII</option>
                    </select>
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">Jurusan</label>
                    <select name="jurusan" class="form-control" id="exampleFormControlSelect1">
                    <option value="RPL" @if($siswa -> jurusan == 'RPL')selected @endif>Rekayasa Perangkat Lunak</option>
                    <option value="TKJ" @if($siswa -> jurusan == 'TKJ')selected @endif>Teknik Komputer Dan Jaringan</option>
                    <option value="BDP" @if($siswa -> jurusan == 'BDP')selected @endif>Bisnis Daring Dan Pemasaran</option>
                    <option value="OTKP" @if($siswa -> jurusan == 'OTKP')selected @endif>Otomatisasi Tatakelola Perkantoran</option>
                    <option value="Perhotelan" @if($siswa -> jurusan == 'Perhotelan')selected @endif>Perhotelan</option>
                    <option value="Tataboga" @if($siswa -> jurusan == 'Tataboga')selected @endif>Tataboga</option>
                    <option value="Multimedia" @if($siswa -> jurusan == 'Multimedia')selected @endif>Multimedia</option>
                    </select>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-warning">Update</button>
                </form>
                </div>
                    </div>
                    </div>
                    </div>
                    @endsection
                
        



