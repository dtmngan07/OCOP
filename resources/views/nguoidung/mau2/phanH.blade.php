@extends( 'nguoidung.mau2.mau2')
@section ('content')
<main>
    <!--  PHẦN H -->
    <div class="" id="phanH">
        <h3 style="text-align:center;">Dành cho tổ chức/cá nhân đề xuất:</h3>
        <hr><br>
        <form action="{{ URL::to('/nguoidung/capnhatmau2phanH') }}" enctype="multipart/form-data" class="row g-3"
            method="POST">
            {{ csrf_field() }}
            @if ($PhanH != NULL)
            <input value="{{$PhanH->id}}" type="text" class="form-control" name="id" hidden>
            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Tên tổ chức/cá nhân:
                </label>
                <div class="col-md-8 col-lg-9">
                    <input name="TenDonVi" type="text" class="form-control" id="" value="{{$PhanH-> TenDonVi}}" readonly>
                </div>
            </div>
            <hr><br>
            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Xin gửi Phiếu đăng ký này đến OCOP:
                </label>
                <select class="col-md-8 col-lg-9" id="don_vi_duyet_id" name="don_vi_duyet_id">
                    <option value="NULL"{{ old('don_vi_duyet_id') == 'NULL' ? 'selected' : '' }}>-- Chọn --</option>
                    @foreach($DonViDuyet as $value)
                    <option value="{{ $value->id }}"{{ old('don_vi_duyet_id') == $value->id ? 'selected' : '' }}>{{ $value->tendonvi }}</option>
                    @endforeach
                </select>
            </div>
<!-- 
            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Địa chỉ:
                </label>
                <div class="col-md-8 col-lg-9">
                    <input name="" type="text" class="form-control" id="" value="">
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Điện thoại:
                </label>
                <div class="col-md-8 col-lg-9">
                    <input name="" type="text" class="form-control" id="" value="">
                </div>
            </div> -->
            @else
            <input value="{{$PhanH->id}}" type="text" class="form-control" name="id" hidden>
            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Tên tổ chức/cá nhân:
                </label>
                <div class="col-md-8 col-lg-9">
                    <input name="TenDonVi" type="text" class="form-control" id="" value="{{$PhanH-> TenDonVi}}" readonly>
                </div>
            </div>
            <hr><br>
            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Xin gửi Phiếu đăng ký này đến OCOP:
                </label>
                <select class="form-select col-md-8 col-lg-9" id="don_vi_duyet_id" name="don_vi_duyet_id">
                    <option value="NULL"{{ old('don_vi_duyet_id') == 'NULL' ? 'selected' : '' }}>-- Chọn --</option>
                    @foreach($DonViDuyet as $value)
                    <option value="{{ $value->id }}"{{ old('don_vi_duyet_id') == $value->id ? 'selected' : '' }}>{{ $value->tendonvi }}</option>
                    @endforeach
                </select>
            </div>
            @endif
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </div>
        </form>
    </div>
</main>
@endsection