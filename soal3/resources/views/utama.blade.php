<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon.png">
    <link href="/assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="col-lg-12">
                    <form action="{{ url('/hitung-predikat') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="hasil_kerja">Hasil Kerja</label>
                            <select name="hasil_kerja" id="hasil_kerja" class="form-control input-default" required>
                                <option value="">-- Pilih Hasil Kerja --</option>
                                <option value="diatas ekspektasi" {{ old('hasil_kerja', $hasil_kerja ?? '') == 'diatas ekspektasi' ? 'selected' : '' }}>Diatas Ekspektasi</option>
                                <option value="sesuai ekspektasi" {{ old('hasil_kerja', $hasil_kerja ?? '') == 'sesuai ekspektasi' ? 'selected' : '' }}>Sesuai Ekspektasi</option>
                                <option value="dibawah ekspektasi" {{ old('hasil_kerja', $hasil_kerja ?? '') == 'dibawah ekspektasi' ? 'selected' : '' }}>Dibawah Ekspektasi</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="perilaku">Perilaku</label>
                            <select name="perilaku" id="perilaku" class="form-control input-flat" required>
                                <option value="">-- Pilih Perilaku --</option>
                                <option value="diatas ekspektasi" {{ old('perilaku', $perilaku ?? '') == 'diatas ekspektasi' ? 'selected' : '' }}>Diatas Ekspektasi</option>
                                <option value="sesuai ekspektasi" {{ old('perilaku', $perilaku ?? '') == 'sesuai ekspektasi' ? 'selected' : '' }}>Sesuai Ekspektasi</option>
                                <option value="dibawah ekspektasi" {{ old('perilaku', $perilaku ?? '') == 'dibawah ekspektasi' ? 'selected' : '' }}>Dibawah Ekspektasi</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Hitung Predikat</button>

                        @if(isset($predikat))
                            <div class="alert alert-success mt-3">
                                Predikat Kinerja: <strong>{{ $predikat }}</strong>
                            </div>
                        @endif

                        @if(isset($hasil_kerja) && isset($perilaku))
                            <div class="alert alert-info mt-3">
                                <strong>Input Anda:</strong><br>
                                Hasil Kerja: {{ ucfirst($hasil_kerja) }}<br>
                                Perilaku: {{ ucfirst($perilaku) }}
                            </div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger mt-3">
                                {{ $errors->first('msg') }}
                            </div>
                        @endif
                    </form>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="/assets/plugins/common/common.min.js"></script>
    <script src="/assets/js/custom.min.js"></script>
    <script src="/assets/js/settings.js"></script>
    <script src="/assets/js/gleek.js"></script>