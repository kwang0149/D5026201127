<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PendapatanController extends Controller
{
    //
    public function index(){
        // ambil data dari tabel pendapatan
        $pendapatan=DB::table('pendapatan')->get();

        // mengirim data pendapatan ke view index
        return view('pendapatan.index',['pendapatan'=>$pendapatan]);
    }

    public function tambah(){
        return view('pendapatan.tambah');
    }

    // method untuk insert data ke table pegawai
public function store(Request $request)
{
	// insert data ke table pegawai
	DB::table('pendapatan')->insert([
		'IDPegawai' => $request->IDPegawai,
		'Bulan' => $request->Bulan,
		'Tahun' => $request->Tahun,
		'Gaji' => $request->Gaji,
        'Tunjangan'=>$request->Tunjangan
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/pendapatan');
 
}

// method untuk edit data pegawai
public function edit($id)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	$pegawai = DB::table('pendapatan')->where('ID',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('pendapatan.edit',['pendapatan' => $pegawai]);

}

// update data pegawai
public function update(Request $request)
{
	// update data pegawai
	DB::table('pendapatan')->where('ID',$request->id)->update([
		'IDPegawai' => $request->id_pegawai,
		'Bulan' => $request->bulan,
		'Tahun' => $request->tahun,
		'Gaji' => $request->gaji,
        'Tunjangan' => $request->tunjangan
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/pendapatan');
}

// method untuk hapus data pegawai
public function delete($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('pendapatan')->where('ID',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/pendapatan');
}
}
