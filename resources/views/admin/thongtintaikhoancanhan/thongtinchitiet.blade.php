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
                    <input value="{{$ThongTinCaNhan->hoten}}" type="text" class="form-control" name="hoten" id="hoten" disabled>
                </div>
                <div class="col-12">
                    <label for="" class="form-label">Số điện thoại</label>
                    <input value="{{$ThongTinCaNhan->sodienthoai}}" type="text" class="form-control" name="sodienthoai" id="sodienthoai" disabled>
                </div>
                <div class="col-12">
                    <label for="" class="form-label">Địa chỉ</label>
                    <input value="{{$ThongTinCaNhan->diachi}}" type="text" class="form-control" name="diachi" id="diachi" disabled>
                </div>

                <div class="col-12">
                    <label for="" class="form-label">Email</label>
                    <input value="{{$ThongTinCaNhan->email}}" type="text" class="form-control" name="email" id="email" disabled>
                </div>

                <div class="text-center">
                <a href="{{ URL::to('/admin/thongtintaikhoancanhan/sua') }}" class="btn btn-info">Cập nhật thông tin cá nhân</a>
                </div>
            </form><!-- Vertical Form -->

        </div>
    </div>
</section>
@endsection