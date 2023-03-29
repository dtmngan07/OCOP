@extends( 'nguoidung.mau3.mau3')
@section ('content')
<main>
    <!-- PHẦN III -->
    <div class="" id="phanIII">
        <h3 style="text-align:center;">
            PHẦN III. PHƯƠNG ÁN SẢN XUẤT, KINH DOANH (3 năm)
        </h3>
        <form action="{{ URL::to('/nguoidung/capnhatmau3phanIII') }}"
            enctype="multipart/form-data" class="row g-3" method="POST">
            {{ csrf_field() }}
            @if ($PhanIII != NULL)
            <input value="{{$PhanIII->id}}" type="text" class="form-control" name="id" hidden>
            <hr>
            <div class="row mb-3" hidden>
                <label for="" class="col-md-4 col-lg-3 col-form-label">Tên chủ thể:</label>
                <div class="col-md-8 col-lg-9">
                    <input name="TenDonVi" type="text" class="form-control" id="" value="{{$PhanIII-> TenDonVi}}">
                </div>
            </div>
            <h4 style="text-align:center;">I. PHÂN TÍCH ĐIỂM MẠNH, YẾU, CƠ HỘI VÀ THÁCH THỨC </h4>
            <div class="row mb-3">
                <div class="col-md-12 col-lg-12">
                    <textarea name="PhanTichChung" type="text" class="form-control" id="PhanTichChung">{!! $PhanIII->PhanTichChung !!}</textarea>
                </div>
            </div>
            <hr>

            <h4 style="text-align:center;">II. PHÂN TÍCH CẠNH TRANH </h4>
            <div class="row mb-3">
                <div class="col-md-12 col-lg-12">
                    <textarea name="PhanTichCanhTranh" type="text" class="form-control" id="PhanTichCanhTranh">{!! $PhanIII->PhanTichCanhTranh !!}</textarea>
                </div>
            </div>
            <hr>
            
            <h4 style="text-align:center;">III. MỤC TIÊU VÀ CHIẾN LƯỢC PHÁT TRIỂN</h4>
            <div class="row mb-3">
                <div class="col-md-12 col-lg-12">
                    <textarea name="MucTieuChienLuoc" type="text" class="form-control" id="MucTieuChienLuoc">{!! $PhanIII->MucTieuChienLuoc!!}</textarea>
                </div>
            </div>

            <hr>
            <h4 style="text-align:center;">IV. HOẠT ĐỘNG SẢN XUẤT, KINH DOANH </h4>
            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Hoạt động sản xuất:
                </label>
                <div class="col-md-8 col-lg-9">
                    <input name="HoatDongSanXuat" type="file" class="form-control" id="HoatDongSanXuat" value="">
                </div>

                <label for="" class="col-md-4 col-lg-3 col-form-label">
                </label>
                <div class="col-md-8 col-lg-9">
                    <div class="col-sm-10">
                        <div class="col-sm-12">
                            <label for="" class="col-md-12 col-lg-12 col-form-label">
                                File bạn đã tải lên: <a href="{{ asset('file_doanhnghiep/'.$PhanIII ->HoatDongSanXuat) }}" target="_blank">Bấm vào để tải</a>
                            </label>
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
                    <input name="KenhPhanPhoi" type="file" class="form-control" id="KenhPhanPhoi" value="">
                </div>

                <label for="" class="col-md-4 col-lg-3 col-form-label">
                </label>
                <div class="col-md-8 col-lg-9">
                    <div class="col-sm-10">
                        <div class="col-sm-12">
                            <label for="" class="col-md-12 col-lg-12 col-form-label">
                                File bạn đã tải lên: <a href="{{ asset('file_doanhnghiep/'.$PhanIII ->KenhPhanPhoi) }}" target="_blank">Bấm vào để tải</a>
                            </label>
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
                    <input name="KeHoachXucTienThuongMai" type="file" class="form-control" id="KeHoachXucTienThuongMai" value="">
                </div>

                <label for="" class="col-md-4 col-lg-3 col-form-label">
                </label>
                <div class="col-md-8 col-lg-9">
                    <div class="col-sm-10">
                        <div class="col-sm-12">
                            <label for="" class="col-md-12 col-lg-12 col-form-label">
                                File bạn đã tải lên: <a href="{{ asset('file_doanhnghiep/'.$PhanIII ->KeHoachXucTienThuongMai) }}" target="_blank">Bấm vào để tải</a>
                            </label>
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
                    <input name="KeHoachMarketing" type="file" class="form-control" id="KeHoachMarketing" value="">
                </div>

                <label for="" class="col-md-4 col-lg-3 col-form-label">
                </label>
                <div class="col-md-8 col-lg-9">
                    <div class="col-sm-10">
                        <div class="col-sm-12">
                            <label for="" class="col-md-12 col-lg-12 col-form-label">
                                File bạn đã tải lên: <a href="{{ asset('file_doanhnghiep/'.$PhanIII ->KeHoachMarketing) }}" target="_blank">Bấm vào để tải</a>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <hr>
            <h4 style="text-align:center;">VI. PHƯƠNG ÁN ĐẦU TƯ CƠ SỞ VẬT CHẤT, BỐ TRÍ NHÂN LỰC VÀ CÁC ĐIỀU KIỆN KHÁC
            </h4>
            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Cơ sở hạ tầng (điều chỉnh cho phù hợp điều kiện thực tế):
                </label>
                <div class="col-md-8 col-lg-9">
                    <input name="CoSoHaTang" type="file" class="form-control" id="CoSoHaTang" value="">
                </div>

                <label for="" class="col-md-4 col-lg-3 col-form-label">
                </label>
                <div class="col-md-8 col-lg-9">
                    <div class="col-sm-10">
                        <div class="col-sm-12">
                            <label for="" class="col-md-12 col-lg-12 col-form-label">
                                File bạn đã tải lên: <a href="{{ asset('file_doanhnghiep/'.$PhanIII ->CoSoHaTang) }}" target="_blank">Bấm vào để tải</a>
                            </label>
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
                    <input name="TrangThietBi" type="file" class="form-control" id="TrangThietBi" value="">
                </div>

                <label for="" class="col-md-4 col-lg-3 col-form-label">
                </label>
                <div class="col-md-8 col-lg-9">
                    <div class="col-sm-10">
                        <div class="col-sm-12">
                            <label for="" class="col-md-12 col-lg-12 col-form-label">
                                File bạn đã tải lên: <a href="{{ asset('file_doanhnghiep/'.$PhanIII ->TrangThietBi) }}" target="_blank">Bấm vào để tải</a>
                            </label>
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
                    <input name="NhanLucDieuChinh" type="file" class="form-control" id="NhanLucDieuChinh" value="">
                </div>

                <label for="" class="col-md-4 col-lg-3 col-form-label">
                </label>
                <div class="col-md-8 col-lg-9">
                    <div class="col-sm-10">
                        <div class="col-sm-12">
                            <label for="" class="col-md-12 col-lg-12 col-form-label">
                                File bạn đã tải lên: <a href="{{ asset('file_doanhnghiep/'.$PhanIII ->NhanLucDieuChinh) }}" target="_blank">Bấm vào để tải</a>
                            </label>
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
                    <input name="DieuKienKhac" type="file" class="form-control" id="DieuKienKhac" value="">
                </div>

                <label for="" class="col-md-4 col-lg-3 col-form-label">
                </label>
                <div class="col-md-8 col-lg-9">
                    <div class="col-sm-10">
                        <div class="col-sm-12">
                            <label for="" class="col-md-12 col-lg-12 col-form-label">
                                File bạn đã tải lên: <a href="{{ asset('file_doanhnghiep/'.$PhanIII ->DieuKienKhac) }}" target="_blank">Bấm vào để tải</a>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            @else

            @endif

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </div>
        </form>

    </div> <!-- hết phần III -->
    <script src="//cdn.ckeditor.com/4.16.2/full-all/ckeditor.js"></script>
    <script>
    CKEDITOR.replace('PhanTichChung');
    CKEDITOR.replace('PhanTichCanhTranh');
    CKEDITOR.replace('MucTieuChienLuoc');
    </script>
</main>
@endsection