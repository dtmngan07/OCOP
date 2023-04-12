@extends('nguoidung.nguoidaidien.index_nguoidaidien')
@section ('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Cập nhật thông tin người đại diện doanhn nghiệp</h5>

        <!-- Vertical Form -->
        <form enctype="multipart/form-data" class="row g-3" method="POST" action="{{ URL::to('/nguoidung/nguoidaidien/sua') }}">
        {{ csrf_field() }}
            @if($NguoiDaiDien != null)
            <input value="{{ $NguoiDaiDien -> id}}" type="text" class="form-control" name="id" hidden>
            <input value="{{ $NguoiDaiDien -> HoSo_id}}" type="text" class="form-control" name="idHoSo" hidden>
            <div class="col-12">
                <label for="" class="form-label">Họ tên</label>
                <input value='{{ $NguoiDaiDien -> TenNguoiDaiDien}}' type="text" class="form-control" name="TenNguoiDaiDien">
            </div>
            <div class="col-12">
                <label for="" class="form-label">Số điện thoại</label>
                <input value='{{ $NguoiDaiDien -> SoDienThoai}}' type="text" class="form-control" name="SoDienThoai">
            </div>
            <div class="col-12">
                <label for="" class="form-label">Địa chỉ</label>
                <input value='{{ $NguoiDaiDien -> DiaChiNguoiDaiDien}}' type="text" class="form-control" name="DiaChiNguoiDaiDien">
            </div>
            @else
            <input value="" type="text" class="form-control" name="id" hidden>
            <input value="" type="text" class="form-control" name="idHoSo" hidden>
            <div class="col-12">
                <label for="" class="form-label">Họ tên</label>
                <input type="text" class="form-control" name="TenNguoiDaiDien" name="TenNguoiDaiDien">
            </div>
            <div class="col-12">
                <label for="" class="form-label">Số điện thoại</label>
                <input type="text" class="form-control"  name="SoDienThoai" name="SoDienThoai">
            </div>
            <div class="col-12">
                <label for="" class="form-label">Địa chỉ</label>
                <input type="text" class="form-control" name="DiaChiNguoiDaiDien" name ="DiaChiNguoiDaiDien">
            </div>
            @endif
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </div>
        </form><!-- Vertical Form -->

    </div>
</div>

@endsection