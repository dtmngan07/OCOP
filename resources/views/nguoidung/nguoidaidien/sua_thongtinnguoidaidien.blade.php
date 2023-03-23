@extends('nguoidung.UserHome')
@section ('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Cập nhật thông tin người đại diện doanhn nghiệp</h5>

        <!-- Vertical Form -->
        <form enctype="multipart/form-data" class="row g-3" method="POST" action="{{ URL::to('nguoidung/capnhathosonguoidaidien') }}">
            <div class="col-12">
                <label for="" class="form-label">Họ tên</label>
                <input type="text" class="form-control" id="TenNguoiDaiDien">
            </div>
            <div class="col-12">
                <label for="" class="form-label">Số điện thoại</label>
                <input type="text" class="form-control" id="SoDienThoai">
            </div>
            <div class="col-12">
                <label for="" class="form-label">Địa chỉ</label>
                <input type="text" class="form-control" id="DiaChi">
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </div>
        </form><!-- Vertical Form -->

    </div>
</div>

@endsection