@extends('nguoidung.nguoidaidien.index_nguoidaidien')
@section ('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Thông tin người đại diện doanh nghiệp</h5>
        <!-- Vertical Form -->
        <form class="row g-3">
            <div class="col-12">
                <label for="" class="form-label">Họ tên</label>
                <input value='{{ $NguoiDaiDien -> TenNguoiDaiDien}}' type="text" class="form-control" id="TenNguoiDaiDien" disabled>
            </div>
            <div class="col-12">
                <label for="" class="form-label">Số điện thoại</label>
                <input value='{{ $NguoiDaiDien -> SoDienThoai}}' type="text" class="form-control" id="SoDienThoai" disabled>
            </div>
            <div class="col-12">
                <label for="" class="form-label">Địa chỉ</label>
                <input value='{{ $NguoiDaiDien -> DiaChiNguoiDaiDien}}' type="text" class="form-control" id="DiaChiNguoiDaiDien" disabled>
            </div>

            <a href="{{ URL::to('/nguoidung/nguoidaidien/sua') }}" class="btn btn-info"><i class="bi bi-pencil-fill"></i>Cập nhật thông tin</a>
        </form><!-- Vertical Form -->

    </div>
</div>


@endsection