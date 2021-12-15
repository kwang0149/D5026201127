<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class KaryawanController extends Controller
{
    //
      public function index()
    {

		$karyawan = DB::table('karyawan1')->get();

    	// mengirim data pegawai ke view index
    	return view('karyawan.index',['karyawan' => $karyawan]);

    }

	// method untuk menampilkan view form tambah pegawai
public function tambah()
{

	// memanggil view tambah
	return view('karyawan.tambah');

}

// method untuk insert data ke table pegawai
public function store(Request $request)
{
	// insert data ke table pegawai
	DB::table('karyawan1')->insert([
		'NIP' => $request->nip,
		'Nama' => $request->nama,
		'Pangkat' => $request->pangkat,
        'Gaji' => $request->gaji
	]);
	// alihkan halaman ke halaman minuman
	return redirect('/karyawan');

}

public function hapus($NIP)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('karyawan1')->where('NIP',$NIP)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/karyawan');
}


}
