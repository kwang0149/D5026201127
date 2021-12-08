
	@extends('layout.happy')
	@section('title', 'Edit Absen')

@section('content')
	<h3>Data Pegawai</h3>
 
	<a href="/pegawai"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
		{{-- Nama <input type="text" name="nama" required="required"> <br/>
		Jabatan <input type="text" name="jabatan" required="required"> <br/>
		Umur <input type="number" name="umur" required="required"> <br/>
		Alamat <textarea name="alamat" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data"> --}}

			<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" name="nama" required="required" class="form-control">
    <div id="emailHelp" class="form-text">Masukkan Nama</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Jabatan</label>
    <input type="text" name="jabatan" required="required" class="form-control">
	<div id="emailHelp" class="form-text">Masukkan Jabatan</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Umur</label>
    <input type="text" name="umur" required="required" class="form-control">
    <div id="emailHelp" class="form-text">Masukkan Umur</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Alamat</label>
    <input type="text" name="alamat" required="required" class="form-control">
    <div id="emailHelp" class="form-text">Masukkan Alamat</div>
  </div>
  <div class="d-grid gap-2 col-6 mx-auto">
                 <button class="btn btn-primary" type="submit">Simpan Data</button>
        </div>

	</form>
	@endsection