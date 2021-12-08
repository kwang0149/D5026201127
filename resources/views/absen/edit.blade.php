@extends('layout.happy')
@section('title', 'Edit Absen')
{{-- @section('judulhalaman', 'DATA ABSEN') --}}

@section('content')
    

    <br />
    <br />
    
	

	<br/>
	<br/>
    
	@foreach($absen as $a)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $a->ID }}">
        <div class="container">
             <h3>{{ $status }}</h3>
            <a class="text-decoration-none" href="/absen"> Kembali</a>
            <div class="row">
                <div class='col'>
                    <div class="form-group">

                        
                        <div class="row"> <label for="nama" class="control-label mb-3 mt-3">Nama Pegawai :</label></div>
                       
                        <div class='input-group date' id='nama'>
                            <select class="form-control" name="idpegawai">
                                @foreach($pegawai as $p )
                                    <option value="{{ $p->id }}" @if($p->id===$a->IDPegawai) selected="selected" @endif> {{ $p->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>



                <div class="input-group mb-3">
                <label class="mb-3 mt-3" for="datetimepicker1">Tanggal :</label>
                <div class='input-group' id='datetimepicker1' data-td-target-input='nearest' data-td-target-toggle='nearest'>
                    <input id='datetimepicker1Input' type='text' class='form-control' name="tanggal" data-td-target='#datetimepicker1' required/>
                    <span class='input-group-text' data-td-target='#datetimepicker1' data-td-toggle='datetimepicker'>
                        <span class='fas fa-calendar'></span>
                    </span>
                </div>
                <script>
                    new tempusDominus.TempusDominus(document.getElementById('datetimepicker1'), {
                        hooks: {
                            inputFormat: (context, date) => {
                            return moment(date).format('YYYY-MM-DD hh:mm:ss')
                            }
                        }
                    });
                </script>
            </div>
            <h6 class="mb-3">Status</h6>
            <div class="row mb-4">
                <div class="col-2">            
                    <input type="radio" id="h" name="status" value="H" @if($a->Status==='H') checked="checked" @endif>
                    <label for="h">HADIR</label><br>
                </div>
                <div class="col-2">
                    <input type="radio" id="a" name="status" value="A" @if($a->Status==='A') checked="checked" @endif>
                    <label for="a">TIDAK HADIR</label><br>
                </div>
            </div>
        </div>


        

        <div class="d-grid gap-2 col-6 mx-auto">
                 <button class="btn btn-primary" type="submit">Simpan Data</button>
        </div>
        
	</form>
	@endforeach

    @endsection
