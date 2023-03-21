@extends( 'admin.AdminHome')
@section ('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Thêm thông tin cán bộ quản lý</h5>

        <!-- Vertical Form -->
        <form enctype="multipart/form-data" method="POST" action="{{ URL::to('/savethem') }}">
        {{ csrf_field() }} 
            <div class="col-12">
                <label for="" class="form-label">Họ tên</label>
                <input type="text" class="form-control" id="hoten" name ="hoten" >
            </div>
            <div class="col-12">
                <label for="" class="form-label">Số điện thoại</label>
                <input type="text" class="form-control" id="sodienthoai" name ="sodienthoai">
            </div>
            <div class="col-12">
                <label for="" class="form-label">Địa chỉ</label>
                <input type="text" class="form-control" id="diachi" name ="diachi" >
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Thêm</button>
            </div>
        </form>

    </div>
</div>

@endsection