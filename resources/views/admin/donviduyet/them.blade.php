@extends( 'admin.AdminHome')
@section ('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Thêm đơn vị duyệt hồ sơ</h5>

        <!-- Vertical Form -->
        <form class="row g-3">
            <div class="col-12">
                <label for="" class="form-label">Tên đơn vị</label>
                <input type="text" class="form-control" id="tendonvi">
            </div>
            <div class="col-12">
                <label for="inputNanme4" class="form-label">Số điện thoại</label>
                <input type="text" class="form-control" id="sodienthoai">
            </div>
            <div class="col-12">
                <label for="inputNanme4" class="form-label">Địa chỉ</label>
                <input type="text" class="form-control" id="diachi">
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Sửa</button>
            </div>
        </form><!-- Vertical Form -->

    </div>
</div>

@endsection