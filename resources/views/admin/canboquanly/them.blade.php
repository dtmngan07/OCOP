@extends( 'admin.AdminHome')
@section ('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Thêm thông tin cán bộ quản lý</h5>

        <!-- Vertical Form -->
        <form enctype="multipart/form-data" class="row g-3" method="POST" action="{{ route('admin.canboquanly.them') }}">
            <div class="col-12">
                @csrf
                <label for="" class="form-label">Họ tên</label>
                <input type="text" class="form-control" id="hoten">
            </div>
            <div class="col-12">
                <label for="" class="form-label">Số điện thoại</label>
                <input type="text" class="form-control" id="sodienthoai">
            </div>
            <div class="col-12">
                <label for="" class="form-label">Địa chỉ</label>
                <input type="text" class="form-control" id="diachi">
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Thêm</button>
            </div>
        </form>

    </div>
</div>

@endsection