@extends('nguoidung.UserHome')
@section ('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Cập nhật thông tin doanh nghiệp</h5>

        <!-- Vertical Form -->
        <form enctype="multipart/form-data" class="row g-3" method="POST" action="">
        @csrf    
            <div class="col-12">
                
                <label for="" class="form-label">Tên doanh nghiệp</label>
                <input value="{{ old('TenDonVi') }}" type="text" class="form-control" id="TenDonVi">
            </div>
            <div class="col-12">
                <label for="" class="form-label">Số điện thoại</label>
                <input value="{{ old('DienThoai') }}" type="text" class="form-control" id="DienThoai">
            </div>
            <div class="col-12">
                <label for="" class="form-label">Địa chỉ</label>
                <input value="{{ old('DiaChiCty') }}" type="text" class="form-control" id="DiaChiCty">
            </div>

            <div class="col-12">
                <label for="" class="form-label">Email</label>
                <input value="{{ old('Email') }}" type="text" class="form-control" id="Email">
            </div>

            <div class="col-12">
                <label for="" class="form-label">Website</label>
                <input value="{{ old('Website') }}" type="text" class="form-control" id="Website">
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </div>
        </form>

    </div>
</div>
@endsection