@extends( 'admin.AdminHome')
@section ('content')
<section class="section profile">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                        <img src="{{ asset('bieutuong/'.$HoSo ->BieuTuong) }}" alt="Profile" class="">
                        <h2></h2>
                        <div class="social-links mt-2">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                </div>
                <div class="text-center">
                    <a href="{{ URL::to('') }}" class="btn btn-secondary rounded-pill">Xem thông tin mẫu 2</a>
                </div>
                <br>
                <div class="text-center">
                    <a href="{{ URL::to('') }}" class="btn btn-info rounded-pill">Xem thông tin mẫu 3</a>
                </div>
                <br>
                <div class="text-center">
                    <a href="{{ URL::to('') }}" class="btn btn-success rounded-pill">Xem thông tin mẫu 4</a>
                </div>
            </div>

            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">

                            <li class="nav-item">
                                <p class="nav-link active" data-bs-toggle="tab"
                                    data-bs-target="#profile-overview" readonly>Thông tin chi tiết</p>
                            </li>


                        </ul>
                        <div class="tab-content pt-2">

                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                <h5 class="card-title">Thông tin chi tiết</h5>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Tên doanh nghiệp</div>
                                    <div class="col-lg-9 col-md-8">{{ $HoSo -> TenDonVi}}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Tên sản phẩm đăng ký</div>
                                    <div class="col-lg-9 col-md-8">{{ $HoSo -> SanPham}}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Số phiếu đăng ký sản phẩm OCOP
                                    </div>
                                    <div class="col-lg-9 col-md-8">{{ $HoSo ->sophieu }}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Giấy đăng ký kinh doanh</div>
                                    <div class="col-lg-9 col-md-8">{{ $HoSo -> GiayDKKD}}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Ngày đăng ký kinh doanh</div>
                                    <div class="col-lg-9 col-md-8">{{ $HoSo -> NgayDKKD}}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Số đăng ký kinh doanh</div>
                                    <div class="col-lg-9 col-md-8">{{ $HoSo -> SoDKKD}}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Mã sô thuế</div>
                                    <div class="col-lg-9 col-md-8">{{ $HoSo -> MaSoThue}}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Loại hình tổ chức</div>
                                    <div class="col-lg-9 col-md-8">{{ $HoSo -> ten}}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Vốn điều lệ</div>
                                    <div class="col-lg-9 col-md-8">{{ $HoSo -> VonDieuLe}}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Số điện thoại</div>
                                    <div class="col-lg-9 col-md-8">{{ $HoSo -> DienThoai}}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Địa chỉ xưởng</div>
                                    <div class="col-lg-9 col-md-8">{{ $HoSo -> DiaChiXuong}}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Địa chỉ công ty</div>
                                    <div class="col-lg-9 col-md-8">{{ $HoSo -> DiaChiCty}}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Email</div>
                                    <div class="col-lg-9 col-md-8">{{ $HoSo -> Email}}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Website</div>
                                    <div class="col-lg-9 col-md-8">{{ $HoSo -> Website}}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Người đại diện</div>
                                    <div class="col-lg-9 col-md-8">{{ $HoSo -> NguoiDaiDien}}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Địa chỉ người đại diện</div>
                                    <div class="col-lg-9 col-md-8">{{ $HoSo -> DiaChi_NguoiDaiDien}}</div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!-- Biểu mẫu số 2 -->
        <h1 style="text-align:center;">BIỂU SỐ 02: PHIẾU ĐĂNG KÝ SẢN PHẨM ĐÃ CÓ</h1>
        <section class="">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">

                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#phanA">PhầnA</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#phanB">Phần B</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#phanC">Phần C</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#phanD">Phần D</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#phanE">Phần E</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#phanG">Phần G</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#phanH">Phần H</a>
                            </li>
                        </ul>
                        <div class="tab-content pt-2">
                            <!-- PHẦN A -->

                            <div class="tab-pane fade show active pt-3" id="phanA">
                                <h3 style="text-align:center;">DÀNH CHO CÁN BỘ QUẢN LÝ CHƯƠNG TRÌNH OCOP</h3>
                                <hr>
                                <form>
                                    <div class="row mb-3">
                                        <label for="" class="col-md-4 col-lg-3 col-form-label">Phiếu số:</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="sophieu" type="text" class="form-control" id=""
                                                value="{{$HoSo ->sophieu}}" readonly>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="" class="col-md-4 col-lg-3 col-form-label">Ngày nhận:</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="ngaydangky" type="text" class="form-control" id=""
                                                value="{{$HoSo ->ngaydangky}}" readonly>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="" class="col-md-4 col-lg-3 col-form-label">Đơn vị tiếp nhận tiếp
                                            nhận:</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="TenDonVi" type="text" class="form-control" id=""
                                                value="{{$HoSo ->TenDonVi}}" readonly>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <!-- PHẦN B -->
                            <div class="tab-pane fade pt-3" id="phanB">
                                <h3 style="text-align:center;">THÔNG TIN VỀ CHỦ THỂ</h3>
                                <hr>
                                <form>
                                    <div class="row mb-3">
                                        <label for="" class="col-md-4 col-lg-3 col-form-label">Tên chủ thể:</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="TenDonVi" type="text" class="form-control" id=""
                                                value="{{$HoSo-> TenDonVi}}" readonly>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="" class="col-md-4 col-lg-3 col-form-label">Ngày thành lập/đăng ký
                                            kinh doanh:</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="NgayDKKD" type="text" class="form-control" id=""
                                                value="{{$HoSo->NgayDKKD }}" readonly>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="" class="col-md-4 col-lg-3 col-form-label">Số đăng ký:</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="SoDKKD" type="text" class="form-control" id=""
                                                value="{{$HoSo-> SoDKKD}}" readonly>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="" class="col-md-4 col-lg-3 col-form-label">Loại hình tổ chức công
                                            ty:</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="ten" type="text" class="form-control" id=""
                                                value="{{$HoSo->ten }}" readonly>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="" class="col-md-4 col-lg-3 col-form-label">Tên người điều hành chủ
                                            thể sản xuất:</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="NguoiDaiDien" type="text" class="form-control" id=""
                                                value="{{$HoSo->	NguoiDaiDien }}" readonly>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="" class="col-md-4 col-lg-3 col-form-label">Địa chỉ thường trú của
                                            người điều hành:</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="DiaChi_NguoiDaiDien" type="text" class="form-control" id=""
                                                value="{{$HoSo->DiaChi_NguoiDaiDien }}" readonly>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="" class="col-md-4 col-lg-3 col-form-label">Số điện thoại:</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="DienThoai" type="text" class="form-control" id=""
                                                value="{{$HoSo->DienThoai }}" readonly>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="" class="col-md-4 col-lg-3 col-form-label">Email:</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="Email" type="text" class="form-control" id=""
                                                value="{{$HoSo->Email }}" readonly>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="" class="col-md-4 col-lg-3 col-form-label">Website:</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="Website" type="text" class="form-control" id=""
                                                value="{{$HoSo->Website }}" readonly>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="" class="col-md-4 col-lg-3 col-form-label"> Tên sản phẩm/dịch vụ, mô
                                            tả về quy cách sản phẩm, tiêu chuẩn:</label>
                                        <div class="col-md-8 col-lg-9">
                                            <textarea name="MoTaQuyCachSanPham" type="text" class="form-control"
                                                id="MoTaQuyCachSanPham"
                                                value="">{!!$HoSo->MoTaQuyCachSanPham !!}</textarea>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="row mb-3">
                                        <label for="" class="col-md-4 col-lg-3 col-form-label">
                                            Đánh dấu vào mục tương ứng:
                                        </label>
                                        <div class="col-md-8 col-lg-9">
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <input class="form-check-input" value="Đã có công bố chất lượng"
                                                        type="checkbox" name="TinhTrangCongBo[]"
                                                        id="TinhTrangCongBoChatLuong"
                                                        {{ in_array("Đã có công bố chất lượng", explode(' - ', $HoSo->TinhTrangCongBo)) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="">
                                                        Đã có công bố chất lượng (tự công bố/xác nhận công bố)
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" value="Đã có sở hữu trí tuệ"
                                                        type="checkbox" name="TinhTrangCongBo[]"
                                                        id="TinhTrangSoHuuTriTue"
                                                        {{ in_array("Đã có sở hữu trí tuệ", explode(' - ', $HoSo->TinhTrangCongBo)) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="">
                                                        Đã có sở hữu trí tuệ
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input"
                                                        value="Đã có giấy đủ điều kiện sản xuất, chứng nhận vệ sinh an toàn thực phẩm cho sản xuất sản phẩm tương ứng"
                                                        type="checkbox" name="TinhTrangCongBo[]"
                                                        id="TinhTrangVeSinhAnToanThucPham"
                                                        {{ in_array("Đã có giấy đủ điều kiện sản xuất, chứng nhận vệ sinh an toàn thực phẩm cho sản xuất sản phẩm tương ứng", explode(' - ', $HoSo->TinhTrangCongBo)) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="">
                                                        Đã có giấy đủ điều kiện sản xuất, chứng nhận vệ sinh an toàn
                                                        thực phẩm cho sản xuất sản phẩm tương ứng
                                                    </label>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <br>
                                    <div class="row mb-3">
                                        <label for="" class="col-md-4 col-lg-3 col-form-label">
                                            Loại hình đăng ký sở hữu trí tuệ (bảo hộ nhãn hiệu; logo; sáng chế; kiểu
                                            dáng công nghiệp;…)
                                        </label>
                                        <div class="col-md-8 col-lg-9">
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <input class="form-check-input" value="Bảo hộ nhãn hiệu"
                                                        type="checkbox" name="LoaiHinhDangKySoHuuTriTue[]" id=""
                                                        {{ in_array("Bảo hộ nhãn hiệu", explode(' - ', $HoSo->LoaiHinhDangKySoHuuTriTue)) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="">
                                                        Bảo hộ nhãn hiệu
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" value="Logo" type="checkbox"
                                                        name="LoaiHinhDangKySoHuuTriTue[]"
                                                        {{ in_array("Logo", explode(' - ', $HoSo->LoaiHinhDangKySoHuuTriTue)) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="">
                                                        Logo
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" value="Sáng chế" type="checkbox"
                                                        name="LoaiHinhDangKySoHuuTriTue[]"
                                                        {{ in_array("Sáng chế", explode(' - ', $HoSo->LoaiHinhDangKySoHuuTriTue)) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="">
                                                        Sáng chế
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" value="Kiểu dáng công nghiệp"
                                                        type="checkbox" name="LoaiHinhDangKySoHuuTriTue[]"
                                                        {{ in_array("Kiểu dáng công nghiệp", explode(' - ', $HoSo->LoaiHinhDangKySoHuuTriTue)) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="">
                                                        Kiểu dáng công nghiệp
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="" class="col-md-4 col-lg-3 col-form-label">
                                            Lịch sử hình thành của chủ thể (nêu các giai đoạn hình thành và phát triển):
                                        </label>
                                        <div class="col-md-8 col-lg-9">
                                            <textarea name="LichSuHinhThanh" type="text" class="form-control"
                                                id="LichSuHinhThanh" value="">
                                            {!!$HoSo->LichSuHinhThanh!!}
                                            </textarea>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="" class="col-md-4 col-lg-3 col-form-label">
                                            Lý do thành lập và quá trình thành lập chủ thể:
                                        </label>
                                        <div class="col-md-8 col-lg-9">
                                            <textarea name="LyDoThanhLap" type="text" class="form-control"
                                                id="LyDoThanhLap" value="">
                                            {!! $HoSo->LyDoThanhLap !!}
                                            </textarea>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="" class="col-md-4 col-lg-3 col-form-label">
                                            Chủ thể đã làm tăng thêm giá trị vào các tài nguyên sẵn có ở địa phương như
                                            thế nào:
                                        </label>
                                        <div class="col-md-8 col-lg-9">
                                            <textarea name="GiaTriSanPham" type="text" class="form-control"
                                                id="GiaTriSanPham" value="">
                                            {!! $HoSo->GiaTriSanPham!!}
                                            </textarea>
                                        </div>
                                    </div>

                                </form>

                            </div>

                            <!--  PHẦN C -->
                            <div class="tab-pane fade pt-3" id="phanC">
                                <h3 style="text-align:center;">MÔI TRƯỜNG KINH DOANH </h3>
                                <hr>
                                <form action="{{ URL::to('/nguoidung/capnhatmau2phanC') }}">
                                    <div class="row mb-3" hidden>
                                        <label for="" class="col-md-4 col-lg-3 col-form-label">Tên chủ thể:</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="TenDonVi" type="text" class="form-control" id=""
                                                value="{{$HoSo-> TenDonVi}}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="" class="col-md-4 col-lg-3 col-form-label">
                                            Đất và văn phòng:
                                        </label>
                                        <div class="col-md-8 col-lg-9">
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <input name="DatvaVanPhong[]" id="DatvaVanPhong" value="Thuê"
                                                        class="form-check-input" type="checkbox"
                                                        {{ in_array("Thuê", explode(' - ', $HoSo->DatvaVanPhong)) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="">
                                                        Thuê
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input name="DatvaVanPhong[]" id="DatvaVanPhong" value="Sở hữu"
                                                        class="form-check-input" type="checkbox"
                                                        {{ in_array("Sở hữu", explode(' - ', $HoSo->DatvaVanPhong)) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="">
                                                        Sở hữu
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="" class="col-md-4 col-lg-3 col-form-label">
                                            Đất sản xuất:
                                        </label>
                                        <div class="col-md-8 col-lg-9">
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <input name="DatSanXuat[]" value="Thuê" class="form-check-input"
                                                        type="checkbox" id="DatSanXuat"
                                                        {{ in_array("Thuê", explode(' - ', $HoSo->DatSanXuat)) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="">
                                                        Thuê
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input name="DatSanXuat[]" value="Sở hữu" class="form-check-input"
                                                        type="checkbox" id="DatSanXuat"
                                                        {{ in_array("Sở hữu", explode(' - ', $HoSo->DatSanXuat)) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="">
                                                        Sở hữu
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="" class="col-md-4 col-lg-3 col-form-label">
                                            Nguồn điện từ điện quốc gia:
                                        </label>
                                        <div class="col-md-8 col-lg-9">
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <input name="NguonDien[]" value="Đã mắc" class="form-check-input"
                                                        type="checkbox" id="NguonDien"
                                                        {{ in_array("Đã mắc", explode(' - ', $HoSo->NguonDien)) ? 'checked' : '' }}>
                                                    <label class="form-check-label">
                                                        Đã mắc
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input name="NguonDien[]" value="Đang có kế hoạch"
                                                        class="form-check-input" type="checkbox" id="NguonDien"
                                                        {{ in_array("Đang có kế hoạch", explode(' - ', $HoSo->NguonDien)) ? 'checked' : '' }}>
                                                    <label class="form-check-label">
                                                        Đang có kế hoạch
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input name="NguonDien[]" value="Không có" class="form-check-input"
                                                        type="checkbox" id="NguonDien"
                                                        {{ in_array("Không có", explode(' - ', $HoSo->NguonDien)) ? 'checked' : '' }}>
                                                    <label class="form-check-label">
                                                        Không có
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="" class="col-md-4 col-lg-3 col-form-label">
                                            Nguồn nước:
                                        </label>
                                        <div class="col-md-8 col-lg-9">
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <input name="NguonNuoc[]" value="Nước sạch" class="form-check-input"
                                                        type="checkbox" id=""
                                                        {{ in_array("Nước sạch", explode(' - ', $HoSo->NguonNuoc)) ? 'checked' : '' }}>
                                                    <label class="form-check-label">
                                                        Nước sạch
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input name="NguonNuoc[]" value="Nước giếng khoan"
                                                        class="form-check-input" type="checkbox" id=""
                                                        {{ in_array("Nước giếng khoan", explode(' - ', $HoSo->NguonNuoc)) ? 'checked' : '' }}>
                                                    <label class="form-check-label">
                                                        Nước giếng khoan
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input name="NguonNuoc[]" value="Không có" class="form-check-input"
                                                        type="checkbox" id=""
                                                        {{ in_array("Không có", explode(' - ', $HoSo->NguonNuoc)) ? 'checked' : '' }}>
                                                    <label class="form-check-label">
                                                        Không có
                                                    </label>
                                                </div>

                                                <label for="" class="col-md-4 col-lg-3 col-form-label">
                                                    Nguồn khác:
                                                </label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="NguonNuoc[]" type="text" class="form-control" id="">
                                                </div>

                                                <div class="col-sm-12">
                                                    <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                        Bạn đã chọn: {!!$HoSo->NguonNuoc!!}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- dùng hàm explode() để chuyển đổi một chuỗi thành một mảng -->
                                    <div class="row mb-3">
                                        <label for="" class="col-md-4 col-lg-3 col-form-label">
                                            Phương tiện vận tải:
                                        </label>
                                        <div class="col-md-8 col-lg-9">
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <input name="PhuongTienVanTai[]" value="Có xe ô tô"
                                                        class="form-check-input" type="checkbox" id="gridCheck1"
                                                        {{ in_array("Có xe ô tô", explode(' - ', $HoSo->PhuongTienVanTai)) ? 'checked' : '' }}>
                                                    <label class="form-check-label">
                                                        Có xe ô tô
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input name="PhuongTienVanTai[]" value="Xe máy"
                                                        class="form-check-input" type="checkbox" id="gridCheck2"
                                                        {{ in_array("Xe máy", explode(' - ', $HoSo->PhuongTienVanTai)) ? 'checked' : '' }}>
                                                    <label class="form-check-label">
                                                        Xe máy
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input name="PhuongTienVanTai[]" value="Xe trâu/bò kéo"
                                                        class="form-check-input" type="checkbox" id="gridCheck2"
                                                        {{ in_array("Xe trâu/bò kéo", explode(' - ', $HoSo->PhuongTienVanTai)) ? 'checked' : '' }}>
                                                    <label class="form-check-label">
                                                        Xe trâu/bò kéo
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input name="PhuongTienVanTai[]" value="Không có"
                                                        class="form-check-input" type="checkbox" id="gridCheck2"
                                                        {{ in_array("Không có", explode(' - ', $HoSo->PhuongTienVanTai)) ? 'checked' : '' }}>
                                                    <label class="form-check-label">
                                                        Không có
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input name="PhuongTienVanTai[]" value="Thuê"
                                                        class="form-check-input" type="checkbox" id="gridCheck2"
                                                        {{ in_array("Thuê", explode(' - ', $HoSo->PhuongTienVanTai)) ? 'checked' : '' }}>
                                                    <label class="form-check-label">
                                                        Thuê
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input name="PhuongTienVanTai[]" value="Phương tiện công cộng"
                                                        class="form-check-input" type="checkbox" id="gridCheck2"
                                                        {{ in_array("Phương tiện công cộng", explode(' - ', $HoSo->PhuongTienVanTai)) ? 'checked' : '' }}>
                                                    <label class="form-check-label">
                                                        Phương tiện công cộng
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="" class="col-md-4 col-lg-3 col-form-label">
                                            Phương tiện truyền thông:
                                        </label>
                                        <div class="col-md-8 col-lg-9">
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <input name="PhuongTienTruyenThong[]" value="Điện thoại để bàn"
                                                        class="form-check-input" type="checkbox" id="gridCheck1"
                                                        {{ in_array("Điện thoại để bàn", explode(' - ', $HoSo->PhuongTienTruyenThong)) ? 'checked' : '' }}>
                                                    <label class="form-check-label">
                                                        Điện thoại để bàn
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input name="PhuongTienTruyenThong[]" value="Điện thoại di động"
                                                        class="form-check-input" type="checkbox" id="gridCheck2"
                                                        {{ in_array("Điện thoại di động", explode(' - ', $HoSo->PhuongTienTruyenThong)) ? 'checked' : '' }}>
                                                    <label class="form-check-label">
                                                        Điện thoại di động
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input name="PhuongTienTruyenThong[]" value="Bưu điện"
                                                        class="form-check-input" type="checkbox" id="gridCheck2"
                                                        {{ in_array("Bưu điện", explode(' - ', $HoSo->PhuongTienTruyenThong)) ? 'checked' : '' }}>
                                                    <label class="form-check-label">
                                                        Bưu điện
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input name="PhuongTienTruyenThong[]" value="E-mail"
                                                        class="form-check-input" type="checkbox" id="gridCheck2"
                                                        {{ in_array("Email", explode(' - ', $HoSo->PhuongTienTruyenThong)) ? 'checked' : '' }}>
                                                    <label class="form-check-label">
                                                        E-mail
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input name="PhuongTienTruyenThong[]" value="Website"
                                                        class="form-check-input" type="checkbox" id="gridCheck2"
                                                        {{ in_array("Website", explode(' - ', $HoSo->PhuongTienTruyenThong)) ? 'checked' : '' }}>
                                                    <label class="form-check-label">
                                                        Website
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input name="PhuongTienTruyenThong[]" value="Mạng xã hội"
                                                        class="form-check-input" type="checkbox" id="gridCheck2"
                                                        {{ in_array("Mạng xã hội", explode(' - ', $HoSo->PhuongTienTruyenThong)) ? 'checked' : '' }}>
                                                    <label class="form-check-label">
                                                        Mạng xã hội
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input name="PhuongTienTruyenThong[]" value="Không có"
                                                        class="form-check-input" type="checkbox" id="gridCheck2"
                                                        {{ in_array("Không có", explode(' - ', $HoSo->PhuongTienTruyenThong)) ? 'checked' : '' }}>
                                                    <label class="form-check-label">
                                                        Không có
                                                    </label>
                                                </div>

                                                <label for="" class="col-md-4 col-lg-3 col-form-label">Khác:</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="PhuongTienTruyenThong[]" type="text"
                                                        class="form-control" id="" value="">
                                                </div>

                                                <div class="col-sm-12">
                                                    <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                        Bạn đã chọn: {!!$HoSo->PhuongTienTruyenThong!!}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <h3 style="text-align:center;">HOẠT ĐỘNG KINH DOANH</h3>
                                    <div class="row mb-3">
                                        <label for="" class="col-md-4 col-lg-3 col-form-label">
                                            Kết quả bán hàng:
                                        </label>
                                        <div class="col-md-8 col-lg-9">
                                            <div class="col-sm-10">
                                                <div class="col-sm-12">
                                                    @if ($HoSo ->KetQuaBanHang != NULL)

                                                    <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                        File doanh nghiệp đã tải lên:
                                                        <a href="{{ asset('file_doanhnghiep/'.$HoSo ->KetQuaBanHang) }}"
                                                            target="_blank">Bấm vào để tải</a>
                                                    </label>

                                                    @else
                                                    <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                        Doanh nghiệp chưa tải lên file
                                                    </label>
                                                    @endif

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row mb-3">
                                        <label for="" class="col-md-4 col-lg-3 col-form-label">
                                            Chi phí:
                                        </label>
                                        <div class="col-md-8 col-lg-9">
                                            <div class="col-sm-10">
                                                <div class="col-sm-12">
                                                    @if ($HoSo ->ChiPhi != NULL)
                                                    <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                        File doanh nghiệp đã tải lên: <a
                                                            href="{{ asset('file_doanhnghiep/'.$HoSo ->ChiPhi) }}"
                                                            target="_blank">Bấm vào để tải</a>
                                                    </label>
                                                    @else
                                                    <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                        Doanh nghiệp chưa tải lên file
                                                    </label>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row mb-3">
                                        <label for="" class="col-md-4 col-lg-3 col-form-label">
                                            Lãi/lỗ: tháng 04/2021 đến nay…
                                        </label>
                                        <div class="col-md-8 col-lg-9">
                                            <div class="col-sm-10">
                                                <div class="col-sm-12">
                                                    @if ( $HoSo ->DoanhThu!=NULL)
                                                    <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                        File doanh nghiệp đã tải lên: <a
                                                            href="{{ asset('file_doanhnghiep/'.$HoSo ->DoanhThu) }}"
                                                            target="_blank">Bấm vào để tải</a>
                                                    </label>
                                                    @else
                                                    <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                        Doanh nghiệp chưa tải lên file
                                                    </label>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row mb-3">
                                        <label for="" class="col-md-4 col-lg-3 col-form-label">
                                            Nhân lực:
                                        </label>
                                        <div class="col-md-8 col-lg-9">
                                            <div class="col-sm-10">
                                                <div class="col-sm-12">
                                                    @if ( $HoSo ->NhanLuc!=NULL)
                                                    <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                        File doanh nghiệp đã tải lên: <a
                                                            href="{{ asset('file_doanhnghiep/'.$HoSo ->NhanLuc) }}"
                                                            target="_blank">Bấm vào để tải</a>
                                                    </label>
                                                    @else
                                                    <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                        Doanh nghiệp chưa tải lên file
                                                    </label>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row mb-3">
                                        <label for="" class="col-md-4 col-lg-3 col-form-label">
                                            Nguồn cung cấp nguyên vật liệu đầu vào:
                                        </label>
                                        <div class="col-md-8 col-lg-9">
                                            <div class="col-sm-10">
                                                <div class="col-sm-12">
                                                    @if ( $HoSo ->NguonCungCapNguyenLieu!=NULL)
                                                    <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                        File doanh nghiệp đã tải lên: <a
                                                            href="{{ asset('file_doanhnghiep/'.$HoSo ->NguonCungCapNguyenLieu) }}"
                                                            target="_blank">Bấm vào để tải</a>
                                                    </label>
                                                    @else
                                                    <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                        Doanh nghiệp chưa tải lên file
                                                    </label>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div> <!-- HẾT PHẦN C -->

                            <!--  PHẦN D -->
                            <div class="tab-pane fade pt-3" id="phanD">
                                <h3 style="text-align:center;">THÔNG TIN VỀ KINH DOANH</h3>
                                <hr>
                                <form>
                                    <div class="row mb-3" hidden>
                                        <label for="" class="col-md-4 col-lg-3 col-form-label">Tên chủ thể:</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="TenDonVi" type="text" class="form-control" id=""
                                                value="{{$HoSo-> TenDonVi}}">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="" class="col-md-4 col-lg-3 col-form-label">
                                            Mức độ thường xuyên của hoạt động sản xuất sản phẩm:
                                        </label>
                                        <div class="col-md-8 col-lg-9">
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <input name="MucDoHoatDongSanXuat[]" value="Thường xuyên hàng ngày"
                                                        class="form-check-input" type="checkbox"
                                                        {{ in_array("Thường xuyên hàng ngày", explode(' - ', $HoSo->MucDoHoatDongSanXuat)) ? 'checked' : '' }}>
                                                    <label class="form-check-label">
                                                        Thường xuyên hàng ngày
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input name="MucDoHoatDongSanXuat[]" value="Theo tuần"
                                                        class="form-check-input" type="checkbox"
                                                        {{ in_array("Theo tuần", explode(' - ', $HoSo->MucDoHoatDongSanXuat)) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="gridCheck2">
                                                        Theo tuần
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input name="MucDoHoatDongSanXuat[]" value="Theo tháng"
                                                        class="form-check-input" type="checkbox"
                                                        {{ in_array("Theo tháng", explode(' - ', $HoSo->MucDoHoatDongSanXuat)) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="gridCheck2">
                                                        Theo tháng
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row mb-3">
                                        <label for="" class="col-md-4 col-lg-3 col-form-label">
                                            Thị trường đích (nêu cụ thể địa điểm/khu vực đang phân phối tại địa phương
                                            (tỉnh, huyện xã, thôn); ngoài tỉnh)
                                        </label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="ThiTruong" value="{!! $HoSo-> ThiTruong !!}" type="text"
                                                class="form-control" id="ThiTruong">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row mb-3">
                                        <label for="" class="col-md-4 col-lg-3 col-form-label">
                                            Mức độ thường xuyên của bán sản phẩm ?
                                        </label>
                                        <div class="col-md-8 col-lg-9">
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <input name="MucDoBanSanPham[]" value="Thường xuyên hàng ngày"
                                                        class="form-check-input" type="checkbox"
                                                        {{ in_array("Thường xuyên hàng ngày", explode(' - ', $HoSo->MucDoBanSanPham)) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="gridCheck1">
                                                        Thường xuyên hàng ngày
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input name="MucDoBanSanPham[]" value="Theo tuần"
                                                        class="form-check-input" type="checkbox"
                                                        {{ in_array("Theo tuần", explode(' - ', $HoSo->MucDoBanSanPham)) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="gridCheck2">
                                                        Theo tuần
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input name="MucDoBanSanPham[]" value="Theo tháng"
                                                        class="form-check-input" type="checkbox"
                                                        {{ in_array("Theo tháng", explode(' - ', $HoSo->MucDoBanSanPham)) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="gridCheck2">
                                                        Theo tháng
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row mb-3">
                                        <label for="" class="col-md-4 col-lg-3 col-form-label">
                                            Khách hàng hướng tới:
                                        </label>
                                        <div class="col-md-8 col-lg-9">
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <input name="DoiTuongKhachHang[]" value="Khá giả"
                                                        class="form-check-input" type="checkbox"
                                                        {{ in_array("Khá giả", explode(' - ', $HoSo->DoiTuongKhachHang)) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="gridCheck1">
                                                        Khá giả
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input name="DoiTuongKhachHang[]" value="Bình dân"
                                                        class="form-check-input" type="checkbox"
                                                        {{ in_array("Bình dân", explode(' - ', $HoSo->DoiTuongKhachHang)) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="gridCheck2">
                                                        Bình dân
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input name="DoiTuongKhachHang[]" value="Nông thôn"
                                                        class="form-check-input" type="checkbox"
                                                        {{ in_array("Nông thôn", explode(' - ', $HoSo->DoiTuongKhachHang)) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="gridCheck2">
                                                        Nông thôn
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input name="DoiTuongKhachHang[]" value="Thành thị"
                                                        class="form-check-input" type="checkbox"
                                                        {{ in_array("Thành thị", explode(' - ', $HoSo->DoiTuongKhachHang)) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="gridCheck2">
                                                        Thành thị
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row mb-3">
                                        <label for="" class="col-md-4 col-lg-3 col-form-label">
                                            Doanh nghiệp/hợp tác xã/tổ hợp tác/hộ đã tích lũy vốn cho kinh doanh như thế
                                            nào, số vốn góp của người địa phương
                                            (ghi rõ vốn cá nhân tự có, vốn tập thể (vốn thành viên góp)?; loại hình góp
                                            vốn (bằng tiền, mặt bằng, đất, công lao động,...).
                                        </label>


                                        <div class="col-md-8 col-lg-9">
                                            <label for="" class="col-md-4 col-lg-3 col-form-label">Vốn điều lệ:</label>
                                            <input name="VonDieuLe" value="{{ $HoSo-> VonDieuLe }}" type="text"
                                                class="form-control" readonly>

                                            <label for="" class="col-md-4 col-lg-3 col-form-label">
                                                Loại hình góp vốn:
                                            </label>
                                            <input name="LoaiHinhGopVon" value="{{ $HoSo-> LoaiHinhGopVon }}"
                                                type="text" class="form-control">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row mb-3">
                                        <label for="" class="col-md-4 col-lg-3 col-form-label">
                                            Nơi sản xuất, hoàn thiện sản phẩm (ghi rõ địa chỉ nơi sản xuất, hoàn thiện
                                            sản phẩm):
                                        </label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="DiaChiSanXuat" value="{{ $HoSo-> DiaChiSanXuat }}" type="text"
                                                class="form-control">
                                        </div>
                                    </div>

                                </form>
                            </div>
                            <!--  PHẦN E -->
                            <div class="tab-pane fade pt-3" id="phanE">
                                <h3 style="text-align:center;">THÔNG TIN CHUNG</h3>
                                <hr>
                                <form>

                                    <div class="row mb-3">
                                        <label for="" class="col-md-4 col-lg-3 col-form-label">
                                            Mô tả vắn tắt phương án kinh doanh; hoạt động kinh doanh và quy mô sản xuất:
                                        </label>
                                        <div class="col-md-8 col-lg-9">
                                            <textarea name="PhuongAnKinhDoanh" type="text" class="form-control"
                                                id="PhuongAnKinhDoanh" value="">
                                            {!! $HoSo->PhuongAnKinhDoanh!!}
                                            </textarea>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row mb-3">
                                        <label for="" class="col-md-4 col-lg-3 col-form-label">
                                            Sơ đồ tóm tắt quy trình sản xuất tạo sản phẩm
                                        </label>
                                        <div class="col-md-8 col-lg-9">
                                            <div class="col-sm-10">
                                                <div class="col-sm-12">
                                                    @if ( $HoSo ->QuyTrinhSanXuat!=NULL)
                                                    <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                        File doanh nghiệp đã tải lên: <a
                                                            href="{{ asset('file_doanhnghiep/'.$HoSo ->QuyTrinhSanXuat) }}"
                                                            target="_blank">Bấm vào để tải</a>
                                                    </label>
                                                    @else
                                                    <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                        Doanh nghiệp chưa tải lên file
                                                    </label>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row mb-3">
                                        <label for="" class="col-md-4 col-lg-3 col-form-label">
                                            Có nhận được hỗ trợ về đào tạo nào không?:
                                        </label>
                                        <div class="col-md-8 col-lg-9">
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <input name="HoTroDaoTao[]" value="Có" class="form-check-input"
                                                        type="checkbox" id=""
                                                        {{ in_array("Có", explode(' - ', $HoSo->HoTroDaoTao)) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="gridCheck1">
                                                        Có
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input name="HoTroDaoTao[]" value="Không" class="form-check-input"
                                                        type="checkbox" id=""
                                                        {{ in_array("Không", explode(' - ', $HoSo->HoTroDaoTao)) ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="gridCheck2">
                                                        Không
                                                    </label>
                                                </div>

                                                <div class="col-md-10 col-lg-12">
                                                    <label for="" class=" col-form-label">
                                                        Nếu có, trình bày ngắn gọn loại hình đào tạo và tổ chức thực
                                                        hiện đào tạo:
                                                    </label>
                                                    <input name="HoTroDaoTao[]" type="text" class="form-control" id=""
                                                        value="{{ $HoSo->HoTroDaoTao}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row mb-3">
                                        <label for="" class="col-md-4 col-lg-3 col-form-label">
                                            Có nhận được hỗ trợ nào khác không?
                                        </label>
                                        <div class="col-md-8 col-lg-9">
                                            <div class="col-sm-10">
                                                <div class="col-sm-12">
                                                    @if ( $HoSo ->HoTroKhac!=NULL)
                                                    <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                        File doanh nghiệp đã tải lên: <a
                                                            href="{{ asset('file_doanhnghiep/'.$HoSo ->HoTroKhac) }}"
                                                            target="_blank">Bấm vào để tải</a>
                                                    </label>
                                                    @else
                                                    <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                        Doanh nghiệp chưa tải lên file
                                                    </label>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row mb-3">
                                        <label for="" class="col-md-4 col-lg-3 col-form-label">
                                            Chủ thể có tổ chứcc gặp mặt/họp thường xuyên không (ghi số lần họp/tháng,
                                            quý, năm nếu có):
                                        </label>
                                        <div class="col-md-8 col-lg-9">
                                            <textarea name="TanSuatHopMat" type="text" class="form-control"
                                                id="TanSuatHopMat" value="">
                                            {!! $HoSo->TanSuatHopMat!!}
                                            </textarea>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row mb-3">
                                        <label for="" class="col-md-4 col-lg-3 col-form-label">
                                            Cách chia số tiền, lợi nhuận thu được:
                                        </label>
                                        <div class="col-md-8 col-lg-9">
                                            <textarea name="CachChiaTien" type="text" class="form-control"
                                                id="CachChiaTien" value="">
                                            {!! $HoSo->CachChiaTien!!}
                                            </textarea>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row mb-3">
                                        <label for="" class="col-md-4 col-lg-3 col-form-label">
                                            Liệt kê các thách thức chính của doanh nghiệp/hợp tác xã/tổ hợp tác/hộ gặp
                                            phải:
                                        </label>
                                        <div class="col-md-8 col-lg-9">
                                            <textarea name="ThachThuc" type="text" class="form-control" id="ThachThuc"
                                                value="">
                                            {!! $HoSo->ThachThuc!!}
                                            </textarea>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <!--  PHẦN G -->
                            <div class="tab-pane fade pt-3" id="phanG">
                                <h3 style="text-align:center;">NHU CẦU HỖ TRỢ</h3>
                                <hr>
                                <form>
                                    <div class="row mb-3" hidden>
                                        <label for="" class="col-md-4 col-lg-3 col-form-label">Tên chủ thể:</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="TenDonVi" type="text" class="form-control" id=""
                                                value="{{$HoSo-> TenDonVi}}">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row mb-3">
                                        <label for="" class="col-md-4 col-lg-3 col-form-label">
                                            Trình bày ngắn gọn về lĩnh vực và yêu cầu các cơ quan thực hiện: Tải file
                                            trình bày lên
                                        </label>
                                        <div class="col-md-8 col-lg-9">
                                            <div class="col-sm-10">
                                                <div class="col-sm-12">
                                                    @if ( $HoSo ->NhuCauHoTro!=NULL)
                                                    <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                        File doanh nghiệp đã tải lên: <a
                                                            href="{{ asset('file_doanhnghiep/'.$HoSo ->NhuCauHoTro) }}"
                                                            target="_blank">Bấm vào để tải</a>
                                                    </label>
                                                    @else
                                                    <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                        Doanh nghiệp chưa tải lên file
                                                    </label>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                            <!--  PHẦN H -->
                            <div class="tab-pane fade pt-3" id="phanH">
                                <h3 style="text-align:center;">Dành cho tổ chức/cá nhân đề xuất:</h3>
                                <hr>
                                <form>
                                    <div class="row mb-3">
                                        <label for="" class="col-md-4 col-lg-3 col-form-label">
                                            Tên tổ chức/cá nhân:
                                        </label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="TenDonVi" type="text" class="form-control" id=""
                                                value="{{$HoSo-> TenDonVi}}" readonly>
                                        </div>
                                    </div>
                                    <hr><br>
                                    <div class="row mb-3">
                                        <label for="" class="col-md-4 col-lg-3 col-form-label">
                                            Xin gửi Phiếu đăng ký này đến OCOP:
                                        </label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="tendonvi" type="text" class="form-control" id=""
                                                value="{{$HoSo->tendonvi}}" readonly>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div><!-- End Bordered Tabs -->

                    </div>
                </div>

            </div>
        </section> <!-- hết biểu mẫu số 2 -->

        <!-- Biểu mẫu số 3 -->
        <h1 style="text-align:center;">BIỂU SỐ 03: PHƯƠNG ÁN SẢN XUẤT KINH DOANH</h1>
        <section class="">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#phanI">
                                        PHẦN I
                                    </button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#phanII">
                                        PHẦN II
                                    </button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#phanIII">
                                        PHẦN III
                                    </button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#phanIV">
                                        PHẦN IV
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content pt-2">
                                <!-- PHẦN I -->
                                <div class="tab-pane fade show active pt-3" id="phanI">
                                    <h3 style="text-align:center;">PHẦN I. GIỚI THIỆU</h3>
                                    <hr>
                                    <form>
                                        <h4 style="text-align:center;">I. GIỚI THIỆU TỔNG THỂ</h4>
                                        <div class="row mb-3">
                                            <label for="" class="col-md-4 col-lg-3 col-form-label">Tên chủ thể:</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="TenDonVi" type="text" class="form-control" id=""
                                                    value="{{$HoSo-> TenDonVi}}" readonly>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="" class="col-md-4 col-lg-3 col-form-label">Địa chỉ trụ sở
                                                chính:</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="DiaChiCty" type="text" class="form-control" id=""
                                                    value="{{$HoSo-> DiaChiCty}}" readonly>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="" class="col-md-4 col-lg-3 col-form-label">Địa chỉ xưởng sản
                                                xuất:</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="DiaChiXuong" type="text" class="form-control" id=""
                                                    value="{{$HoSo->DiaChiXuong}}" readonly>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="" class="col-md-4 col-lg-3 col-form-label">Vốn điều lệ:</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="VonDieuLe" type="text" class="form-control" id=""
                                                    value="{{$HoSo->VonDieuLe}}" readonly>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="" class="col-md-4 col-lg-3 col-form-label">Số lượng thành
                                                viên:</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="SoLuongThanhVien" type="text" class="form-control" id=""
                                                    value="{{$HoSo->SoLuongThanhVien}}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="" class="col-md-4 col-lg-3 col-form-label">Ngành, nghề sản xuất,
                                                kinh doanh:</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="NganhNghe" type="text" class="form-control" id=""
                                                    value="{{$HoSo->NganhNghe}}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="" class="col-md-4 col-lg-3 col-form-label">Tổ chức nhân
                                                sự:</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="NhanSu" type="text" class="form-control" id="NhanSu"
                                                    value="{{$HoSo->NhanSu}}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="" class="col-md-4 col-lg-3 col-form-label">Tổng diện tích hoạt
                                                động sản xuất là</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="TongDienTichDat" type="text" class="form-control"
                                                    id="TongDienTichDat" value="{{$HoSo->TongDienTichDat}}">
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
                                                <div class="col-sm-10">
                                                    <div class="col-sm-12">
                                                        @if ($HoSo ->SoDoToChuc !=NULL)
                                                        <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                            File doanh nghiệp đã tải lên: <a
                                                                href="{{ asset('file_doanhnghiep/'.$HoSo ->SoDoToChuc) }}"
                                                                target="_blank">Bấm vào để tải</a>
                                                        </label>
                                                        @else
                                                        <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                            Doanh nghiệp chưa tải lên file
                                                        </label>
                                                        @endif
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
                                                <div class="col-sm-10">
                                                    <div class="col-sm-12">
                                                        @if ( $HoSo ->ChucNangNhiemVuNhanSu!=NULL)
                                                        <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                            File doanh nghiệp đã tải lên: <a
                                                                href="{{ asset('file_doanhnghiep/'.$HoSo ->ChucNangNhiemVuNhanSu) }}"
                                                                target="_blank">Bấm vào để tải</a>
                                                        </label>
                                                        @else
                                                        <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                            Doanh nghiệp chưa tải lên file
                                                        </label>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div> <!-- hết phần I -->

                                <!-- PHẦN II -->
                                <div class="tab-pane fade show pt-3" id="phanII">
                                    <h3 style="text-align:center;">
                                        PHẦN II. TỔNG QUAN VỀ TÌNH HÌNH THỊ TRƯỜNG VÀ KHẢ NĂNG THAM GIA CỦA DOANH
                                        NGHIỆP/HỢP TÁC XÃ/TỔ HỢP TÁC/HỘ KINH DOANH
                                    </h3>
                                    <hr>
                                    <form>
                                        <div class="row mb-3">
                                            <label for="" class="col-md-4 col-lg-3 col-form-label">Đánh giá chung về
                                                tình hình thị trường</label>
                                            <div class="col-md-8 col-lg-9">
                                                <textarea name="DanhGiaThiTruong" type="text" class="form-control"
                                                    id="DanhGiaThiTruong">{!!$HoSo->DanhGiaThiTruong!!}</textarea>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="" class="col-md-4 col-lg-3 col-form-label">Đánh giá khả năng
                                                tham gia thị trường</label>
                                            <div class="col-md-8 col-lg-9">
                                                <textarea name="DanhGiaKhaNangThamGiaThiTruong" type="text"
                                                    class="form-control"
                                                    id="DanhGiaKhaNangThamGiaThiTruong">{!!$HoSo->DanhGiaKhaNangThamGiaThiTruong!!}</textarea>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="" class="col-md-4 col-lg-3 col-form-label">Căn cứ pháp lý thành
                                                lập và hoạt động</label>
                                            <div class="col-md-8 col-lg-9">
                                                <textarea name="CanCuPhapLy" type="text" class="form-control"
                                                    id="CanCuPhapLy">{!!$HoSo->CanCuPhapLy!!}</textarea>
                                            </div>
                                        </div>
                                    </form>

                                </div> <!-- hết phần II -->

                                <!-- PHẦN III -->
                                <div class="tab-pane fade show pt-3" id="phanIII">
                                    <h3 style="text-align:center;">
                                        PHẦN III. PHƯƠNG ÁN SẢN XUẤT, KINH DOANH (3 năm)
                                    </h3>
                                    <hr>
                                    <form>
                                        <hr>
                                        <div class="row mb-3" hidden>
                                            <label for="" class="col-md-4 col-lg-3 col-form-label">Tên chủ thể:</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="TenDonVi" type="text" class="form-control" id=""
                                                    value="{{$HoSo-> TenDonVi}}">
                                            </div>
                                        </div>
                                        <h4 style="text-align:center;">I. PHÂN TÍCH ĐIỂM MẠNH, YẾU, CƠ HỘI VÀ THÁCH THỨC
                                        </h4>
                                        <div class="row mb-3">
                                            <div class="col-md-12 col-lg-12">
                                                <textarea name="PhanTichChung" type="text" class="form-control"
                                                    id="PhanTichChung">{!! $HoSo->PhanTichChung !!}</textarea>
                                            </div>
                                        </div>
                                        <hr>

                                        <h4 style="text-align:center;">II. PHÂN TÍCH CẠNH TRANH </h4>
                                        <div class="row mb-3">
                                            <div class="col-md-12 col-lg-12">
                                                <textarea name="PhanTichCanhTranh" type="text" class="form-control"
                                                    id="PhanTichCanhTranh">{!! $HoSo->PhanTichCanhTranh !!}</textarea>
                                            </div>
                                        </div>
                                        <hr>

                                        <h4 style="text-align:center;">III. MỤC TIÊU VÀ CHIẾN LƯỢC PHÁT TRIỂN</h4>
                                        <div class="row mb-3">
                                            <div class="col-md-12 col-lg-12">
                                                <textarea name="MucTieuChienLuoc" type="text" class="form-control"
                                                    id="MucTieuChienLuoc">{!! $HoSo->MucTieuChienLuoc!!}</textarea>
                                            </div>
                                        </div>

                                        <hr>
                                        <h4 style="text-align:center;">IV. HOẠT ĐỘNG SẢN XUẤT, KINH DOANH </h4>
                                        <div class="row mb-3">
                                            <label for="" class="col-md-4 col-lg-3 col-form-label">
                                                Hoạt động sản xuất:
                                            </label>
                                            <div class="col-md-8 col-lg-9">
                                                <div class="col-sm-10">
                                                    <div class="col-sm-12">
                                                        @if ( $HoSo ->HoatDongSanXuat!=NULL)
                                                        <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                            File doanh nghiệp đã tải lên: <a
                                                                href="{{ asset('file_doanhnghiep/'.$HoSo ->HoatDongSanXuat) }}"
                                                                target="_blank">Bấm vào để tải</a>
                                                        </label>
                                                        @else
                                                        <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                            Doanh nghiệp chưa tải lên file
                                                        </label>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row mb-3">
                                            <label for="" class="col-md-4 col-lg-3 col-form-label">
                                                Phân phối/bán hàng:
                                            </label>
                                            <div class="col-md-8 col-lg-9">
                                                <div class="col-sm-10">
                                                    <div class="col-sm-12">
                                                        @if ( $HoSo ->KenhPhanPhoi!=NULL)
                                                        <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                            File doanh nghiệp đã tải lên: <a
                                                                href="{{ asset('file_doanhnghiep/'.$HoSo ->KenhPhanPhoi) }}"
                                                                target="_blank">Bấm vào để tải</a>
                                                        </label>
                                                        @else
                                                        <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                            Doanh nghiệp chưa tải lên file
                                                        </label>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>
                                        <h4 style="text-align:center;">V. KẾ HOẠCH MARKETING - XÚC TIẾN THƯƠNG MẠI </h4>
                                        <div class="row mb-3">
                                            <label for="" class="col-md-4 col-lg-3 col-form-label">
                                                Kế hoạch xúc tiến thương mại:
                                            </label>
                                            <div class="col-md-8 col-lg-9">
                                                <div class="col-sm-10">
                                                    <div class="col-sm-12">
                                                        @if ( $HoSo ->KeHoachXucTienThuongMai!=NULL)
                                                        <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                            File doanh nghiệp đã tải lên: <a
                                                                href="{{ asset('file_doanhnghiep/'.$HoSo ->KeHoachXucTienThuongMai) }}"
                                                                target="_blank">Bấm vào để tải</a>
                                                        </label>
                                                        @else
                                                        <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                            Doanh nghiệp chưa tải lên file
                                                        </label>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row mb-3">
                                            <label for="" class="col-md-4 col-lg-3 col-form-label">
                                                Kế hoạch Marketing:
                                            </label>
                                            <div class="col-md-8 col-lg-9">
                                                <div class="col-sm-10">
                                                    <div class="col-sm-12">
                                                        @if ( $HoSo ->KeHoachMarketing!=NULL)
                                                        <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                            File doanh nghiệp đã tải lên: <a
                                                                href="{{ asset('file_doanhnghiep/'.$HoSo ->KeHoachMarketing) }}"
                                                                target="_blank">Bấm vào để tải</a>
                                                        </label>
                                                        @else
                                                        <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                            Doanh nghiệp chưa tải lên file
                                                        </label>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>
                                        <h4 style="text-align:center;">VI. PHƯƠNG ÁN ĐẦU TƯ CƠ SỞ VẬT CHẤT, BỐ TRÍ NHÂN
                                            LỰC VÀ CÁC ĐIỀU KIỆN KHÁC
                                        </h4>
                                        <div class="row mb-3">
                                            <label for="" class="col-md-4 col-lg-3 col-form-label">
                                                Cơ sở hạ tầng (điều chỉnh cho phù hợp điều kiện thực tế):
                                            </label>
                                            <div class="col-md-8 col-lg-9">
                                                <div class="col-sm-10">
                                                    <div class="col-sm-12">
                                                        @if ( $HoSo ->CoSoHaTang!=NULL)
                                                        <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                            File doanh nghiệp đã tải lên: <a
                                                                href="{{ asset('file_doanhnghiep/'.$HoSo ->CoSoHaTang) }}"
                                                                target="_blank">Bấm vào để tải</a>
                                                        </label>
                                                        @else
                                                        <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                            Doanh nghiệp chưa tải lên file
                                                        </label>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row mb-3">
                                            <label for="" class="col-md-4 col-lg-3 col-form-label">
                                                Máy móc, trang thiết bị:
                                            </label>
                                            <div class="col-md-8 col-lg-9">
                                                <div class="col-sm-10">
                                                    <div class="col-sm-12">
                                                        @if ( $HoSo ->TrangThietBi!=NULL)
                                                        <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                            File doanh nghiệp đã tải lên: <a
                                                                href="{{ asset('file_doanhnghiep/'.$HoSo ->TrangThietBi) }}"
                                                                target="_blank">Bấm vào để tải</a>
                                                        </label>
                                                        @else
                                                        <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                            Doanh nghiệp chưa tải lên file
                                                        </label>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row mb-3">
                                            <label for="" class="col-md-4 col-lg-3 col-form-label">
                                                Nhân lực (điều chỉnh cho phù hợp điều kiện thực tế):
                                            </label>
                                            <div class="col-md-8 col-lg-9">
                                                <div class="col-sm-10">
                                                    <div class="col-sm-12">
                                                        @if ($HoSo ->NhanLucDieuChinh !=NULL)
                                                        <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                            File doanh nghiệp đã tải lên: <a
                                                                href="{{ asset('file_doanhnghiep/'.$HoSo ->NhanLucDieuChinh) }}"
                                                                target="_blank">Bấm vào để tải</a>
                                                        </label>
                                                        @else
                                                        <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                            Doanh nghiệp chưa tải lên file
                                                        </label>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row mb-3">
                                            <label for="" class="col-md-4 col-lg-3 col-form-label">
                                                Các điều kiện khác:
                                            </label>
                                            <div class="col-md-8 col-lg-9">
                                                <div class="col-sm-10">
                                                    <div class="col-sm-12">
                                                        @if ($HoSo ->DieuKienKhac !=NULL)
                                                        <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                            File doanh nghiệp đã tải lên: <a
                                                                href="{{ asset('file_doanhnghiep/'.$HoSo ->DieuKienKhac) }}"
                                                                target="_blank">Bấm vào để tải</a>
                                                        </label>
                                                        @else
                                                        <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                            Doanh nghiệp chưa tải lên file
                                                        </label>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div> <!-- hết phần III -->

                                <!-- PHẦN IV -->
                                <div class="tab-pane fade show pt-3" id="phanIV">
                                    <h3 style="text-align:center;">
                                        PHẦN IV. PHƯƠNG ÁN TÀI CHÍNH
                                    </h3>
                                    <hr>
                                    <form>
                                        <h4 style="text-align:center;">I. PHƯƠNG ÁN HUY ĐỘNG VÀ SỬ DỤNG VỐN</h4>
                                        <div class="row mb-3" hidden>
                                            <label for="" class="col-md-4 col-lg-3 col-form-label">Tên chủ thể:</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="TenDonVi" type="text" class="form-control" id=""
                                                    value="{{$HoSo-> TenDonVi}}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="" class="col-md-4 col-lg-3 col-form-label">
                                                Tổng nhu cầu vốn:
                                            </label>
                                            <div class="col-md-8 col-lg-9">
                                                <div class="col-sm-10">
                                                    <div class="col-sm-12">
                                                        @if ($HoSo ->NhuCauVon !=NULL)
                                                        <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                            File doanh nghiệp đã tải lên: <a
                                                                href="{{ asset('file_doanhnghiep/'.$HoSo ->NhuCauVon) }}"
                                                                target="_blank">Bấm vào để tải</a>
                                                        </label>
                                                        @else
                                                        <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                            Doanh nghiệp chưa tải lên file
                                                        </label>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="" class="col-md-4 col-lg-3 col-form-label">
                                                Phương án huy dộng vốn:
                                            </label>
                                            <div class="col-md-8 col-lg-9">
                                                <div class="col-sm-10">
                                                    <div class="col-sm-12">
                                                        @if ( $HoSo ->PhuongAnHuyDong!=NULL)
                                                        <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                            File doanh nghiệp đã tải lên: <a
                                                                href="{{ asset('file_doanhnghiep/'.$HoSo ->PhuongAnHuyDong) }}"
                                                                target="_blank">Bấm vào để tải</a>
                                                        </label>
                                                        @else
                                                        <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                            Doanh nghiệp chưa tải lên file
                                                        </label>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>
                                        <h4 style="text-align:center;">II. PHƯƠNG ÁN DOANH THU, CHI PHÍ, LỢI NHUẬN TRONG
                                            NĂM</h4>
                                        <div class="row mb-3">
                                            <label for="" class="col-md-4 col-lg-3 col-form-label">
                                                Tổng doanh thu:
                                            </label>
                                            <div class="col-md-8 col-lg-9">
                                                <div class="col-sm-10">
                                                    <div class="col-sm-12">
                                                        @if ( $HoSo ->TongDoanhThu!=NULL)
                                                        <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                            File bạn đã tải lên: <a
                                                                href="{{ asset('file_doanhnghiep/'.$HoSo ->TongDoanhThu) }}"
                                                                target="_blank">Bấm vào để tải</a>
                                                        </label>
                                                        @else
                                                        <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                            Doanh nghiệp chưa tải lên file
                                                        </label>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="" class="col-md-4 col-lg-3 col-form-label">
                                                Tổng chi phí:
                                            </label>
                                            <div class="col-md-8 col-lg-9">
                                                <div class="col-sm-10">
                                                    <div class="col-sm-12">
                                                        @if ( $HoSo ->TongChiPhi!=NULL)
                                                        <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                            File doanh nghiệp đã tải lên: <a
                                                                href="{{ asset('file_doanhnghiep/'.$HoSo ->TongChiPhi) }}"
                                                                target="_blank">Bấm vào để tải</a>
                                                        </label>
                                                        @else
                                                        <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                            Doanh nghiệp chưa tải lên file
                                                        </label>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="" class="col-md-4 col-lg-3 col-form-label">
                                                Lợi nhuận:
                                            </label>
                                            <div class="col-md-8 col-lg-9">
                                                <div class="col-sm-10">
                                                    <div class="col-sm-12">
                                                        @if ( $HoSo ->LoiNhuan!=NULL)
                                                        <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                            File doanh nghiệp đã tải lên: <a
                                                                href="{{ asset('file_doanhnghiep/'.$HoSo ->LoiNhuan) }}"
                                                                target="_blank">Bấm vào để tải</a>
                                                        </label>
                                                        @else
                                                        <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                            Doanh nghiệp chưa tải lên file
                                                        </label>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>
                                        <h4 style="text-align:center;">III. PHƯƠNG ÁN TÀI CHÍNH KHÁC</h4>
                                        <div class="row mb-3">
                                            <label for="" class="col-md-4 col-lg-3 col-form-label">
                                            </label>
                                            <div class="col-md-8 col-lg-9">
                                                <div class="col-sm-10">
                                                    <div class="col-sm-12">
                                                        @if ( $HoSo ->PhuongAnTaiChinhKhac!=NULL)
                                                        <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                            File doanh nghiệp đã tải lên: <a
                                                                href="{{ asset('file_doanhnghiep/'.$HoSo ->PhuongAnTaiChinhKhac) }}"
                                                                target="_blank">Bấm vào để tải</a>
                                                        </label>
                                                        @else
                                                        <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                            Doanh nghiệp chưa tải lên file
                                                        </label>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </form>

                                </div> <!-- hết phần IV -->

                            </div><!-- End Bordered Tabs -->

                        </div>
                    </div>

                </div>
            </div>
        </section><!--  hết biểu mẫu số 3 -->

        <h1 style="text-align:center;">BIỂU SỐ 04: MẪU GIỚI THIỆU VỀ TỔ CHỨC THAM GIA CHƯƠNG TRÌNH OCOP</h1>
        <section class="">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body pt-3">
                            <div class="row mb-3">
                                <label for="" class="col-md-4 col-lg-3 col-form-label">Tên chủ thể:</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="TenDonVi" type="text" class="form-control" id=""
                                        value="{{$HoSo->TenDonVi}}" readonly>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-md-4 col-lg-3 col-form-label">Địa chỉ thường trú của người điều
                                    hành:</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="DiaChi_NguoiDaiDien" type="text" class="form-control"
                                        id="DiaChi_NguoiDaiDien" value="{{ $HoSo->DiaChi_NguoiDaiDien}}" readonly>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-md-4 col-lg-3 col-form-label">Địa chỉ xưởng sản xuất:</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="DiaChiXuong" type="text" class="form-control" id="DiaChiXuong"
                                        value="{{ $HoSo->DiaChiXuong}}" readonly>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-md-4 col-lg-3 col-form-label">Số điện thoại:</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="DienThoai" type="text" class="form-control" id=""
                                        value="{{ $HoSo->DienThoai}}" readonly>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-md-4 col-lg-3 col-form-label">Email:</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="Email" type="text" class="form-control" id="Email"
                                        value="{{ $HoSo->Email}}" readonly>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-md-4 col-lg-3 col-form-label">Website:</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="Website" type="text" class="form-control" id="Website"
                                        value="{{ $HoSo->Website}}" readonly>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-md-4 col-lg-3 col-form-label">Cơ cấu tổ chức, loại hình doanh
                                    nghiệp:</label>
                                <div class="col-md-8 col-lg-9">
                                    <div class="col-sm-10">
                                        <div class="col-sm-12">
                                            @if ( $HoSo ->CoCauToChuc!=NULL)
                                            <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                File doanh nghiệp đã tải lên: <a
                                                    href="{{ asset('file_doanhnghiep/'.$HoSo ->CoCauToChuc) }}"
                                                    target="_blank">Bấm vào để tải</a>
                                            </label>
                                            @else
                                            <label for="" class="col-md-12 col-lg-12 col-form-label">
                                                Doanh nghiệp chưa tải lên file
                                            </label>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-md-4 col-lg-3 col-form-label">Sự tham gia của cộng
                                    đồng:</label>
                                <div class="col-md-8 col-lg-9">
                                    <textarea name="CongDong" type="text" class="form-control"
                                        id="CongDong">{!! $HoSo->CongDong !!}</textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-md-4 col-lg-3 col-form-label">Hoạt động kế toán của cơ
                                    sở:</label>
                                <div class="col-md-8 col-lg-9">
                                    <textarea name="HoatDongKeToan" type="text" class="form-control"
                                        id="HoatDongKeToan">{!! $HoSo->HoatDongKeToan!!}</textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-md-4 col-lg-3 col-form-label">Tình hình tiếp thị của sản
                                    phẩm:</label>
                                <div class="col-md-8 col-lg-9">
                                    <textarea name="TinhHinhTiepThi" type="text" class="form-control"
                                        id="TinhHinhTiepThi">{!! $HoSo->TinhHinhTiepThi!!}</textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-md-4 col-lg-3 col-form-label">Phương án bảo vệ môi
                                    trường:</label>
                                <div class="col-md-8 col-lg-9">
                                    <textarea name="PhuongAnBaoVeMoiTruong" type="text" class="form-control"
                                        id="PhuongAnBaoVeMoiTruong">{!! $HoSo->PhuongAnBaoVeMoiTruong !!}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <script src="//cdn.ckeditor.com/4.16.2/full-all/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('MoTaQuyCachSanPham');
            CKEDITOR.replace('LichSuHinhThanh');
            CKEDITOR.replace('LyDoThanhLap');
            CKEDITOR.replace('GiaTriSanPham');
            CKEDITOR.replace('ThiTruong');
            CKEDITOR.replace('PhuongAnKinhDoanh');
            CKEDITOR.replace('TanSuatHopMat');
            CKEDITOR.replace('CachChiaTien');
            CKEDITOR.replace('ThachThuc');
            CKEDITOR.replace('NhanSu');
            CKEDITOR.replace('TongDienTichDat');
            CKEDITOR.replace('DanhGiaThiTruong');
            CKEDITOR.replace('DanhGiaKhaNangThamGiaThiTruong');
            CKEDITOR.replace('CanCuPhapLy');
            CKEDITOR.replace('PhanTichChung');
            CKEDITOR.replace('PhanTichCanhTranh');
            CKEDITOR.replace('MucTieuChienLuoc');
            CKEDITOR.replace('CongDong');
            CKEDITOR.replace('HoatDongKeToan');
            CKEDITOR.replace('TinhHinhTiepThi');
            CKEDITOR.replace('PhuongAnBaoVeMoiTruong');
        </script>
</section>
@endsection