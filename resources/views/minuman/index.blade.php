@extends('layout.happy')
@section('title', 'Edit Absen')
{{-- @section('judulhalaman', 'DATA ABSEN') --}}
@section('content')
<p>Cari Minuman :</p>
<form action="/minuman/cari" method="GET">
	<input type="text" name="cari" placeholder="Cari Minuman .." value="{{ old('cari') }}">
	<input type="submit" value="CARI">
</form>
    <a href="/minuman/tambah" class="text-decoration-none mb-3">Tambah Minuman</a>
	<table class="table table-responsive table-bordered mb-5 pb-5 table-striped ">
		<tr>
			<th>Kode Minuman</th>
			<th>Merk Minuman</th>
			<th>Stock Minuman</th>
			<th>Tersedia</th>
		</tr>
		@foreach($minuman as $m)
		<tr>
			<td>{{ $m->kodeminuman }}</td>
			<td>{{ $m->merkminuman }}</td>
			<td>{{ $m->stockminuman }}</td>
			<td>{{ $m->tersedia }}</td>
			<td>
				<a class="text-decoration-none" href="/minuman/detail/{{ $m->kodeminuman}}">Detail</a>
				|
				<a class="text-decoration-none" href="/minuman/edit/{{ $m->kodeminuman}}">Edit</a>
				|
				<a class="text-decoration-none" href="/minuman/hapus/{{ $m->kodeminuman}}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
	{{ $minuman->links() }}
	Halaman : {{ $minuman->currentPage() }} <br/>
	Jumlah Data : {{ $minuman->total() }} <br/>
	Data Per Halaman : {{ $minuman->perPage() }} <br/>
	@endsection