<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Trang chủ</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('index/img/logo.jpeg') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('index/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('index/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('index/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('index/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <!--         <a href="{{ URL::to('home') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="bi bi-house-door"></i>Trang chủ</h2>
        </a> -->
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ URL::to('dashboard') }}" class="nav-item nav-link active">Trang chủ</a>
                <a href="http://ocop.gov.vn/" class="nav-item nav-link">Thông tin chương trình</a>
                <a href="https://ocop.angiang.gov.vn/" class="nav-item nav-link">Trang chủ Ocop An Giang</a>

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <span class="d-none d-md-block dropdown-toggle ps-2">
                        Xin chào {{ Auth::user()->name }}
                    </span>
                </a>

                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    <a class="nav-item nav-link" href="{{ route('logout') }}" @click.prevent="$root.submit();">
                        <i class="bi bi-box-arrow-right"></i>
                        {{ __('Đăng xuất') }}
                    </a>
                </form>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="far fa-address-book" style='font-size:50px'></i><hr>
                            <h5 class="mb-3">Thông tin doanh nghiệp</h5><br>
                            <a href="{{ URL::to('/nguoidung/hoso') }}"
                                class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">
                                Xem và cập nhật
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="far fa-edit" style='font-size:50px'></i><hr>
                            <h5 class="mb-3">Cập nhật thông tin mẫu 2</h5><br>
                            <a href="{{ URL::to('nguoidung/mau2') }}"
                                class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">
                                Xem và cập nhật
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="far fa-clipboard" style='font-size:50px'></i><hr>
                            <h5 class="mb-3">Cập nhật thông tin mẫu 3</h5><br>
                            <a href="{{ URL::to('nguoidung/mau3') }}"
                                class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">
                                Xem và cập nhật
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="far fa-file" style='font-size:50px'></i><hr>
                            <h5 class="mb-3">Cập nhật thông tin mẫu 4</h5><br>
                            <a href="{{ URL::to('/nguoidung/capnhatmau4') }}"
                                class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">
                                Xem và cập nhật
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fas fa-user-alt" style='font-size:50px'></i><hr>
                            <h5 class="mb-3">Cập nhật thông tin người đại diện doanh nghiệp</h5><br>
                            <a href="{{ URL::to('/nguoidung/nguoidaidien') }}"
                                class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">
                                Xem và cập nhật
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
    <hr>
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h1 class="mb-4">Hướng dẫn chủ thể xây dựng phương án/dự án sản xuất kinh doanh</h1>
                
                    <a class="btn btn-primary py-3 px-5 mt-2" href="https://ocop.angiang.gov.vn/huong-dan/huong-dan-chu-the-xay-dung-phuong-an-du-an-san-xuat-kinh-doanh/">Xem chi tiết</a>
                </div>

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h1 class="mb-4">Hướng dẫn công bố tiêu chuẩn, quy chuẩn và thủ tục cấp giấy chứng nhận đủ điều kiện an toàn thực phẩm</h1>
                
                    <a class="btn btn-primary py-3 px-5 mt-2" href="https://ocop.angiang.gov.vn/huong-dan/huong-dan-cong-bo-tieu-chuan-quy-chuan-va-thu-tuc-cap-giay-chung-nhan-du-dieu-kien-an-toan-thuc-pham/">Xem chi tiết</a>
                </div>

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h1 class="mb-4">Hướng dẫn một số nội dung triển khai Chu trình OCOP</h1>
                    
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Tuyên truyền, hướng dẫn về Chương trình OCOP</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Nhận ý tưởng sản phẩm</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Nhận phương án sản xuất kinh doanh (phương án kinh doanh)</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Triển khai phương án kinh doanh</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Đánh giá và phân hạng sản phẩm OCOP</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Xúc tiến thương mại</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="https://ocop.angiang.gov.vn/huong-dan/huong-dan-mot-so-noi-dung-trien-khai-chu-trinh-ocop/">Xem chi tiết</a>
                </div>

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h1 class="mb-4">Hướng dẫn thủ tục hồ sơ đăng ký sản phẩm OCOP</h1>
                    
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-12">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Yêu cầu về hồ sơ đánh giá sản phẩm OCOP</p>
                        </div>
                        <div class="col-sm-12">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Sản phẩm tham gia chương trình mỗi xã một sản phẩm – OCOP</p>
                        </div>
                        <div class="col-sm-12">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Cách xác định tiềm năng sản phẩm OCOP</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="https://ocop.angiang.gov.vn/huong-dan/huong-dan-thu-tuc-ho-so-dang-ky-san-pham-ocop/">Xem chi tiết</a>
                </div>

                
                
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Liên hệ</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>82, Tôn Đức Thắng, Mỹ Bình, Long Xuyên, An
                        Giang</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+84 2963 856 188</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>ttcntttt@angiang.gov.vn</p>

                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">DTMNGAN</a>, All Right Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('index/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('index/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('index/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('index/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('index/js/main.js') }}"></script>
</body>

</html>