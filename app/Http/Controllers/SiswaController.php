<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function  index()
    {
        $siswa=Siswa::all();
        return view ('siswa.index',['siswa' =>$siswa]);
      
      }
    public function create(Request $request)
{
  Siswa::create($request->all());
  return redirect('/siswa')->with('Sukses','Data Berhasil Terimput');
 
}
public function edit($id)
{
  $siswa=Siswa::find($id);
 return view('siswa/edit',['siswa' => $siswa]);
}
public function update(Request $request,$id)
{
  $siswa=Siswa::find($id);
  $siswa->update($request ->all());
  return redirect ('/siswa')->with('Sukses,Data Berhasil Terupdate');
}
public function delete($id)
{
  $siswa=Siswa::find($id);
  $siswa->delete($siswa);
  return redirect('/siswa')->with('Sukses','Data Berhasil Terhapus');
}
}