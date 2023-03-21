@extends( 'admin.AdminHome')
@section ('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Thêm đơn vị duyệt hồ sơ</h5>

        <!-- Vertical Form -->
        <form action="{{ URL::to('/admin/donviduyet/them') }}" enctype="multipart/form-data" class="row g-3" method="POST">
        {{ csrf_field() }}   
        <div class="col-12">
                <label for="" class="form-label">Tên đơn vị</label>
                <input type="text" class="form-control" id="tendonvi" name="tendonvi">
            </div>
            <div class="col-12">
                <label for="inputNanme4" class="form-label">Số điện thoại</label>
                <input type="text" class="form-control" id="sodienthoai" name="sodienthoai">
            </div>
            <div class="col-12">
                <label for="inputNanme4" class="form-label">Địa chỉ</label>
                <input type="text" class="form-control" id="diachi" name="diachi">
            </div>

            <div class="col-12">
                <label for="" class="form-label">Tên đơn vị</label>
                <select class="" id="cap_duyet_id " name="cap_duyet_id" required>
                    <option value="">-- Chọn --</option>
                    @foreach($CapDuyet as $value)
                    <option value="{{ $value->id }}">{{ $value->tencapduyet }}</option>
                    @endforeach
                </select>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Thêm</button>
            </div>
        </form><!-- Vertical Form -->

    </div>
</div>

@endsection