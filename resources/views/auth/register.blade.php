<!DOCTYPE html>
<html lang="en">

<head>

    <title>Registrasi Member | E-Wisata</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="E-Wisata" />
    <meta name="keywords" content="E-Wisata">
    <meta name="author" content="E-Wisata Developer" />

    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('/') }}img/logo-hai2.png" type="image/x-icon">

    <!-- font css -->
    <link rel="stylesheet" href="{{ asset('admin_theme') }}/assets/fonts/font-awsome-pro/css/pro.min.css">
    <link rel="stylesheet" href="{{ asset('admin_theme') }}/assets/fonts/feather.css">
    <link rel="stylesheet" href="{{ asset('admin_theme') }}/assets/fonts/fontawesome.css">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('admin_theme') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('admin_theme') }}/assets/css/customizer.css">

    <style>
        .auth-wrapper.auth-v3 {
            background: linear-gradient(to right, #17c6bd 50%, #fff 0);
        }

        .custom-control-input:checked~.custom-control-label::before {
            color: #fff;
            border-color: #17c6bd !important;
            background-color: #17c6bd !important;
        }
    </style>


</head>

<!-- [ auth-signup ] start -->
<div class="auth-wrapper auth-v3">
    <div class="auth-content ">
        <div class="card">
            <div class="row align-items-stretch text-center">
                <div class="col-md-6 img-card-side ">
                    {{-- <img src="{{ asset('img/bg-mountain2.jpg') }}" alt="" class="img-fluid"> --}}
                    <img src="{{ asset('img/selider23.jpg') }}" alt="" class="img-fluid">
                    <div class="img-card-side-content">
                        <img src="{{ asset('/') }}img/logo-hai2.png" alt="E-Wisata" class="img-fluid"
                            style="max-width: 200px;">
                        {{-- <img src="{{ asset('/') }}img/e-wisata.png" alt="E-Wisata" class="img-fluid"
                            style="max-width: 200px;"> --}}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <div class="text-left">
                            <h4 class="mb-3 f-w-600">Registrasi Akun</h4>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i data-feather="user"></i></span>
                                </div>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" placeholder="Nama Lengkap"
                                    autofocus>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i data-feather="user"></i></span>
                                </div>
                                <input type="text" class="form-control @error('username') is-invalid @enderror"
                                    name="username" value="{{ old('username') }}" required autocomplete="username"
                                    placeholder="Username">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i data-feather="mail"></i></span>
                                </div>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email"
                                    placeholder="Email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i data-feather="lock"></i></span>
                                </div>
                                <input type="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i data-feather="lock"></i></span>
                                </div>
                                <input type="password" id="password-confirm" name="password_confirmation"
                                    class="form-control @error('password-confirm') is-invalid @enderror"
                                    placeholder="Password (Confirm)">
                            </div>

                            <div class="">
                                <button class="btn btn-success btn-block mt-2">Buat Akun</button>
                            </div>
                        </form>
                        <p class="mb-2 text-left">Sudah Punya Akun? <a href="{{ route('login') }}"
                                class="f-w-400">Login</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ auth-signup ] end -->

