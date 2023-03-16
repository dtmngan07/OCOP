@extends('nguoidung.UserHome')
@section ('content')
<section class="section profile">
    <div class="row">
        <div class="col-xl-4">

            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                    <img src="{{ asset('assets/img/profile-img.jpg') }}" alt="Profile" class="rounded-circle">
                    <h2></h2>
                    <div class="social-links mt-2">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-xl-8">

            <div class="card">
                <div class="card-body pt-3">
                    <!-- Bordered Tabs -->
                    <ul class="nav nav-tabs nav-tabs-bordered">

                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab"
                                data-bs-target="#profile-overview">Thông tin</button>
                        </li>

                    </ul>
                    <div class="tab-content pt-2">

                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            
                        </div>
                      
                        <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                            <!-- Profile Edit Form -->
                            <form action="{{ route('nguoidung.capnhathoso') }}" method="POST">
                            {{ csrf_field() }}
                               <!--  sử dụng csrf_field() để bảo vệ biểu mẫu khỏi các cuộc tấn công CSRF -->
                                <div class="row mb-3">
                                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">
                                        Ảnh đại diện
                                    </label>
                                    <div class="col-md-8 col-lg-9">
                                        <img src="assets/img/profile-img.jpg" alt="Profile">
                                        <div class="pt-2">
                                            <a href="#" class="btn btn-primary btn-sm"
                                                title="Upload new profile image"><i class="bi bi-upload"></i></a>
                                            <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i
                                                    class="bi bi-trash"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-4 col-lg-3 col-form-label">Tên doanh nghiệp</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="TenDonVi" type="text" class="form-control" id="TenDonVi"
                                            value="{{ old('TenDonVi') }}">
                                    </div>

                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-4 col-lg-3 col-form-label">Tên sản phẩm đăng ký</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="SanPham" type="text" class="form-control" id="SanPham"
                                            value="{{ old('SanPham') }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-4 col-lg-3 col-form-label">Địa chỉ</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="DiaChi" type="text" class="form-control" id="DiaChi"
                                            value="{{ old('DiaChi') }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-4 col-lg-3 col-form-label">Mã số thuế</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="MaSoThue" type="text" class="form-control" id="MaSoThue" value="{{old('MaSoThue')}}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-4 col-lg-3 col-form-label">Ngày thành lập</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="NgayDKKD" type="date" class="form-control" id="NgayDKKD"
                                            value="{{ old('NgayDKKD') }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-4 col-lg-3 col-form-label">Vốn điều lệ</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="VonDieuLe" type="text" class="form-control" id="VonDieuLe"
                                            value="{{ old('VonDieuLe') }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-4 col-lg-3 col-form-label">Số giấy đăng ký kinh doanh</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="SoDKKD" type="text" class="form-control" id="SoDKKD"
                                            value="{{ old('SoDKKD') }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-4 col-lg-3 col-form-label">Địa chỉ doanh nghiệp</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="DiaChiCty" type="text" class="form-control" id="DiaChiCty"
                                            value="{{ old('DiaChiCty') }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-4 col-lg-3 col-form-label">Số điện thoại doanh nghiệp</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="DienThoai" type="text" class="form-control" id="DienThoai"
                                            value="{{ old('DienThoai') }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="Email" type="text" class="form-control" id="Email"
                                            value="{{ old('Email') }}">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-md-4 col-lg-3 col-form-label">Địa chỉ website</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="Website" type="text" class="form-control" id="Website"
                                            value="{{ old('Website') }}">
                                    </div>
                                </div>

<!--                                 <div class="row mb-3">
                                    <label for="Email" class="col-md-4 col-lg-3 col-form-label">Tên người đại diện</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="email" type="email" class="form-control" id="Email"
                                            value="">
                                    </div>
                                </div> -->

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Lưu</button>
                                </div>
                            </form><!-- End Profile Edit Form -->

                        </div>
                            
                    </div><!-- End Bordered Tabs -->

                </div>
            </div>

        </div>
        
    </div>
</section>
@endsection