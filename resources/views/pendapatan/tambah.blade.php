
@extends('layout.happy')
@section('title', 'Data Pegawai')
@section('content')

	
	<h3>Data Pendapatan</h3>

	<a href="/pendaptan"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/pendapatan/store" method="post">
		{{ csrf_field() }}
		IDPegawai <input type="number" name="IDPegawai" required="required"> <br/>
		Bulan  <input type="number" name="Bulan" required="required"> <br/>
		Tahun <input type="number" name="Tahun" required="required"> <br/>
		Gaji <input type="number" name="Gaji" required="required"> <br/>
        Tunjangan <input type="number" name="Tunjangan" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
@endsection