@extends('layout.happy')
@section('title', 'Data Absen')
{{-- @section('judulhalaman', 'DATA ABSEN') --}}

@section('content')

<br />
<br />

<form action="/absen/store" method="post">
    {{ csrf_field() }}
    <div class="container">
            <a href="/absen" class="text-decoration-none"> Kembali</a>

            <div class="row">
                <div class='col-lg'>
                    <div class="form-group">
                        <label for="nama" class="col mb-3 mt-3">Nama Pegawai :</label>
                        <div class='col-sm-4 input-group date' id='nama'>
                            <select class="form-control" name="idpegawai">
                                @foreach($pegawai as $p)
                                    <option value="{{ $p->id }}"> {{ $p->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="input-group mb-3 mt-3">
                <label class="mb-3" for="datetimepicker1">Tanggal :</label>
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
                </div>
                <script type="text/javascript">
                    $(function() {
                        $('#dtpickerdemo').datetimepicker({
                            format: "YYYY-MM-DD hh:mm:ss",
                            "defaultDate": new Date(),
                            locale : "id"
                        });
                    });
                </script>
            <h6 class="mb-3 mt-3">Status</h6>
            <div class="row mb-4">
                <div class="col-2">            
                    <input type="radio" id="h" name="status" value="H">
                    <label for="h">HADIR</label><br>
                </div>
                <div class="col-2">
                    <input type="radio" id="a" name="status" value="A">
                    <label for="a">TIDAK HADIR</label><br>
                </div>
            </div>
            </div>


             <div class="d-grid gap-2 col-6 mx-auto">
                 <button class="btn btn-primary" type="submit">Simpan Data</button>
        </div>
        </div>
        {{-- Status
        <input type="radio" id="h" name="status" value="H">
        <label for="h">HADIR</label><br>
        <input type="radio" id="a" name="status" value="A" checked="checked">
        <label for="a">TIDAK HADIR</label><br>
        <input type="submit" value="Simpan Data"> --}}

    </form>
@endsection

