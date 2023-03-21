@extends( 'admin.AdminHome')
@section ('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Thêm phiếu đăng ký</h5>

        <!-- Vertical Form -->
        <form action="{{ URL::to('/admin/phieudangky/them') }}" enctype="multipart/form-data" class="row g-3" method="POST">
        @csrf
            <div class="col-12">
                <label for="" class="form-label">Số phiếu</label>
                <input type="text" class="form-control" id="sophieu" name="sophieu">
            </div>
            <div class="col-12">
                <label for="" class="form-label">Ngày đăng ký</label>
                <input type="text" class="form-control" id="ngaydangky" name="ngaydangky">
            </div>

            <div class="col-12">
                <label for="" class="form-label">Tên đơn vị</label>
                <select class="" id="ho_so_id" name="ho_so_id" required>
                    <option value="">-- Chọn --</option>
                    @foreach($PhieuDangKy as $value)
                    <option value="{{ $value->HoSo_id }}">{{ $value->TenDonVi }}</option>
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