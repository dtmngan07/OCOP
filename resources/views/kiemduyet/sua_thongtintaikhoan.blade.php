@extends( 'kiemduyet.KiemDuyetHome')
@section ('content')
<section class="section profile">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Cập nhật thông tin tài khoản</h5>

            <!-- Vertical Form -->
            <form  action="{{ URL::to('/kiemduyet/thongtintaikhoancanhan/sua') }}" enctype="multipart/form-data" class="row g-3" method="POST">
            {{ csrf_field() }} 
            @if($ThongTinCaNhan != null)
                <input value="{{$ThongTinCaNhan->CBQLID}}" type="text" class="form-control" name="CBQLID" hidden>
                <div class="col-12">
                    <label for="" class="form-label">Họ tên cán bộ quản lý đơn vị</label>
                    <input value="{{$ThongTinCaNhan->hoten}}" type="text" class="form-control" name="hoten" id="hoten" >
                </div>
                <div class="col-12">
                    <label for="" class="form-label">Số điện thoại cán bộ quản lý đơn vị</label>
                    <input value="{{$ThongTinCaNhan->sodienthoaiCBQL}}" type="text" class="form-control" name="sodienthoaiCBQL" id="sodienthoai">
                </div>
                <div class="col-12">
                    <label for="" class="form-label">Địa chỉ cán bộ quản lý đơn vị</label>
                    <input value="{{$ThongTinCaNhan->diachiCBQL}}" type="text" class="form-control" name="diachiCBQL" id="diachi">
                </div>

                @else
                <input value="" type="text" class="form-control" name="CBQLID" hidden>
                <div class="col-12">
                    <label for="" class="form-label">Họ tên cán bộ quản lý đơn vị</label>
                    <input value="" type="text" class="form-control" name="hoten" id="hoten" >
                </div>
                <div class="col-12">
                    <label for="" class="form-label">Số điện thoại cán bộ quản lý đơn vị</label>
                    <input value="" type="text" class="form-control" name="sodienthoaiCBQL" id="sodienthoai">
                </div>
                <div class="col-12">
                    <label for="" class="form-label">Địa chỉ cán bộ quản lý đơn vị</label>
                    <input value="" type="text" class="form-control" name="diachiCBQL" id="diachi">
                </div>

                @endif

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                </div>
            </form><!-- Vertical Form -->

        </div>
    </div>
</section>
@endsection