@extends('layouts.main')
@section ('conten')
<div class="container mt-4">

  
    @if(session('sukses'))
    @endif
    <div class="row">
    <h2>Selamat Datang!Silahkan Isi Data Siswa</h2>
    <div class="col-6">
                <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
         Tambah Data 
            </button>
            <table class="table table-bordered">
        <tr>
            <th>Nis</th>
            <th>Nama </th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Asal Sekolah</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th colspan="2">Aksi</th>
        </tr>
@foreach($siswa as $siswa)
<tr>
    <td>{{$siswa->nis}}</td>
    <td>{{$siswa->nama}}</td>
    <td>{{$siswa->jeniskelamin}}</td>
    <td>{{$siswa->tempatlahir}}</td>
    <td>{{$siswa->ttl}}</td>
    <td>{{$siswa->alamat}}</td>   
    <td>{{$siswa->asalsekolah}}</td>
    <td>{{$siswa->kelas}}</td>
    <td>{{$siswa->jurusan}}</td>
    <td><a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sn">Edit</a></td>
    <td>
        
        <a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sn" onclick="return confrim('Apakah Yakin Data Akan DiHapus')">Hapus</a>
    </td>
      <td>      
  
  </tr>
@endforeach
</table>
            <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="siswa/create" method="POST">
            {{csrf_field()}}
           
            <div class="form-group">
                <label for="exampleInputEmail1">Nis</label>
                <input name="nis" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="nama">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input name="nama" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="nama">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                    <select name="jeniskelamin" class="form-control" id="exampleFormControlSelect1">
                    <option>Perempuan</option>
                    <option>Laki Laki</option>
                    </select>
                    <div class="form-group">
                <label for="exampleInputEmail1">Tempat Lahir</label>
                <input name="tempatlahir" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="nama">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Tanggal Lahir</label>
                <input name="ttl" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="nama">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Alamat</label>
                <input name="alamat" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="nama">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Asal Sekolah</label>
                <input name="asalsekolah" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="nama">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Kelas</label>
                    <select name="kelas" class="form-control" id="exampleFormControlSelect1">
                    <option>X</option>
                    <option>XI</option>
                    <option>XII</option>
                   </select>
                   <div class="form-group">
                    <label for="exampleFormControlSelect1">Jurusan</label>
                    <select name="jurusan" class="form-control" id="exampleFormControlSelect1">
                    <option>Rekayasa Perangkat Lunak</option>
                    <option>Teknik Komputer Dan Jaringan</option>
                    <option>Bisnis Daring dan Pemasaran</option>
                    <option>Otomatisasi Tatakelola Perkantoran</option>
                    <option>Perhotelan</option>
                    <option>Tataboga</option>
                    <option>Multimedia</option>
                </select>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
                </div>
            </div>
        </div>
        </div>
        </div>

     

    </div>
   </div>
   </div>
@endsection

