{{-- <!DOCTYPE html>
<html>

<head>
    <title>Aplikasi Kepegawaian - @yield('title')</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link
        href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">


    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script
        src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
    </script>
</head>

<body>

    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>

    @yield('judulhalaman')<br>
    @section('konten')
    @show

<footer>Hak Cipta Faizal Johan
</footer>
</body>

</html> --}}

<!DOCTYPE html>
<html>
<head>
    <title>PWEB - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
{{-- CSS and JS dependencies for Tempus Dominus by /Eonasdan --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.1/umd/popper.min.js" integrity="sha512-8jeQKzUKh/0pqnK24AfqZYxlQ8JdQjl9gGONwGwKbJiEaAPkD3eoIjz3IuX4IrP+dnxkchGUeWdXLazLHin+UQ==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/gh/Eonasdan/tempus-dominus@master/dist/js/tempus-dominus.js"></script>
    <link href="https://cdn.jsdelivr.net/gh/Eonasdan/tempus-dominus@master/dist/css/tempus-dominus.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="row m-5">
                
            <aside class="col-3">
                <header>
                    <div class="row">
                        <div class="col text-center">
                            <img src="{{ asset('img/foto-diri.png') }}" class="w-50  rounded-circle border"/>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="float-start ">
                        <h5>5026201127</h5>
                        <h5>C Hong Kwang</h5>
                    </div>
                </div>
                    
                </header>
                
                <div class="row container rounded bg-primary bg-opacity-10 mt-4 p-2">
                    <nav class="navbar navbar-expand align-items-start py-2 sticky-top">
                        <div class="col fw-bold">
                            <div class="align-items-center text-center mb-1 p-1 border-bottom">
                                <span>Menu</span>
                            </div>
                            <ul class="navbar-nav flex-column">
                                <li class="nav-item">
                                    <a href="/pegawai" class="nav-link text-dark">Data Pegawai</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/absen" class="nav-link text-dark">Data Absen</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/pendapatan" class="nav-link text-dark">Data Pendapatan</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link disabled">Minggu Depan</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/minuman" class="nav-link text-dark">Praktikum</a>
                                </li>
                            </ul>
                        </div>
                      </nav>
                </div>
            </aside>
            <div class="col-9">
                <div class="row container-fluid rounded bg-primary bg-opacity-10 p-5">
                    @yield('content')
                    {{-- @show --}}
                </div>
            </div>
        </div>
        <footer class="m-5 text-muted">
            <div class="row text-center">
                <span>&copy; 2021</span>
            </div>
            <div class="row text-center">
                <span>Hak Cipta oleh 5026201127 - Chang Hong Kwang</span>
            </div>
        </footer>
    </div>
</body>
</html>