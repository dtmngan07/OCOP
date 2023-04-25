<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Trang dành cho doanh nghiệp</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets_user/img/adminicon.png') }}" rel="icon">
    <link href="{{ asset('assets_user/img/adminicon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets_user/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_user/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_user/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_user/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_user/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_user/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_user/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets_user/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="{{ URL::to('dashboard') }}" class="logo d-flex align-items-center">
                <span class="d-none d-lg-block">Trang dành cho doanh nghiệp</span>
            </a>
        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="{{ URL::to('nguoidung') }}">
                        <span class="d-none d-md-block ps-2">
                            Trở về trang chủ
                        </span>
                    </a>
                </li>
                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <span class="d-none d-md-block dropdown-toggle ps-2">
                            {{ Auth::user()->name }}
                        </span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('profile.show') }}">
                                <i class="bi bi-person"></i>
                                <span>{{ __('Profile') }}</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ URL::to('admin/hoso') }}">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}"
                                    @click.prevent="$root.submit();">
                                    <i class="bi bi-box-arrow-right"></i>
                                    {{ __('Log Out') }}
                                </a>
                            </form>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->
            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <main id="main" class="main container-fluild">
        <section class="section profile">
            <div class="row">

                @yield('content')
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>FIT - AGU</span></strong>
        </div>
        <div class="credits">
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets_user/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets_user/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets_user/vendor/chart.js/chart.min.js') }}"></script>
    <script src="{{ asset('assets_user/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets_user/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('assets_user/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets_user/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets_user/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets_user/js/main.js') }}"></script>

</body>

</html>