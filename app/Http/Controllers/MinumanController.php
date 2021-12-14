<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MinumanController extends Controller
{	
    //
     public function index()
    {
    	// mengambil data dari table pegawai
    	// $pegawai = DB::table('pegawai')->get();
		$minuman = DB::table('minuman')->paginate(3);

    	// mengirim data pegawai ke view index
    	return view('minuman.index',['minuman' => $minuman]);

    }

	// method untuk menampilkan view form tambah pegawai
public function tambah()
{

	// memanggil view tambah
	return view('minuman.tambah');

}

// method untuk insert data ke table pegawai
public function store(Request $request)
{
	// insert data ke table pegawai
	DB::table('minuman')->insert([
		'merkminuman' => $request->merkminuman,
		'stockminuman' => $request->stockminuman,
		'tersedia' => $request->tersedia
	]);
	// alihkan halaman ke halaman minuman
	return redirect('/minuman');

}

// method untuk edit data pegawai
public function edit($kodeminuman)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	$minuman = DB::table('minuman')->where('kodeminuman',$kodeminuman)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('minuman.edit',['minuman' => $minuman]);
}

// update data pegawai
public function update(Request $request)
{
	// update data pegawai
	DB::table('minuman')->where('kodeminuman',$request->kodeminuman)->update([
		'kodeminuman' => $request->kodeminuman,
		'merkminuman' => $request->merkminuman,
		'stockminuman' => $request->stockminuman,
		'tersedia' => $request->tersedia
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/minuman');
}

// method untuk hapus data pegawai
public function hapus($kodeminuman)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('minuman')->where('kodeminuman',$kodeminuman)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/minuman');
}

	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$minuman = DB::table('minuman')
		->where('merkminuman','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data minuman ke view index
		return view('minuman.index',['minuman' => $minuman]);
	}
	
	public function detail($kodeminuman)
    {
        $minuman = DB::table('minuman')->where('kodeminuman', $kodeminuman)->get();

        return view('minuman.detail', ['minuman' => $minuman]);
    }

}
