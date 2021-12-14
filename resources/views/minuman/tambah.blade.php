
	@extends('layout.happy')
	@section('title', 'Edit Absen')

@section('content')
	<h3>Data Minuman</h3>
 
	<a href="/minuman"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/minuman/store" method="post">
		{{ csrf_field() }}
		{{-- Nama <input type="text" name="nama" required="required"> <br/>
		Jabatan <input type="text" name="jabatan" required="required"> <br/>
		Umur <input type="number" name="umur" required="required"> <br/>
		Alamat <textarea name="alamat" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data"> --}}


  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Merk Minuman</label>
    <input type="text" name="merkminuman" required="required" class="form-control">
	<div id="emailHelp" class="form-text">Masukkan Merk Minuman</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Stock Minuman</label>
    <input type="number" name="stockminuman" required="required" class="form-control">
    <div id="emailHelp" class="form-text">Masukkan Stock Minuman</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tersedia</label>
    <input type="text" name="tersedia" required="required" class="form-control">
    <div id="emailHelp" class="form-text">Masukkan Ketersedian Produk</div>
  </div>
  <div class="d-grid gap-2 col-6 mx-auto">
                 <button class="btn btn-primary" type="submit">Simpan Data</button>
        </div>

	</form>
	@endsection