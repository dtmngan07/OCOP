@extends('Home.index')
@section('content')
<div class="owl-carousel header-carousel position-relative">
    <div class="owl-carousel-item position-relative">
        <img class="img-fluid" src="{{ asset('index/img/ocop.jpg') }}" alt="">
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
            style="background: rgba(24, 29, 56, .7);">
            <div class="container">
                <div class="row justify-content-start">
                    <div class="col-sm-10 col-lg-8">
                        <h5 class="text-primary text-uppercase mb-3 animated slideInDown">

                        </h5>
                        <h1 class="display-3 text-white animated slideInDown">
                            Trang đăng ký sản phẩm Ocop An Giang
                        </h1>
                        <p class="fs-5 text-white mb-4 pb-2">
                            Chương trình phát triển kinh tế khu vực nông thôn theo hướng phát huy nội lực (trí
                            tuệ sáng tạo, lao động, nguyên liệu, văn hóa…) và gia tăng giá trị, nâng cao thu
                            nhập của cư dân nông thôn, góp phần xây dựng nông thôn mới trên địa bàn tỉnh An
                            Giang
                        </p>
                        <a href="{{ URL::to('login') }}"
                            class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">
                            Đăng nhập
                        </a>
                        <a href="{{ URL::to('register') }}" class="btn btn-light py-md-3 px-md-5 animated slideInRight">
                            Đăng ký
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection