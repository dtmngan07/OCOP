@extends( 'kiemduyet.KiemDuyetHome')
@section ('content')
<section class="section profile">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Cập nhật thông tin tài khoản</h5>

            <!-- Vertical Form -->
            <form action="{{ URL::to('/kiemduyet/thongtindonvi/sua') }}" enctype="multipart/form-data" class="row g-3"
                method="POST">
                {{ csrf_field() }}
                @if($ThongTin != null)
                <input value="{{$ThongTin->id}}" type="text" class="form-control" name="id" hidden>
                <input value="{{$ThongTin->IDCBQL}}" type="text" class="form-control" name="idcanboquanly" hidden>
                <div class="col-12">
                    <label for="" class="form-label">Tên đơn vị</label>
                    <input value="{{$ThongTin->tendonvi}}" type="text" class="form-control" name="tendonvi"
                        id="tendonvi">
                </div>
                <div class="col-12">
                    <label for="" class="form-label">Số điện thoại đơn vị</label>
                    <input value="{{$ThongTin->sodienthoai}}" type="text" class="form-control" name="sodienthoai"
                        id="sodienthoai">
                </div>
                <div class="col-12">
                    <label for="" class="form-label">Địa chỉ đơn vị</label>
                    <input value="{{$ThongTin->diachi}}" type="text" class="form-control" name="diachi" id="diachi">
                </div>

                @else
                <input value="" type="text" class="form-control" name="id" hidden>
                <div class="col-12">
                    <label for="" class="form-label">Tên đơn vị</label>
                    <input value="" type="text" class="form-control" name="tendonvi" id="tendonvi">
                </div>
                <div class="col-12">
                    <label for="" class="form-label">Số điện thoại đơn vị</label>
                    <input value="" type="text" class="form-control" name="sodienthoai" id="sodienthoai">
                </div>
                <div class="col-12">
                    <label for="" class="form-label">Địa chỉ đơn vị</label>
                    <input value="" type="text" class="form-control" name="diachi" id="diachi">
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