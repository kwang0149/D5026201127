@extends('layout.happy')
@section('title', 'Edit Absen')

@section('content')

	<h3>Edit Minuman</h3>
 
	<a href="/minuman"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($minuman as $m)
	<form action="/minuman/update" method="post">
		{{ csrf_field() }}
		{{-- <input type="hidden" name="id" value="{{ $p->id }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $p->nama }}"> <br/>
		Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->jabatan }}"> <br/>
		Umur <input type="number" required="required" name="umur" value="{{ $p->umur }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $p->alamat }}</textarea> <br/> --}}
		

	<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Kode Minuman</label>
    <input type="text" name="kodeminuman" required="required" class="form-control" value="{{ $m->kodeminuman }}">
    <div id="emailHelp" class="form-text">Masukkan Kode Minuman</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Merk Minuman</label>
    <input type="text" name="merkminuman" required="required" class="form-control" value="{{ $m->merkminuman}}">
	<div id="emailHelp" class="form-text">Masukkan Merk Minuman</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Stock Minuman</label>
    <input type="text" name="stockminuman" required="required" class="form-control"  value="{{ $m->stockminuman }}">
    <div id="emailHelp" class="form-text">Masukkan Stock Minuman</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tersedia</label>
    <input type="text" name="tersedia" required="required" class="form-control"  value="{{ $m->tersedia }}">
    <div id="emailHelp" class="form-text">Masukkan Status Ketersediaan</div>
  </div>
  <div class="d-grid gap-2 col-6 mx-auto">
                 <button class="btn btn-primary" type="submit">Simpan Data</button>
        </div>
	</form>
	@endforeach
	@endsection