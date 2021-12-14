
 @extends('layout.happy')
@section('title', 'Edit Absen')

@section('content')
	<a class="text-decoration-none" href="/pegawai/tambah" >Tambah Pegawai Baru</a>
	
	<br/>
	<br/>
 
	<table class=" table table-responsive table-bordered mb-5 pb-5 table-striped">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $loop->iteration }}</td>
			<td>{{ $p->nama }}</td>
			<td>{{ $p->jabatan }}</td>
			<td>{{ $p->umur }}</td>
			<td>{{ $p->alamat }}</td>
			<td>
				<a class="text-decoration-none" href="/pegawai/edit/{{ $p->id }}">Edit</a>
				|
				<a class="text-decoration-none" href="/pegawai/hapus/{{ $p->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
{{ $pegawai->links()  }}


@endsection
 
	