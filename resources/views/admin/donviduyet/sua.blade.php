@extends( 'admin.AdminHome')
@section ('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Sửa đơn vị duyệt hồ sơ</h5>

        <!-- Vertical Form -->
        <form action="{{ URL::to('admin/donviduyet/sua',['id' => $DonViDuyet->DonViDuyet_id]) }}" enctype="multipart/form-data" class="row g-3" method="POST">
        {{ csrf_field() }}   
        <div class="col-12">
                <label for="" class="form-label">Tên đơn vị</label>
                <input value="{{$DonViDuyet->tendonvi}}" type="text" class="form-control" id="tendonvi" name="tendonvi">
            </div>
            <div class="col-12">
                <label for="inputNanme4" class="form-label">Số điện thoại</label>
                <input value="{{$DonViDuyet->sodienthoai}}" type="text" class="form-control" id="sodienthoai" name="sodienthoai">
            </div>
            <div class="col-12">
                <label for="inputNanme4" class="form-label">Địa chỉ</label>
                <input value="{{$DonViDuyet->diachi}}"  type="text" class="form-control" id="diachi" name="diachi">
            </div>

            <div class="col-12">
                <label for="" class="form-label">Cấp duyệt</label>
                <select value="" class="form-select" id="cap_duyet_id " name="cap_duyet_id" required>
                    <option value="">-- Chọn --</option>
                    @foreach($CapDuyet as $value)
                        @if ($value->id == $DonViDuyet->cap_duyet_id)
                        <option value="{{ $value->id}}" selected>{{ $value->tencapduyet }}</option>
                        @else
                        <option value="{{ $value->id}}">{{ $value->tencapduyet }}</option>
                        @endif
                    
                    @endforeach
                </select>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Sửa</button>
            </div>
        </form><!-- Vertical Form -->

    </div>
</div>

@endsection