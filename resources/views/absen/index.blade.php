@extends('layout.happy')
@section('title', 'Edit Absen')
{{-- @section('judulhalaman', 'DATA ABSEN') --}}
@section('content')
    <a href="/absen/tambah" class="text-decoration-none mb-3">Tambah Absen</a>
	<table class="table table-responsive table-bordered mb-5 pb-5 table-striped ">
		<tr>
			<th>ID Pegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $a)
		<tr>
			<td>{{ $a->IDPegawai }}</td>
			<td>{{ $a->Tanggal }}</td>
			<td>{{ $a->Status }}</td>
			<td>
				<a class="text-decoration-none" href="/absen/edit/{{ $a->ID}}">Edit</a>
				|
				<a class="text-decoration-none" href="/absen/hapus/{{ $a->ID}}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
	@endsection

