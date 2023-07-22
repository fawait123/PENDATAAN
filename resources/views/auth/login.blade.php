<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="author" content="Hypeople">
    <meta name="description" content="Responsive, Highly Customizable Dashboard Template" />

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('') }}app-assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('logo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('logo.png') }}">
    <link rel="manifest" href="{{ asset('') }}app-assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="{{ asset('') }}app-assets/favicon/safari-pinned-tab.svg" color="#0010f7">
    <meta name="msapplication-TileColor" content="#0010f7">
    <meta name="theme-color" content="#ffffff">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />

    <!-- Plugin -->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/css/plugin/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/icons/iconly/index.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/icons/remix-icon/index.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/css/colors.css">

    <!-- Base -->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/css/base/typography.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/css/base/base.css">

    <!-- Theme -->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/css/theme/colors-dark.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/css/theme/theme-dark.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/css/custom-rtl.css">

    <!-- Layouts -->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/css/layouts/sider.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/css/layouts/header.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/css/layouts/page-content.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/css/components.css">

    <!-- Pages -->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}app-assets/css/pages/authentication.css">

    <!-- Custom -->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/css/style.css">

    <title>Login - Cikoneng</title>
</head>

<body>
    <div class="row hp-authentication-page">
        <div class="hp-bg-black-20 hp-bg-color-dark-90 col-lg-6 col-12">
            <div class="row hp-image-row h-100 px-8 px-sm-16 px-md-0 pb-32 pb-sm-0 pt-32 pt-md-0">
                <div class="hp-logo-item m-16 m-sm-32 m-md-64 w-auto px-0 col-12">
                    <div class="hp-header-logo d-flex align-items-center">
                        <a href="index.html" class="position-relative">


                            <img class="hp-logo hp-sidebar-visible hp-dark-none" src="{{ asset('') }}logo.png"
                                alt="logo">
                            <img class="hp-logo hp-sidebar-visible hp-dark-block" src="{{ asset('') }}logo.png"
                                alt="logo">
                            <img class="hp-logo hp-sidebar-hidden hp-dir-none hp-dark-none"
                                src="{{ asset('') }}logo.png" alt="logo">
                            <img class="hp-logo hp-sidebar-hidden hp-dir-none hp-dark-block"
                                src="{{ asset('') }}logo.png" alt="logo">
                            <img class="hp-logo hp-sidebar-hidden hp-dir-block hp-dark-none"
                                src="{{ asset('') }}logo.png" alt="logo">
                            <img class="hp-logo hp-sidebar-hidden hp-dir-block hp-dark-block"
                                src="{{ asset('') }}logo.png" alt="logo">
                        </a>
                    </div>
                </div>

                <div class="col-12 px-0">
                    <div class="row h-100 w-100 mx-0 align-items-center justify-content-center">
                        <div class="hp-bg-item text-center mb-32 mb-md-0 px-0 col-12">
                            <img class="hp-dark-none m-auto" src="{{ asset('Formula-rafiki.SVG') }}"
                                style="width:450px" alt="Background Image">
                        </div>
                        <div class="hp-text-item text-center col-xl-9 col-12">
                            <h2 class="hp-text-color-black-100 hp-text-color-dark-0 mx-16 mx-lg-0 mb-16"> MADRASAH
                                ALIYAH TERPADU </h2>
                            <p class="h4 mb-0 fw-normal hp-text-color-black-80 hp-text-color-dark-30"> MA ARRAHMAN -
                                NASOL CIKONENG </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-6 py-sm-64 py-lg-0">
            <div class="row align-items-center justify-content-center h-100 mx-4 mx-sm-n32">
                <div class="col-12 col-md-9 col-xl-7 col-xxxl-5 px-8 px-sm-0 pt-24 pb-48">
                    <h1 class="mb-0 mb-sm-24">Login</h1>
                    <p class="mt-sm-8 mt-sm-0 text-black-60">Welcome back, please login to your account.</p>

                    <form class="mt-16 mt-sm-32 mb-8" action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-16">
                            <label for="loginUsername" class="form-label">Username :</label>
                            <input type="text" class="form-control  @error('email') is-invalid  @enderror"
                                id="loginUsername" name="email">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-16">
                            <label for="loginPassword" class="form-label">Password :</label>
                            <input type="password" class="form-control @error('password') is-invalid  @enderror"
                                id="loginPassword" name="password">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row align-items-center justify-content-between mb-16">
                            <div class="col hp-flex-none w-auto">
                                <div class="form-check">
                                    <input type="checkbox" name="remember" class="form-check-input"
                                        id="exampleCheck1">
                                    <label class="form-check-label ps-4" for="exampleCheck1">Remember me</label>
                                </div>
                            </div>
                            {{--
                            <div class="col hp-flex-none w-auto">
                                <a class="hp-button text-black-80 hp-text-color-dark-40"
                                    href="auth-recover.html">Forgot Password?</a>
                            </div> --}}
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            SIGN IN
                        </button>
                    </form>

                    {{-- <div class="col-12 hp-form-info text-center">
                        <span class="text-black-80 hp-text-color-dark-40 hp-caption me-4">Don’t you have an
                            account?</span>
                        <a class="text-primary-1 hp-text-color-dark-primary-2 hp-caption"
                            href="auth-register.html">Create an account</a>
                    </div> --}}

                    <div class="mt-48 mt-sm-96 col-12">
                        <p class="hp-p1-body text-center hp-text-color-black-60 mb-8"> Copyright 2021 Hypeople LTD.
                        </p>

                        {{-- <div class="row align-items-center justify-content-center mx-n8">
                            <div class="w-auto hp-flex-none px-8 col">
                                <a href="javascript:;" class="hp-text-color-black-80 hp-text-color-dark-40"> Privacy
                                    Policy </a>
                            </div>

                            <div class="w-auto hp-flex-none px-8 col">
                                <a href="javascript:;" class="hp-text-color-black-80 hp-text-color-dark-40"> Term of
                                    use </a>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Plugin -->
    <script src="{{ asset('') }}app-assets/js/plugin/jquery.min.js"></script>
    <script src="{{ asset('') }}app-assets/js/plugin/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('') }}app-assets/js/plugin/swiper-bundle.min.js"></script>
    <script src="{{ asset('') }}app-assets/js/plugin/jquery.mask.min.js"></script>
    <script src="{{ asset('') }}app-assets/js/plugin/autocomplete.min.js"></script>
    <script src="{{ asset('') }}app-assets/js/plugin/moment.min.js"></script>

    <!-- Layouts -->
    <script src="{{ asset('') }}app-assets/js/layouts/header-search.js"></script>
    <script src="{{ asset('') }}app-assets/js/layouts/sider.js"></script>
    <script src="{{ asset('') }}app-assets/js/components/input-number.js"></script>

    <!-- Base -->
    <script src="{{ asset('') }}app-assets/js/base/index.js"></script>

    <!-- Custom -->
    <script src="{{ asset('') }}assets/js/main.js"></script>
</body>

</html>
