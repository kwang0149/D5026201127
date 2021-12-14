
@extends('layout.happy')
@section('title', 'Data Pegawai')
@section('content')
	<h2>Tabel Pendapatan</h2>

	<a href="/pendapatan/tambah"> + Tambah Data Baru</a>
	
	<br/>
	<br/>

	<table class="table table-responsive table-bordered mb-5 pb-5 table-striped">
		<tr>
			<th>Nama</th>
			<th>Bulan</th>
			<th>Tahun</th>
			<th>Gaji</th>
			<th>Tunjangan</th>
			<th></th>
		</tr>
		@foreach($pendapatan as $p)
		<tr>
			<td>{{ $p->nama  }}</td>
			<td>{{ $p->Bulan }}</td>
			<td>{{ $p->Tahun  }}</td>
			<td>{{ $p->Gaji  }}</td>
            <td>{{ $p->Tunjangan  }}</td>
			<td>
				<a href="/pendapatan/edit/{{ $p->ID }}">Edit</a>
				|
				<a href="/pendapatan/hapus/{{ $p->ID }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection