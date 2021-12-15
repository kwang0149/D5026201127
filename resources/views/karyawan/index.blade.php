@extends('layout.happy')
@section('title', 'Data Karyawan')
{{-- @section('judulhalaman', 'DATA ABSEN') --}}
@section('content')
    <a href="/karyawan/tambah" class="text-decoration-none mb-3">Tambah Karyawan</a>
	<table class="table table-responsive table-bordered mb-5 pb-5 table-striped ">
		<tr>
			<th>Nip</th>
			<th>Nama</th>
			<th>Pangkat</th>
			<th>Gaji</th>
            <th></th>
		</tr>
		@foreach($karyawan as $k)
		<tr>
			<td>{{ $k->NIP }}</td>
			<td>{{ $k->Nama }}</td>
			<td>{{ $k->Pangkat }}</td>
			<td>{{ number_format($k->Gaji, 0, ',', '.') }}</td>
			<td>

				<a class="text-decoration-none" href="/karyawan/hapus/{{ $k->NIP}}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
	@endsection