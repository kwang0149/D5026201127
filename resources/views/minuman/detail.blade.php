@extends('layout.happy')

@section('content')
        @foreach ($minuman as $m)
            <br>
            <div>
                <label for="merkminuman">Merk Minuman :</label>
                {{ $m->merkminuman }}
                <p>
            </div>

            <div>
                <label for="stocksepedamotor">Stock Minuman :</label>
                {{ $m->stockminuman }}
                <p>
            </div>

            <div>
                <label for="tersedia">Tersedia :</label>
                {{ $m->tersedia }}
                <p>
            </div>
            <br>
            <br>
            <p>


                <a href="/minuman" class="btn btn-primary"> Kembali</a>
                <br>
                </div>
        @endforeach
@endsection