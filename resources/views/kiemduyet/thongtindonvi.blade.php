@extends( 'kiemduyet.KiemDuyetHome')
@section ('content')
<section class="section profile">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Thông tin đon vị duyệt của bạn</h5>

            <!-- Vertical Form -->
            <form class="row g-3">
                <div class="col-12">
                    <label for="" class="form-label">Tên đơn vị</label>
                    <input value="{{$ThongTin->tendonvi}}" type="text" class="form-control" name="tendonvi" id="tendonvi" readonly>
                </div>

                <div class="col-12">
                    <label for="" class="form-label">Số điện thoại đơn vị</label>
                    <input value="{{$ThongTin->sodienthoai}}" type="text" class="form-control" name="sodienthoai"
                        id="sodienthoai" readonly>
                </div>
                <div class="col-12">
                    <label for="" class="form-label">Địa chỉ đơn vị</label>
                    <input value="{{$ThongTin->diachi}}" type="text" class="form-control" name="diachi"
                        id="diachi" readonly>
                </div>

                <div class="col-12">
                    <label for="" class="form-label">Cấp duyệt</label>
                    <input value="{{$ThongTin->tencapduyet}}" type="text" class="form-control" name="tencapduyet"
                        id="tencapduyet" readonly>
                </div>

                <div class="text-center">
                    <a href="{{ URL::to('/kiemduyet/thongtindonvi/sua') }}" class="btn btn-info">
                        Cập nhật thông tin đơn vị
                    </a>
                </div>
            </form><!-- Vertical Form -->

        </div>
    </div>
</section>
@endsection