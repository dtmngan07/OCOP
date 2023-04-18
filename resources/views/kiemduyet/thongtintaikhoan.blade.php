@extends( 'kiemduyet.KiemDuyetHome')
@section ('content')
<section class="section profile">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Thông tin tài khoản</h5>

            <!-- Vertical Form -->
            <form class="row g-3">
            <input value="{{$ThongTinCaNhan->CBQLID}}" type="text" class="form-control" name="id" hidden>
                <div class="col-12">
                    <label for="" class="form-label">Họ tên cán bộ quản lý đơn vị</label>
                    <input value="{{$ThongTinCaNhan->hoten}}" type="text" class="form-control" name="hoten" id="hoten">
                </div>
                <div class="col-12">
                    <label for="" class="form-label">Số điện thoại cán bộ quản lý đơn vị</label>
                    <input value="{{$ThongTinCaNhan->sodienthoaiCBQL}}" type="text" class="form-control" name="sodienthoaiCBQL"
                        id="sodienthoai">
                </div>
                <div class="col-12">
                    <label for="" class="form-label">Địa chỉ cán bộ quản lý đơn vị</label>
                    <input value="{{$ThongTinCaNhan->diachiCBQL}}" type="text" class="form-control" name="diachiCBQL"
                        id="diachi">
                </div>

                <div class="text-center">
                    <a href="{{ URL::to('/kiemduyet/thongtintaikhoancanhan/sua') }}" class="btn btn-info">Cập nhật thông
                        tin cá nhân</a>
                </div>
            </form><!-- Vertical Form -->

        </div>
    </div>
</section>
@endsection