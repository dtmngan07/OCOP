@extends( 'nguoidung.mau2.mau2')
@section ('content')
<main>
    <!-- PHẦN B -->
    <div class="" id="">
        <h3 style="text-align:center;">PHẦN B. THÔNG TIN VỀ CHỦ THỂ</h3>
        <hr><br>
        <form action="{{ URL::to('/nguoidung/capnhatmau2phanB') }}"
            enctype="multipart/form-data" class="row g-3" method="POST">
            {{ csrf_field() }}
            @if ($PhanB != NULL)
            <input value="{{$PhanB->id}}" type="text" class="form-control" name="id" hidden>
            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">Tên chủ thể:</label>
                <div class="col-md-8 col-lg-9">
                    <input name="TenDonVi" type="text" class="form-control" id=""
                        value="{{$PhanB-> TenDonVi}}" readonly>
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">Ngày thành lập/đăng ký
                    kinh doanh:</label>
                <div class="col-md-8 col-lg-9">
                    <input name="NgayDKKD" type="text" class="form-control" id=""
                        value="{{$PhanB->NgayDKKD }}" readonly>
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">Số đăng ký:</label>
                <div class="col-md-8 col-lg-9">
                    <input name="SoDKKD" type="text" class="form-control" id=""
                        value="{{$PhanB-> SoDKKD}}" readonly>
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">Loại hình tổ chức công
                    ty:</label>
                <div class="col-md-8 col-lg-9">
                    <input name="ten" type="text" class="form-control" id=""
                        value="{{$PhanB->ten }}" readonly>
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">Tên người điều hành chủ
                    thể sản xuất:</label>
                <div class="col-md-8 col-lg-9">
                    <input name="TenNguoiDaiDien" type="text" class="form-control" id=""
                        value="{{$PhanB->TenNguoiDaiDien }}" readonly>
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">Địa chỉ thường trú của
                    người điều hành:</label>
                <div class="col-md-8 col-lg-9">
                    <input name="DiaChiNguoiDaiDien" type="text" class="form-control" id=""
                        value="{{$PhanB->DiaChiNguoiDaiDien }}" readonly>
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">Số điện thoại:</label>
                <div class="col-md-8 col-lg-9">
                    <input name="DienThoai" type="text" class="form-control" id=""
                        value="{{$PhanB->DienThoai }}" readonly>
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">Email:</label>
                <div class="col-md-8 col-lg-9">
                    <input name="Email" type="text" class="form-control" id=""
                        value="{{$PhanB->Email }}" readonly>
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">Website:</label>
                <div class="col-md-8 col-lg-9">
                    <input name="Website" type="text" class="form-control" id=""
                        value="{{$PhanB->Website }}" readonly>
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label"> Tên sản phẩm/dịch vụ, mô
                    tả về quy cách sản phẩm, tiêu chuẩn:</label>
                <div class="col-md-8 col-lg-9">
                    <textarea name="MoTaQuyCachSanPham" type="text" class="form-control"
                        id="MoTaQuyCachSanPham"
                        value="">{!!$PhanB->MoTaQuyCachSanPham !!}</textarea>
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
                                id="TinhTrangCongBoChatLuong" {{ in_array("Đã có công bố chất lượng", explode(' - ', $PhanB->TinhTrangCongBo)) ? 'checked' : '' }}>
                            <label class="form-check-label" for="">
                                Đã có công bố chất lượng (tự công bố/xác nhận công bố)
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" value="Đã có sở hữu trí tuệ"
                                type="checkbox" name="TinhTrangCongBo[]"
                                id="TinhTrangSoHuuTriTue" {{ in_array("Đã có sở hữu trí tuệ", explode(' - ', $PhanB->TinhTrangCongBo)) ? 'checked' : '' }}>
                            <label class="form-check-label" for="">
                                Đã có sở hữu trí tuệ
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input"
                                value="Đã có giấy đủ điều kiện sản xuất, chứng nhận vệ sinh an toàn thực phẩm cho sản xuất sản phẩm tương ứng"
                                type="checkbox" name="TinhTrangCongBo[]"
                                id="TinhTrangVeSinhAnToanThucPham" {{ in_array("Đã có giấy đủ điều kiện sản xuất, chứng nhận vệ sinh an toàn thực phẩm cho sản xuất sản phẩm tương ứng", explode(' - ', $PhanB->TinhTrangCongBo)) ? 'checked' : '' }}>
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
                                type="checkbox" name="LoaiHinhDangKySoHuuTriTue[]" id="" {{ in_array("Bảo hộ nhãn hiệu", explode(' - ', $PhanB->LoaiHinhDangKySoHuuTriTue)) ? 'checked' : '' }}>
                            <label class="form-check-label" for="">
                                Bảo hộ nhãn hiệu
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" value="Logo" type="checkbox"
                                name="LoaiHinhDangKySoHuuTriTue[]" {{ in_array("Logo", explode(' - ', $PhanB->LoaiHinhDangKySoHuuTriTue)) ? 'checked' : '' }}>
                            <label class="form-check-label" for="">
                                Logo
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" value="Sáng chế" type="checkbox"
                                name="LoaiHinhDangKySoHuuTriTue[]" {{ in_array("Sáng chế", explode(' - ', $PhanB->LoaiHinhDangKySoHuuTriTue)) ? 'checked' : '' }}>
                            <label class="form-check-label" for="">
                                Sáng chế
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" value="Kiểu dáng công nghiệp"
                                type="checkbox" name="LoaiHinhDangKySoHuuTriTue[]" {{ in_array("Kiểu dáng công nghiệp", explode(' - ', $PhanB->LoaiHinhDangKySoHuuTriTue)) ? 'checked' : '' }}>
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
                    {!!$PhanB->LichSuHinhThanh!!}
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
                    {!! $PhanB->LyDoThanhLap !!}
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
                    {!! $PhanB->GiaTriSanPham!!}
                    </textarea>
                </div>
            </div>
            @else
            <input value="" type="text" class="form-control" name="id" hidden>
            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">Tên chủ thể:</label>
                <div class="col-md-8 col-lg-9">
                    <input name="TenDonVi" type="text" class="form-control" id=""
                        value="">
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">Ngày thành lập/đăng ký
                    kinh doanh:</label>
                <div class="col-md-8 col-lg-9">
                    <input name="NgayDKKD" type="text" class="form-control" id=""
                        value="">
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">Số đăng ký:</label>
                <div class="col-md-8 col-lg-9">
                    <input name="SoDKKD" type="text" class="form-control" id=""
                        value="">
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">Loại hình tổ chức công
                    ty:</label>
                <div class="col-md-8 col-lg-9">
                    <input name="ten" type="text" class="form-control" id=""
                        value="">
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">Tên người điều hành chủ
                    thể sản xuất:</label>
                <div class="col-md-8 col-lg-9">
                    <input name="NguoiDaiDien" type="text" class="form-control" id=""
                        value="">
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">Địa chỉ thường trú của
                    người điều hành:</label>
                <div class="col-md-8 col-lg-9">
                    <input name="DiaChi_NguoiDaiDien" type="text" class="form-control" id=""
                        value="">
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">Số điện thoại:</label>
                <div class="col-md-8 col-lg-9">
                    <input name="DienThoai" type="text" class="form-control" id=""
                        value="">
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">Email:</label>
                <div class="col-md-8 col-lg-9">
                    <input name="Email" type="text" class="form-control" id=""
                        value="">
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">Website:</label>
                <div class="col-md-8 col-lg-9">
                    <input name="Website" type="text" class="form-control" id=""
                        value="">
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label"> Tên sản phẩm/dịch vụ, mô
                    tả về quy cách sản phẩm, tiêu chuẩn:</label>
                <div class="col-md-8 col-lg-9">
                    <textarea name="MoTaQuyCachSanPham" type="text" class="form-control"
                        id="MoTaQuyCachSanPham" value=""></textarea>
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
                                id="TinhTrangCongBoChatLuong">
                            <label class="form-check-label" for="">
                                Đã có công bố chất lượng (tự công bố/xác nhận công bố)
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" value="Đã có sở hữu trí tuệ"
                                type="checkbox" name="TinhTrangCongBo[]"
                                id="TinhTrangSoHuuTriTue">
                            <label class="form-check-label" for="">
                                Đã có sở hữu trí tuệ
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input"
                                value="Đã có giấy đủ điều kiện sản xuất, chứng nhận vệ sinh an toàn thực phẩm cho sản xuất sản phẩm tương ứng"
                                type="checkbox" name="TinhTrangCongBo[]"
                                id="TinhTrangVeSinhAnToanThucPham">
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
                                type="checkbox" name="LoaiHinhDangKySoHuuTriTue[]" id="">
                            <label class="form-check-label" for="">
                                Bảo hộ nhãn hiệu
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" value="Logo" type="checkbox"
                                name="LoaiHinhDangKySoHuuTriTue[]">
                            <label class="form-check-label" for="">
                                Logo
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" value="Sáng chế" type="checkbox"
                                name="LoaiHinhDangKySoHuuTriTue[]">
                            <label class="form-check-label" for="">
                                Sáng chế
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" value="Kiểu dáng công nghiệp"
                                type="checkbox" name="LoaiHinhDangKySoHuuTriTue[]">
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
                    </textarea>
                </div>
            </div>
            @endif
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </div>
        </form>

    </div>
    <script src="//cdn.ckeditor.com/4.16.2/full-all/ckeditor.js"></script>
    <script>
    CKEDITOR.replace('MoTaQuyCachSanPham');
    CKEDITOR.replace('LichSuHinhThanh');
    CKEDITOR.replace('LyDoThanhLap');
    CKEDITOR.replace('GiaTriSanPham');
    </script>
</main>
@endsection