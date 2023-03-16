@extends('nguoidung.UserHome')
@section ('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Thông tin người đại diện doanhn nghiệp</h5>

        <a href="{{ URL::to('/nguoidung/themhosonguoidaidien') }}" class="btn btn-info"><i class="bi bi-plus-lg"></i>Thêm</a>
        <hr>
        <!-- Vertical Form -->
        <form class="row g-3">
            <div class="col-12">
                <label for="" class="form-label">Họ tên</label>
                <input value='{{ $HoSo_NguoiDaiDien -> TenNguoiDaiDien}}' type="text" class="form-control" id="TenNguoiDaiDien" disabled>
            </div>
            <div class="col-12">
                <label for="" class="form-label">Số điện thoại</label>
                <input value='{{ $HoSo_NguoiDaiDien -> SoDienThoai}}' type="text" class="form-control" id="SoDienThoai" disabled>
            </div>
            <div class="col-12">
                <label for="" class="form-label">Địa chỉ</label>
                <input value='{{ $HoSo_NguoiDaiDien -> DiaChi}}' type="text" class="form-control" id="DiaChi" disabled>
            </div>

            <div class="col-12">
                <label for="" class="form-label">Doanh nghiệp đại diện</label>
                <input value='{{ $HoSo_NguoiDaiDien -> TenDonVi}}' type="text" class="form-control" id="TenDonVi" disabled >
            </div>

            <a href="" class="btn btn-info"><i class="bi bi-pencil-fill"></i> Sửa thông tin</a>
        </form><!-- Vertical Form -->

    </div>
</div>


@endsection