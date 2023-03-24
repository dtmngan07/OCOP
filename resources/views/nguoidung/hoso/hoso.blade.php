@extends('nguoidung.hoso.index_hoso')
@section ('content')
<div class="card">
    <div class="card-body pt-3">
        <!-- Bordered Tabs -->
        <ul class="nav nav-tabs nav-tabs-bordered">

            <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Thông tin chi
                    tiết</button>
            </li>

        </ul>
        <div class="tab-content pt-2">

            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                <h5 class="card-title">Mô tả về doanh nghiệp</h5>
                <p class="small fst-italic">
                    Nội dung về doanh nghiệp
                </p>
                <h5 class="card-title">Thông tin chi tiết</h5>
                <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Tên doanh nghiệp</div>
                    <div class="col-lg-9 col-md-8">{{ $HoSo -> TenDonVi}}</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Tên sản phẩm đăng ký</div>
                    <div class="col-lg-9 col-md-8">{{ $HoSo -> SanPham}}</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Số phiếu đăng ký sản phẩm OCOP
                    </div>
                    <div class="col-lg-9 col-md-8">{{ $HoSo ->SoPhieuDK}}</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Giấy đăng ký kinh doanh</div>
                    <div class="col-lg-9 col-md-8">{{ $HoSo -> GiayDKKD}}</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Ngày đăng ký kinh doanh</div>
                    <div class="col-lg-9 col-md-8">{{ $HoSo -> NgayDKKD}}</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Số đăng ký kinh doanh</div>
                    <div class="col-lg-9 col-md-8">{{ $HoSo -> SoDKKD}}</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Mã sô thuế</div>
                    <div class="col-lg-9 col-md-8">{{ $HoSo -> MaSoThue}}</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Loại hình tổ chức</div>
                    <div class="col-lg-9 col-md-8">{{ $HoSo -> ten}}</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Vốn điều lệ</div>
                    <div class="col-lg-9 col-md-8">{{ $HoSo -> VonDieuLe}}</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Số điện thoại</div>
                    <div class="col-lg-9 col-md-8">{{ $HoSo -> DienThoai}}</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Địa chỉ xưởng</div>
                    <div class="col-lg-9 col-md-8">{{ $HoSo -> DiaChiXuong}}</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Địa chỉ công ty</div>
                    <div class="col-lg-9 col-md-8">{{ $HoSo -> DiaChiCty}}</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8">{{ $HoSo -> Email}}</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Website</div>
                    <div class="col-lg-9 col-md-8">{{ $HoSo -> Website}}</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Người đại diện</div>
                    <div class="col-lg-9 col-md-8">{{ $HoSo -> NguoiDaiDien}}</div>
                </div>

            </div>

        </div>

    </div>
</div>
@endsection