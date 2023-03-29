@extends( 'nguoidung.mau3.mau3')
@section ('content')
<main>
    <!-- PHẦN I -->
    <div class="" id="phanI">
        <h3 style="text-align:center;">PHẦN I. GIỚI THIỆU</h3>
        <hr>
        <form action="{{ URL::to('/nguoidung/capnhatmau3phanI') }}"
            enctype="multipart/form-data" class="row g-3" method="POST">
            {{ csrf_field() }}
            @if ($PhanI != NULL)
            <input value="{{$PhanI->id}}" type="text" class="form-control" name="id" hidden>
            <h4 style="text-align:center;">I. GIỚI THIỆU TỔNG THỂ</h4>
            <div class="row mb-3">
            <label for="" class="col-md-4 col-lg-3 col-form-label">Tên chủ thể:</label>
                <div class="col-md-8 col-lg-9">
                    <input name="TenDonVi" type="text" class="form-control" id=""
                        value="{{$PhanI-> TenDonVi}}" readonly>
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">Địa chỉ trụ sở chính:</label>
                <div class="col-md-8 col-lg-9">
                    <input name="DiaChiCty" type="text" class="form-control" id="" value="{{$PhanI-> DiaChiCty}}" readonly>
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">Địa chỉ xưởng sản xuất:</label>
                <div class="col-md-8 col-lg-9">
                    <input name="DiaChiXuong" type="text" class="form-control" id="" value="{{$PhanI->DiaChiXuong}}" readonly>
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">Vốn điều lệ:</label>
                <div class="col-md-8 col-lg-9">
                    <input name="VonDieuLe" type="text" class="form-control" id="" value="{{$PhanI->VonDieuLe}}" readonly>
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">Số lượng thành viên:</label>
                <div class="col-md-8 col-lg-9">
                    <input name="SoLuongThanhVien" type="text" class="form-control" id="" value="{{$PhanI->SoLuongThanhVien}}">
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">Ngành, nghề sản xuất, kinh doanh:</label>
                <div class="col-md-8 col-lg-9">
                    <input name="NganhNghe" type="text" class="form-control" id="" value="{{$PhanI->NganhNghe}}">
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">Tổ chức nhân sự:</label>
                <div class="col-md-8 col-lg-9">
                    <input name="NhanSu" type="text" class="form-control" id="NhanSu" value="{{$PhanI->NhanSu}}">
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">Tổng diện tích hoạt động sản xuất là</label>
                <div class="col-md-8 col-lg-9">
                    <input name="TongDienTichDat" type="text" class="form-control" id="TongDienTichDat" value="{{$PhanI->TongDienTichDat}}">
                </div>
            </div>
            <hr>
            <h4 style="text-align:center;">II. TỔ CHỨC NHÂN SỰ</h4>
            <br>
            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Sơ đồ tổ chức bộ máy:
                </label>
                <div class="col-md-8 col-lg-9">
                    <input name="SoDoToChuc" type="file" class="form-control">
                </div>

                <label for="" class="col-md-4 col-lg-3 col-form-label">
                </label>
                <div class="col-md-8 col-lg-9">
                    <div class="col-sm-10">
                        <div class="col-sm-12">
                            <label for="" class="col-md-12 col-lg-12 col-form-label">
                                File bạn đã tải lên: <a href="{{ asset('file_doanhnghiep/'.$PhanI ->SoDoToChuc) }}" target="_blank">Bấm vào để tải</a>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Chức năng nhiệm vụ các bộ phận trong sơ đồ tổ chức:
                </label>
                <div class="col-md-8 col-lg-9">
                    <input name="ChucNangNhiemVuNhanSu" type="file" class="form-control" id="" value="">
                </div>

                <label for="" class="col-md-4 col-lg-3 col-form-label">
                </label>
                <div class="col-md-8 col-lg-9">
                    <div class="col-sm-10">
                        <div class="col-sm-12">
                            <label for="" class="col-md-12 col-lg-12 col-form-label">
                                File bạn đã tải lên: <a href="{{ asset('file_doanhnghiep/'.$PhanI ->ChucNangNhiemVuNhanSu) }}" target="_blank">Bấm vào để tải</a>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <input value="{{$PhanI->id}}" type="text" class="form-control" name="id" hidden>
            <h4 style="text-align:center;">I. GIỚI THIỆU TỔNG THỂ</h4>
            <div class="row mb-3">
            <label for="" class="col-md-4 col-lg-3 col-form-label">Tên chủ thể:</label>
                <div class="col-md-8 col-lg-9">
                    <input name="TenDonVi" type="text" class="form-control" id=""
                        value="{{$PhanI-> TenDonVi}}" readonly>
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">Địa chỉ trụ sở chính:</label>
                <div class="col-md-8 col-lg-9">
                    <input name="DiaChiCty" type="text" class="form-control" id="" value="{{$PhanI-> DiaChiCty}}" readonly>
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">Địa chỉ xưởng sản xuất:</label>
                <div class="col-md-8 col-lg-9">
                    <input name="DiaChiXuong" type="text" class="form-control" id="" value="{{$PhanI->DiaChiXuong}}" readonly>
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">Vốn điều lệ:</label>
                <div class="col-md-8 col-lg-9">
                    <input name="VonDieuLe" type="text" class="form-control" id="" value="{{$PhanI->VonDieuLe}}" readonly>
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">Số lượng thành viên:</label>
                <div class="col-md-8 col-lg-9">
                    <input name="SoLuongThanhVien" type="text" class="form-control" id="" value="{{$PhanI->SoLuongThanhVien}}">
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">Ngành, nghề sản xuất, kinh doanh:</label>
                <div class="col-md-8 col-lg-9">
                    <input name="NganhNghe" type="text" class="form-control" id="" value="{{$PhanI->NganhNghe}}">
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">Tổ chức nhân sự:</label>
                <div class="col-md-8 col-lg-9">
                    <textarea name="NhanSu" type="text" class="form-control" id="NhanSu" >{{$PhanI->NhanSu}}</textarea>
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">Tổng diện tích hoạt động sản xuất là</label>
                <div class="col-md-8 col-lg-9">
                    <textarea name="TongDienTichDat" type="text" class="form-control" id="TongDienTichDat">{!!$PhanI->TongDienTichDat!!}</textarea>
                </div>
            </div>
            <hr>
            <h4 style="text-align:center;">II. TỔ CHỨC NHÂN SỰ</h4>
            <br>
            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Sơ đồ tổ chức bộ máy:
                </label>
                <div class="col-md-8 col-lg-9">
                    <input name="SoDoToChuc" type="file" class="form-control">
                </div>

                <label for="" class="col-md-4 col-lg-3 col-form-label">
                </label>
                <div class="col-md-8 col-lg-9">
                    <div class="col-sm-10">
                        <div class="col-sm-12">
                            <label for="" class="col-md-12 col-lg-12 col-form-label">
                                File bạn đã tải lên: <a href="{{ asset('file_doanhnghiep/'.$PhanI ->SoDoToChuc) }}" target="_blank">Bấm vào để tải</a>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Chức năng nhiệm vụ các bộ phận trong sơ đồ tổ chức:
                </label>
                <div class="col-md-8 col-lg-9">
                    <input name="ChucNangNhiemVuNhanSu" type="file" class="form-control" id="" value="">
                </div>

                <label for="" class="col-md-4 col-lg-3 col-form-label">
                </label>
                <div class="col-md-8 col-lg-9">
                    <div class="col-sm-10">
                        <div class="col-sm-12">
                            <label for="" class="col-md-12 col-lg-12 col-form-label">
                                File bạn đã tải lên: <a href="{{ asset('file_doanhnghiep/'.$PhanI ->ChucNangNhiemVuNhanSu) }}" target="_blank">Bấm vào để tải</a>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </div>
        </form>

    </div> <!-- hết phần I -->
    <script src="//cdn.ckeditor.com/4.16.2/full-all/ckeditor.js"></script>
    <script>
    CKEDITOR.replace('NhanSu');
    CKEDITOR.replace('TongDienTichDat');
    </script>
</main>
@endsection