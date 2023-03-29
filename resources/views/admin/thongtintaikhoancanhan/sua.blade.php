@extends( 'admin.AdminHome')
@section ('content')
<section class="section profile">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Sửa thông tin tài khoản</h5>

            <!-- Vertical Form -->
            <form  action="{{ URL::to('/admin/thongtintaikhoancanhan/sua') }}" enctype="multipart/form-data" class="row g-3" method="POST">
            {{ csrf_field() }} 
            @if($ThongTinCaNhan != null)
            <input value="{{$ThongTinCaNhan->id}}" type="text" class="form-control" name="id" hidden>
                <div class="col-12">
                    <label for="" class="form-label">Họ tên</label>
                    <input value="{{$ThongTinCaNhan->id}}" type="text" class="form-control" name="id" hidden>
                    <input value="{{$ThongTinCaNhan->hoten}}" type="text" class="form-control" name="hoten" id="hoten" >
                </div>
                <div class="col-12">
                    <label for="" class="form-label">Số điện thoại</label>
                    <input value="{{$ThongTinCaNhan->sodienthoai}}" type="text" class="form-control" name="sodienthoai" id="sodienthoai">
                </div>
                <div class="col-12">
                    <label for="" class="form-label">Địa chỉ</label>
                    <input value="{{$ThongTinCaNhan->diachi}}" type="text" class="form-control" name="diachi" id="diachi">
                </div>

                <div class="col-12">
                    <label for="" class="form-label">Email</label>
                    <input value="{{$ThongTinCaNhan->email}}" type="text" class="form-control" name="email" id="email">
                </div>
                @else
                <input value="" type="text" class="form-control" name="id" hidden>
                <div class="col-12">
                    <label for="" class="form-label">Họ tên</label>
                    <input value="" type="text" class="form-control" name="hoten" id="hoten" >
                </div>
                <div class="col-12">
                    <label for="" class="form-label">Số điện thoại</label>
                    <input value="" type="text" class="form-control" name="sodienthoai" id="sodienthoai">
                </div>
                <div class="col-12">
                    <label for="" class="form-label">Địa chỉ</label>
                    <input value="" type="text" class="form-control" name="diachi" id="diachi">
                </div>

                <div class="col-12">
                    <label for="" class="form-label">Email</label>
                    <input value="{{$user->email}}" type="text" class="form-control" name="email" id="email" readonly>
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