<!-- Required Js -->
<script src="{{ asset('admin_theme') }}/assets/js/vendor-all.min.js"></script>
<script src="{{ asset('admin_theme') }}/assets/js/plugins/bootstrap.min.js"></script>
<script src="{{ asset('admin_theme') }}/assets/js/plugins/feather.min.js"></script>
<script src="{{ asset('admin_theme') }}/assets/js/pcoded.min.js"></script>
<div class="pct-customizer">
    <div href="#!" class="pct-c-btn">
        <button class="btn btn-light-danger" id="pct-toggler">
            <i data-feather="settings"></i>
        </button>
        <button class="btn btn-light-primary" data-toggle="tooltip" title="Document" data-placement="left">
            <i data-feather="book"></i>
        </button>
        <button class="btn btn-light-success" data-toggle="tooltip" title="Buy Now" data-placement="left">
            <i data-feather="shopping-bag"></i>
        </button>
        <button class="btn btn-light-info" data-toggle="tooltip" title="Support" data-placement="left">
            <i data-feather="headphones"></i>
        </button>
    </div>
    <div class="pct-c-content ">
        <div class="pct-header bg-primary">
            <h5 class="mb-0 text-white f-w-500">Nextro Customizer</h5>
        </div>
        <div class="pct-body">
            <h6 class="mt-2"><i data-feather="credit-card" class="mr-2"></i>Header settings</h6>
            <hr class="my-2">
            <div class="theme-color header-color">
                <a href="#!" class="" data-value="bg-default"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-primary"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-danger"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-warning"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-info"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-success"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-dark"><span></span><span></span></a>
            </div>
            <h6 class="mt-4"><i data-feather="layout" class="mr-2"></i>Sidebar settings</h6>
            <hr class="my-2">
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="cust-sidebar">
                <label class="custom-control-label f-w-600 pl-1" for="cust-sidebar">Light Sidebar</label>
            </div>
            <div class="custom-control custom-switch mt-2">
                <input type="checkbox" class="custom-control-input" id="cust-sidebrand">
                <label class="custom-control-label f-w-600 pl-1" for="cust-sidebrand">Color Brand</label>
            </div>
            <div class="theme-color brand-color d-none">
                <a href="#!" class="active" data-value="bg-primary"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-danger"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-warning"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-info"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-success"><span></span><span></span></a>
                <a href="#!" class="" data-value="bg-dark"><span></span><span></span></a>
            </div>
        </div>
    </div>
</div>
<script>
    // header option
    $('#pct-toggler').on('click', function () {
        $('.pct-customizer').toggleClass('active');

    });
    // header option
    $('#cust-sidebrand').change(function () {
        if ($(this).is(":checked")) {
            $('.theme-color.brand-color').removeClass('d-none');
            $('.m-header').addClass('bg-dark');
        } else {
            $('.m-header').removeClassPrefix('bg-');
            $('.m-header > .b-brand > .logo-lg').attr('src', 'assets/images/logo-dark.svg');
            $('.theme-color.brand-color').addClass('d-none');
        }
    });
    // Header Color
    $('.brand-color > a').on('click', function () {
        var temp = $(this).attr('data-value');
        // $('.header-color > a').removeClass('active');
        // $('.pcoded-header').removeClassPrefix('brand-');
        // $(this).addClass('active');
        if (temp == "bg-default") {
            $('.m-header').removeClassPrefix('bg-');
        } else {
            $('.m-header').removeClassPrefix('bg-');
            $('.m-header > .b-brand > .logo-lg').attr('src', 'assets/images/logo.svg');
            $('.m-header').addClass(temp);
        }
    });
    // Header Color
    $('.header-color > a').on('click', function () {
        var temp = $(this).attr('data-value');
        // $('.header-color > a').removeClass('active');
        // $('.pcoded-header').removeClassPrefix('brand-');
        // $(this).addClass('active');
        if (temp == "bg-default") {
            $('.pc-header').removeClassPrefix('bg-');
        } else {
            $('.pc-header').removeClassPrefix('bg-');
            $('.pc-header').addClass(temp);
        }
    });
    // sidebar option
    $('#cust-sidebar').change(function () {
        if ($(this).is(":checked")) {
            $('.pc-sidebar').addClass('light-sidebar');
            $('.pc-horizontal .topbar').addClass('light-sidebar');
            // $('.m-header > .b-brand > .logo-lg').attr('src', 'assets/images/logo-dark.svg');
        } else {
            $('.pc-sidebar').removeClass('light-sidebar');
            $('.pc-horizontal .topbar').removeClass('light-sidebar');
            // $('.m-header > .b-brand > .logo-lg').attr('src', 'assets/images/logo.svg');
        }
    });
    $.fn.removeClassPrefix = function (prefix) {
        this.each(function (i, it) {
            var classes = it.className.split(" ").map(function (item) {
                return item.indexOf(prefix) === 0 ? "" : item;
            });
            it.className = classes.join(" ");
        });
        return this;
    };
</script>

</html>