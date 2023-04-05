@extends( 'nguoidung.mau2.mau2')
@section ('content')
<main>
    <!--  PHẦN D -->
    <div class="" id="phanD">
        <h3 style="text-align:center;">THÔNG TIN VỀ KINH DOANH</h3>
        <hr><br>
        <form action="{{ URL::to('/nguoidung/capnhatmau2phanD') }}" enctype="multipart/form-data" class="row g-3"
            method="POST">
            {{ csrf_field() }}
            @if ($PhanD != NULL)
            <input value="{{$PhanD->id}}" type="text" class="form-control" name="id" hidden>
            <div class="row mb-3" hidden>
                <label for="" class="col-md-4 col-lg-3 col-form-label">Tên chủ thể:</label>
                <div class="col-md-8 col-lg-9">
                    <input name="TenDonVi" type="text" class="form-control" id="" value="{{$PhanD-> TenDonVi}}">
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Mức độ thường xuyên của hoạt động sản xuất sản phẩm:
                </label>
                <div class="col-md-8 col-lg-9">
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input name="MucDoHoatDongSanXuat[]" value="Thường xuyên hàng ngày" class="form-check-input" type="checkbox"
                            {{ in_array("Thường xuyên hàng ngày", explode(' - ', $PhanD->MucDoHoatDongSanXuat)) ? 'checked' : '' }}>
                            <label class="form-check-label">
                                Thường xuyên hàng ngày
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="MucDoHoatDongSanXuat[]" value="Theo tuần" class="form-check-input" type="checkbox"
                            {{ in_array("Theo tuần", explode(' - ', $PhanD->MucDoHoatDongSanXuat)) ? 'checked' : '' }}>
                            <label class="form-check-label" for="gridCheck2">
                                Theo tuần
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="MucDoHoatDongSanXuat[]" value="Theo tháng" class="form-check-input" type="checkbox"
                            {{ in_array("Theo tháng", explode(' - ', $PhanD->MucDoHoatDongSanXuat)) ? 'checked' : '' }}>
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
                    <input name="ThiTruong" value="{!! $PhanD-> ThiTruong !!}"  type="text" class="form-control" id="ThiTruong">
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
                            <input name="MucDoBanSanPham[]" value="Thường xuyên hàng ngày" class="form-check-input" type="checkbox" 
                            {{ in_array("Thường xuyên hàng ngày", explode(' - ', $PhanD->MucDoBanSanPham)) ? 'checked' : '' }}>
                            <label class="form-check-label" for="gridCheck1">
                                Thường xuyên hàng ngày
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="MucDoBanSanPham[]" value="Theo tuần" class="form-check-input" type="checkbox"
                            {{ in_array("Theo tuần", explode(' - ', $PhanD->MucDoBanSanPham)) ? 'checked' : '' }}>
                            <label class="form-check-label" for="gridCheck2">
                                Theo tuần
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="MucDoBanSanPham[]" value="Theo tháng" class="form-check-input" type="checkbox"
                            {{ in_array("Theo tháng", explode(' - ', $PhanD->MucDoBanSanPham)) ? 'checked' : '' }}>
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
                            <input name="DoiTuongKhachHang[]" value="Khá giả" class="form-check-input" type="checkbox"
                            {{ in_array("Khá giả", explode(' - ', $PhanD->DoiTuongKhachHang)) ? 'checked' : '' }}>
                            <label class="form-check-label" for="gridCheck1">
                                Khá giả
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="DoiTuongKhachHang[]" value="Bình dân" class="form-check-input" type="checkbox"
                            {{ in_array("Bình dân", explode(' - ', $PhanD->DoiTuongKhachHang)) ? 'checked' : '' }}>
                            <label class="form-check-label" for="gridCheck2">
                                Bình dân
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="DoiTuongKhachHang[]" value="Nông thôn" class="form-check-input" type="checkbox"
                            {{ in_array("Nông thôn", explode(' - ', $PhanD->DoiTuongKhachHang)) ? 'checked' : '' }}>
                            <label class="form-check-label" for="gridCheck2">
                                Nông thôn
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="DoiTuongKhachHang[]" value="Thành thị" class="form-check-input" type="checkbox"
                            {{ in_array("Thành thị", explode(' - ', $PhanD->DoiTuongKhachHang)) ? 'checked' : '' }}>
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
                    <input  name="VonDieuLe" value="{{ $PhanD-> VonDieuLe }}" type="text" class="form-control" readonly>

                    <label for="" class="col-md-4 col-lg-3 col-form-label">
                        Loại hình góp vốn:
                    </label>
                    <input  name="LoaiHinhGopVon" value="{{ $PhanD-> LoaiHinhGopVon }}" type="text" class="form-control">
                </div>
            </div>
            <br>
            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Nơi sản xuất, hoàn thiện sản phẩm (ghi rõ địa chỉ nơi sản xuất, hoàn thiện
                    sản phẩm):
                </label>
                <div class="col-md-8 col-lg-9">
                    <input  name="DiaChiSanXuat" value="{{ $PhanD-> DiaChiSanXuat }}" type="text" class="form-control">
                </div>
            </div>

            @else
            <input value="" type="text" class="form-control" name="id" hidden>
            <div class="row mb-3" hidden>
                <label for="" class="col-md-4 col-lg-3 col-form-label">Tên chủ thể:</label>
                <div class="col-md-8 col-lg-9">
                    <input name="TenDonVi" type="text" class="form-control" id="" value="">
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Mức độ thường xuyên của hoạt động sản xuất sản phẩm:
                </label>
                <div class="col-md-8 col-lg-9">
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input name="MucDoHoatDongSanXuat[]" value="Thường xuyên hàng ngày" class="form-check-input" type="checkbox"
                            {{ in_array("Thường xuyên hàng ngày", explode(' - ', $PhanD->MucDoHoatDongSanXuat)) ? 'checked' : '' }}>
                            <label class="form-check-label">
                                Thường xuyên hàng ngày
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="MucDoHoatDongSanXuat[]" value="Theo tuần" class="form-check-input" type="checkbox"
                            {{ in_array("Theo tuần", explode(' - ', $PhanD->MucDoHoatDongSanXuat)) ? 'checked' : '' }}>
                            <label class="form-check-label" for="gridCheck2">
                                Theo tuần
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="MucDoHoatDongSanXuat[]" value="Theo tháng" class="form-check-input" type="checkbox"
                            {{ in_array("Theo tháng", explode(' - ', $PhanD->MucDoHoatDongSanXuat)) ? 'checked' : '' }}>
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
                    <input name="ThiTruong" value=""  type="text" class="form-control" id="ThiTruong">
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
                            <input name="MucDoBanSanPham[]" value="Thường xuyên hàng ngày" class="form-check-input" type="checkbox" 
                            {{ in_array("Thường xuyên hàng ngày", explode(' - ', $PhanD->MucDoBanSanPham)) ? 'checked' : '' }}>
                            <label class="form-check-label" for="gridCheck1">
                                Thường xuyên hàng ngày
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="MucDoBanSanPham[]" value="Theo tuần" class="form-check-input" type="checkbox"
                            {{ in_array("Theo tuần", explode(' - ', $PhanD->MucDoBanSanPham)) ? 'checked' : '' }}>
                            <label class="form-check-label" for="gridCheck2">
                                Theo tuần
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="MucDoBanSanPham[]" value="Theo tháng" class="form-check-input" type="checkbox"
                            {{ in_array("Theo tháng", explode(' - ', $PhanD->MucDoBanSanPham)) ? 'checked' : '' }}>
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
                            <input name="DoiTuongKhachHang[]" value="Khá giả" class="form-check-input" type="checkbox"
                            {{ in_array("Khá giả", explode(' - ', $PhanD->DoiTuongKhachHang)) ? 'checked' : '' }}>
                            <label class="form-check-label" for="gridCheck1">
                                Khá giả
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="DoiTuongKhachHang[]" value="Bình dân" class="form-check-input" type="checkbox"
                            {{ in_array("Bình dân", explode(' - ', $PhanD->DoiTuongKhachHang)) ? 'checked' : '' }}>
                            <label class="form-check-label" for="gridCheck2">
                                Bình dân
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="DoiTuongKhachHang[]" value="Nông thôn" class="form-check-input" type="checkbox"
                            {{ in_array("Nông thôn", explode(' - ', $PhanD->DoiTuongKhachHang)) ? 'checked' : '' }}>
                            <label class="form-check-label" for="gridCheck2">
                                Nông thôn
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="DoiTuongKhachHang[]" value="Thành thị" class="form-check-input" type="checkbox"
                            {{ in_array("Thành thị", explode(' - ', $PhanD->DoiTuongKhachHang)) ? 'checked' : '' }}>
                            <label class="form-check-label" for="gridCheck2">
                                Thành thị
                            </label>
                        </div>
                    </div>S
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
                    <input  name="VonDieuLe" value="" type="text" class="form-control" readonly>

                    <label for="" class="col-md-4 col-lg-3 col-form-label">
                        Loại hình góp vốn:
                    </label>
                    <input  name="LoaiHinhGopVon" value="" type="text" class="form-control">
                </div>
            </div>
            <br>
            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Nơi sản xuất, hoàn thiện sản phẩm (ghi rõ địa chỉ nơi sản xuất, hoàn thiện
                    sản phẩm):
                </label>
                <div class="col-md-8 col-lg-9">
                    <input  name="DiaChiSanXuat" value="" type="text" class="form-control">
                </div>
            </div>
            @endif
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Lưu</button>
            </div>

        </form>
    </div>
    <script src="//cdn.ckeditor.com/4.16.2/full-all/ckeditor.js"></script>
    <script>
    CKEDITOR.replace('ThiTruong');
</main>
@endsection