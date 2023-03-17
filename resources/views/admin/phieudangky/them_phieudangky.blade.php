@extends( 'admin.AdminHome')
@section ('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Thêm phiếu đăng ký</h5>

        <!-- Vertical Form -->
        <form class="row g-3">
            <div class="col-12">
                <label for="" class="form-label">Số phiếu</label>
                <input type="text" class="form-control" id="sophieu">
            </div>
            <div class="col-12">
                <label for="" class="form-label">Ngày đăng ký</label>
                <input type="text" class="form-control" id="ngaydangky">
            </div>

            <div class="col-12">
                <label class="form-label">Chọn đơn vị cấp phiếu</label>
                <div class="col-sm-10">
                    <select id="TenDonVi" class="form-select" aria-label="Default select example">
                        <option selected>Chọn</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
            <!-- <div class="col-12">
                <label for="" class="form-label">Tên đơn vị</label>
                <select class="" id="TenDonVi"
                    name="hangsanxuat_id" required>
                    <option value="">-- Chọn --</option>
                    @foreach($HoSo as $value)
                    <option value="{{ $value->id }}">{{ $value->TenDonVi }}</option>
                    @endforeach
                </select>
            </div> -->

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Thêm</button>
            </div>
        </form><!-- Vertical Form -->

    </div>
</div>

@endsection