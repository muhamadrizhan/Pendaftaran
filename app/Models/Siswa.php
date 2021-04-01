<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table='table_siswa';
    protected $fillable=['nis','nama','jeniskelamin','tempatlahir','ttl','alamat','asalsekolah','kelas','jurusan'];
}
