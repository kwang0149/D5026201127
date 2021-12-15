
	@extends('layout.happy')
	@section('title', 'Edit Absen')

@section('content')
	<h3>Tambah Karyawan</h3>
 
	<a href="/minuman"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/karyawan/store" method="post">
		{{ csrf_field() }}


  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">NIP</label>
    <input type="text" name="nip" required="required" class="form-control">
	<div id="emailHelp" class="form-text">Masukkan NIP</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" name="nama" required="required" class="form-control">
    <div id="emailHelp" class="form-text">Masukkan Nama</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Pangkat</label>
    <input type="text" name="pangkat" required="required" class="form-control">
    <div id="emailHelp" class="form-text">Masukkan Pangkat</div>
  </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Gaji</label>
    <input type="text" name="gaji" required="required" class="form-control">
    <div id="emailHelp" class="form-text">Masukkan Gaji</div>
  </div>
  <div class="d-grid gap-2 col-6 mx-auto">
                 <button class="btn btn-primary" type="submit">Simpan Data</button>
        </div>

	</form>
	@endsection