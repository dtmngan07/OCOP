@extends('nguoidung.hoso.index_hoso')
@section ('content')
<div class="card">
    <div class="card-body">
        <h5 style="text-align:center;" class="card-title">Cập nhật thông tin doanh nghiệp</h5>

        <!-- Vertical Form -->
        <form enctype="multipart/form-data" class="row g-3" method="POST" action="{{ URL::to('/nguoidung/hoso/sua') }}">
            {{ csrf_field() }}
            @if($HoSo != null)
            <div class="col-12">
                <input value="{{$HoSo->id}}" type="text" class="form-control" name="id" hidden>
                <label for="" class="form-label">Tên doanh nghiệp</label>
                <input value="{{ $HoSo->TenDonVi}}" type="text" class="form-control" name="TenDonVi" id="TenDonVi">
            </div>

            <div class="col-12">
                <label for="" class="form-label">Ảnh biểu tượng</label>
                <input value="{{ asset('bieutuong/'.$HoSo ->BieuTuong) }}" type="file" class="form-control"
                    name="BieuTuong" id="BieuTuong">

                <div class="col-sm-12">
                    @if ( $HoSo ->BieuTuong!=NULL)
                    <label for="" class="col-md-12 col-lg-12 col-form-label">
                        File bạn đã tải lên: 
                        <a href="{{ asset('bieutuong/'.$HoSo ->BieuTuong) }}" target="_blank">
                            Bấm vào để tải
                        </a>
                    </label>
                    @else
                    <label for="" class="col-md-12 col-lg-12 col-form-label">
                        Bạn chưa tải lên file
                    </label>
                    @endif
                </div>
            </div>

            <div class="col-12">
                <label for="" class="form-label">Tên sản phẩm đăng ký</label>
                <input value="{{ $HoSo->SanPham}}" type="text" class="form-control" name="SanPham" id="SanPham">
            </div>

            <div class="col-12">
                <label for="" class="form-label">Tên người đại diện</label>
                <input value="{{ $HoSo->NguoiDaiDien}}" type="text" class="form-control" name="NguoiDaiDien"
                    id="TenNguoiDaiDien">
            </div>

            <div class="col-12">
                <label for="" class="form-label">Địa chỉ người đại diện</label>
                <input value="{{ $HoSo->DiaChi_NguoiDaiDien}}" type="text" class="form-control"
                    name="DiaChi_NguoiDaiDien" id="TenNguoiDaiDien">
            </div>

            <div class="col-12">
                <label for="" class="form-label">Phiếu đăng ký</label>
                <input value="{{ $HoSo->SoPhieuDK}}" type="text" class="form-control" name="SoPhieuDK" id="SoPhieuDK">
            </div>

            <div class="col-12">
                <label for="" class="form-label">Giấy đăng ký kinh doanh</label>
                <input value="{{ $HoSo->GiayDKKD}}" type="text" class="form-control" name="GiayDKKD" id="GiayDKKD">
            </div>

            <div class="col-12">
                <label for="" class="form-label">Ngày đăng ký kinh doanh</label>
                <input value="{{ $HoSo->NgayDKKD}}" type="text" class="form-control" name="NgayDKKD" id="NgayDKKD">
            </div>

            <div class="col-12">
                <label for="" class="form-label">Số đăng ký kinh doanh</label>
                <input value="{{ $HoSo->SoDKKD}}" type="text" class="form-control" name="SoDKKD" id="SoDKKD">
            </div>

            <div class="col-12">
                <label for="" class="form-label">Mã số thuế</label>
                <input value="{{ $HoSo->MaSoThue}}" type="text" class="form-control" name="MaSoThue" id="MaSoThue">
            </div>


            <div class="col-12">
                <label for="" class="form-label">Loại hình tố chức</label>
                <select class="form-control" value="{{$HoSo->ten}}"  id="loai_hinh_to_chuc_id" name="loai_hinh_to_chuc_id" required>
                    <option value="">-- Chọn --</option>
                    @foreach($LoaiHinhToChuc as $value)
                    @if ($value->loaihinhtochuc_id == $HoSo->loai_hinh_to_chuc_id)
                    <option value="{{ $value->loaihinhtochuc_id}}" selected>{{ $value->ten}}</option>
                    @else
                    <option value="{{ $value->loaihinhtochuc_id}}">{{ $value->ten}}</option>
                    @endif
                    @endforeach
                </select>
            </div>

            <div class="col-12">
                <label for="" class="form-label">Vốn điều lệ</label>
                <input value="{{ $HoSo->VonDieuLe}}" type="text" class="form-control" name="VonDieuLe" id="VonDieuLe">
            </div>

            <div class="col-12">
                <label for="" class="form-label">Số điện thoại</label>
                <input value="{{ $HoSo->DienThoai}}" type="text" class="form-control" name="DienThoai" id="DienThoai">
            </div>
            <div class="col-12">
                <label for="" class="form-label">Địa chỉ xưởng</label>
                <input value="{{ $HoSo->DiaChiXuong}}" type="text" class="form-control" name="DiaChiXuong"
                    id="DiaChiXuong">
            </div>

            <div class="col-12">
                <label for="" class="form-label">Địa chỉ công ty</label>
                <input value="{{ $HoSo->DiaChiCty}}" type="text" class="form-control" name="DiaChiCty" id="DiaChiCty">
            </div>

            <div class="col-12">
                <label for="" class="form-label">Email</label>
                <input value="{{$HoSo->Email}}" type="text" class="form-control" name="Email" id="Email">
            </div>

            <div class="col-12">
                <label for="" class="form-label">Website</label>
                <input value="{{$HoSo->Website}}" type="text" class="form-control" name="Website" id="Website">
            </div>
            @else
            {{ csrf_field() }}
            <div class="col-12">
                <input value="" type="text" class="form-control" name="id" hidden>
                <label for="" class="form-label">Tên doanh nghiệp</label>
                <input value="" type="text" class="form-control" name="TenDonVi" id="TenDonVi">
            </div>

            <div class="col-12">
                <label for="" class="form-label">Tên sản phẩm đăng ký</label>
                <input value="" type="text" class="form-control" name="SanPham" id="SanPham">
            </div>

            <div class="col-12">
                <label for="" class="form-label">Tên người đại diện</label>
                <input value="" type="text" class="form-control" name="NguoiDaiDien" id="NguoiDaiDien">
            </div>

            <div class="col-12">
                <label for="" class="form-label">Phiếu đăng ký</label>
                <input value="" type="text" class="form-control" name="SoPhieuDK" id="SoPhieuDK">
            </div>

            <div class="col-12">
                <label for="" class="form-label">Giấy đăng ký kinh doanh</label>
                <input value="" type="text" class="form-control" name="GiayDKKD" id="GiayDKKD">
            </div>

            <div class="col-12">
                <label for="" class="form-label">Ngày đăng ký kinh doanh</label>
                <input value="" type="text" class="form-control" name="NgayDKKD" id="NgayDKKD">
            </div>

            <div class="col-12">
                <label for="" class="form-label">Số đăng ký kinh doanh</label>
                <input value="" type="text" class="form-control" name="SoDKKD" id="SoDKKD">
            </div>

            <div class="col-12">
                <label for="" class="form-label">Mã số thuế</label>
                <input value="" type="text" class="form-control" name="MaSoThue" id="MaSoThue">
            </div>

            <div class="col-12">
                <label for="" class="form-label">Loại hình tố chức</label>
                <input value="" type="text" class="form-control" name="ten" id="ten">
            </div>

            <div class="col-12">
                <label for="" class="form-label">Loại hình tố chức</label>
                <select value="" class="" id="loai_hinh_to_chuc_id" name="loai_hinh_to_chuc_id" required>
                    <option value="">-- Chọn --</option>
                    @foreach($LoaiHinhToChuc as $value)
                    <option value="{{ $value->loaihinhtochuc_id}}">{{ $value->ten}}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-12">
                <label for="" class="form-label">Vốn điều lệ</label>
                <input value="" type="text" class="form-control" name="VonDieuLe" id="VonDieuLe">
            </div>

            <div class="col-12">
                <label for="" class="form-label">Số điện thoại</label>
                <input value="" type="text" class="form-control" name="DienThoai" id="DienThoai">
            </div>
            <div class="col-12">
                <label for="" class="form-label">Địa chỉ xưởng</label>
                <input value="" type="text" class="form-control" name="DiaChiXuong" id="DiaChiXuong">
            </div>

            <div class="col-12">
                <label for="" class="form-label">Địa chỉ công ty</label>
                <input value="" type="text" class="form-control" name="DiaChiCty" id="DiaChiCty">
            </div>

            <div class="col-12">
                <label for="" class="form-label">Email</label>
                <input value="" type="text" class="form-control" name="Email" id="Email">
            </div>

            <div class="col-12">
                <label for="" class="form-label">Website</label>
                <input value="" type="text" class="form-control" name="Website" id="Website">
            </div>
            @endif
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </div>
        </form>

    </div>
</div>
@endsection