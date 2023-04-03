@extends( 'admin.AdminHome')
@section ('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Sửa thông tin cán bộ quản lý</h5>

        <!-- Vertical Form -->
        <form enctype="multipart/form-data" class="row g-3" method="POST" action="{{ URL::to('admin/canboquanly/sua',['id' => $CanBoQuanLy->CBQL_id]) }}">
        {{ csrf_field() }}
            <div class="col-12">
                <label for="" class="form-label">Họ tên</label>
                <input value='{{$CanBoQuanLy->hoten}}' type="text" class="form-control" id="hoten" name="hoten">
            </div>
            <div class="col-12">
                <label for="" class="form-label">Số điện thoại</label>
                <input value='{{$CanBoQuanLy->sodienthoai}}' type="text" class="form-control" id="sodienthoai" name="sodienthoai">
            </div>
            <div class="col-12">
                <label for="" class="form-label">Địa chỉ</label>
                <input value='{{$CanBoQuanLy->diachi}}' type="text" class="form-control" id="diachi" name="diachi">
            </div>
            <div class="col-12">
                <label for="" class="form-label">Tên đơn vị</label>
                <select value="{{$CanBoQuanLy->role_name}}" class="" id="user_id" name="user_id" required>
                    <option value="">-- Chọn --</option>
                    @foreach($Role as $value)
                    <option value="{{ $value->id}}">{{ $value->role_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Sửa</button>
            </div>
        </form>

    </div>
</div>

@endsection