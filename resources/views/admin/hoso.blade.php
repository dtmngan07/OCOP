@extends( 'admin.AdminHome')
@section ('content')
<section class="section profile">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Thông tin tài khoản</h5>

            <!-- Vertical Form -->
            <form class="row g-3">
                <div class="col-12">
                    <label for="" class="form-label">Họ tên</label>
                    <input type="text" class="form-control" id="hoten">
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
</section>
@endsection