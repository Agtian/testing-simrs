<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>APM | SIMRS</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
</head>
<body class="bg-light wrapper">
    <nav class="navbar navbar-expand navbar-primary navbar-dark">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item d-none d-sm-inline-block">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="nav-icon fa fa-window-maximize"></i> Fullscreen
                </a>
            </li>
        </ul>
    </nav>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-5">
                <h4 class="display-4 font-weight-bold">Selamat Datang</h4>
                <h4 class="display-4 font-weight-normal">Di RSUD KELET Provinsi Jawa Tengah</h4>
                <h5>Silahkan pilih menu dibawah ini</h5>
            </div>

            <div class="col-lg-6 mt-5">
                <a href="/apm/pasienBaru">
                    <div class="small-box bg-indigo">
                        <div class="inner text-center">
                            <h3>PASIEN BARU </h3>
                        </div>
                        <div class="small-box-footer">
                            Untuk pasien yang belum memiliki nomor rekam medis atau<br> belum pernah periksa di Poliklinik Rawat Jalan RSUD Kelet <i class="fas fa-arrow-circle-right"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 mt-5">
                <a href="/apm/pasienLama">
                    <div class="small-box bg-success">
                        <div class="inner text-center">
                            <h3>PASIEN LAMA</h3>
                        </div>
                        <div class="small-box-footer">
                            Untuk pasien yang memliki nomor rekam medis <br> di RSUD Kelet <i class="fas fa-arrow-circle-right"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
    
</body>
</html>