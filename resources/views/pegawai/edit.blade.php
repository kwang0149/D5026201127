@extends('layout.happy')
@section('title', 'Edit Absen')

@section('content')

	<h3>Edit Pegawai</h3>
 
	<a href="/pegawai"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		{{-- <input type="hidden" name="id" value="{{ $p->id }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $p->nama }}"> <br/>
		Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->jabatan }}"> <br/>
		Umur <input type="number" required="required" name="umur" value="{{ $p->umur }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $p->alamat }}</textarea> <br/> --}}
		

	<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama</label>
    <input type="text" name="nama" required="required" class="form-control" value="{{ $p->nama }}">
    <div id="emailHelp" class="form-text">Masukkan Nama</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Jabatan</label>
    <input type="text" name="jabatan" required="required" class="form-control" value="{{ $p->jabatan}}">
	<div id="emailHelp" class="form-text">Masukkan Jabatan</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Umur</label>
    <input type="text" name="umur" required="required" class="form-control"  value="{{ $p->umur }}">
    <div id="emailHelp" class="form-text">Masukkan Umur</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Alamat</label>
    <input type="text" name="alamat" required="required" class="form-control"  value="{{ $p->alamat }}">
    <div id="emailHelp" class="form-text">Masukkan Alamat</div>
  </div>
  <div class="d-grid gap-2 col-6 mx-auto">
                 <button class="btn btn-primary" type="submit">Simpan Data</button>
        </div>
	</form>
	@endforeach
	@endsection