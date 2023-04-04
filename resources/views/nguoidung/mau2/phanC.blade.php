@extends( 'nguoidung.mau2.mau2')
@section('content')
<main>
    <!--  PHẦN C -->
    <div lass="tab-pae fade pt-3" id="phanC">
        <h3 style="text-align:center;">PHẦN C. MÔI TRƯỜNG KINH DOANH </h3>
        <hr>
        <br>
        <form action="{{ URL::to('/nguoidung/capnhatmau2phanC') }}" enctype="multipart/form-data" class="row g-3"
            method="POST">
            {{ csrf_field() }}
            @if ($PhanC != NULL)
            <input value="{{$PhanC->id}}" type="text" class="form-control" name="id" hidden>
            <div class="row mb-3" hidden>
                <label for="" class="col-md-4 col-lg-3 col-form-label">Tên chủ thể:</label>
                <div class="col-md-8 col-lg-9">
                    <input name="TenDonVi" type="text" class="form-control" id="" value="{{$PhanC-> TenDonVi}}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Đất và văn phòng: rỗng
                </label>
                <div class="col-md-8 col-lg-9">
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input name="DatvaVanPhong[]" id="DatvaVanPhong" value="Thuê" class="form-check-input"
                                type="checkbox"
                                {{ in_array("Thuê", explode(' - ', $PhanC->DatvaVanPhong)) ? 'checked' : '' }}>
                            <label class="form-check-label" for="">
                                Thuê
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="DatvaVanPhong[]" id="DatvaVanPhong" value="Sở hữu" class="form-check-input"
                                type="checkbox"
                                {{ in_array("Sở hữu", explode(' - ', $PhanC->DatvaVanPhong)) ? 'checked' : '' }}>
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
                            <input name="DatSanXuat[]" value="Thuê" class="form-check-input" type="checkbox"
                                id="DatSanXuat"
                                {{ in_array("Thuê", explode(' - ', $PhanC->DatSanXuat)) ? 'checked' : '' }}>
                            <label class="form-check-label" for="">
                                Thuê
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="DatSanXuat[]" value="Sở hữu" class="form-check-input" type="checkbox"
                                id="DatSanXuat"
                                {{ in_array("Sở hữu", explode(' - ', $PhanC->DatSanXuat)) ? 'checked' : '' }}>
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
                            <input name="NguonDien[]" value="Đã mắc" class="form-check-input" type="checkbox"
                                id="NguonDien"
                                {{ in_array("Đã mắc", explode(' - ', $PhanC->NguonDien)) ? 'checked' : '' }}>
                            <label class="form-check-label">
                                Đã mắc
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="NguonDien[]" value="Đang có kế hoạch" class="form-check-input" type="checkbox"
                                id="NguonDien"
                                {{ in_array("Đang có kế hoạch", explode(' - ', $PhanC->NguonDien)) ? 'checked' : '' }}>
                            <label class="form-check-label">
                                Đang có kế hoạch
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="NguonDien[]" value="Không có" class="form-check-input" type="checkbox"
                                id="NguonDien"
                                {{ in_array("Không có", explode(' - ', $PhanC->NguonDien)) ? 'checked' : '' }}>
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
                            <input name="NguonNuoc[]" value="Nước sạch" class="form-check-input" type="checkbox" id=""
                                {{ in_array("Nước sạch", explode(' - ', $PhanC->NguonNuoc)) ? 'checked' : '' }}>
                            <label class="form-check-label">
                                Nước sạch
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="NguonNuoc[]" value="Nước giếng khoan" class="form-check-input" type="checkbox"
                                id=""
                                {{ in_array("Nước giếng khoan", explode(' - ', $PhanC->NguonNuoc)) ? 'checked' : '' }}>
                            <label class="form-check-label">
                                Nước giếng khoan
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="NguonNuoc[]" value="Không có" class="form-check-input" type="checkbox" id=""
                                {{ in_array("Không có", explode(' - ', $PhanC->NguonNuoc)) ? 'checked' : '' }}>
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
                                Bạn đã chọn: {!!$PhanC->NguonNuoc!!}
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
                            <input name="PhuongTienVanTai[]" value="Có xe ô tô" class="form-check-input" type="checkbox"
                                id="gridCheck1"
                                {{ in_array("Có xe ô tô", explode(' - ', $PhanC->PhuongTienVanTai)) ? 'checked' : '' }}>
                            <label class="form-check-label">
                                Có xe ô tô
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="PhuongTienVanTai[]" value="Xe máy" class="form-check-input" type="checkbox"
                                id="gridCheck2"
                                {{ in_array("Xe máy", explode(' - ', $PhanC->PhuongTienVanTai)) ? 'checked' : '' }}>
                            <label class="form-check-label">
                                Xe máy
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="PhuongTienVanTai[]" value="Xe trâu/bò kéo" class="form-check-input"
                                type="checkbox" id="gridCheck2"
                                {{ in_array("Xe trâu/bò kéo", explode(' - ', $PhanC->PhuongTienVanTai)) ? 'checked' : '' }}>
                            <label class="form-check-label">
                                Xe trâu/bò kéo
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="PhuongTienVanTai[]" value="Không có" class="form-check-input" type="checkbox"
                                id="gridCheck2"
                                {{ in_array("Không có", explode(' - ', $PhanC->PhuongTienVanTai)) ? 'checked' : '' }}>
                            <label class="form-check-label">
                                Không có
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="PhuongTienVanTai[]" value="Thuê" class="form-check-input" type="checkbox"
                                id="gridCheck2"
                                {{ in_array("Thuê", explode(' - ', $PhanC->PhuongTienVanTai)) ? 'checked' : '' }}>
                            <label class="form-check-label">
                                Thuê
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="PhuongTienVanTai[]" value="Phương tiện công cộng" class="form-check-input"
                                type="checkbox" id="gridCheck2"
                                {{ in_array("Phương tiện công cộng", explode(' - ', $PhanC->PhuongTienVanTai)) ? 'checked' : '' }}>
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
                            <input name="PhuongTienTruyenThong[]" value="Điện thoại để bàn" class="form-check-input"
                                type="checkbox" id="gridCheck1"
                                {{ in_array("Điện thoại để bàn", explode(' - ', $PhanC->PhuongTienTruyenThong)) ? 'checked' : '' }}>
                            <label class="form-check-label">
                                Điện thoại để bàn
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="PhuongTienTruyenThong[]" value="Điện thoại di động" class="form-check-input"
                                type="checkbox" id="gridCheck2"
                                {{ in_array("Điện thoại di động", explode(' - ', $PhanC->PhuongTienTruyenThong)) ? 'checked' : '' }}>
                            <label class="form-check-label">
                                Điện thoại di động
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="PhuongTienTruyenThong[]" value="Bưu điện" class="form-check-input"
                                type="checkbox" id="gridCheck2"
                                {{ in_array("Bưu điện", explode(' - ', $PhanC->PhuongTienTruyenThong)) ? 'checked' : '' }}>
                            <label class="form-check-label">
                                Bưu điện
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="PhuongTienTruyenThong[]" value="E-mail" class="form-check-input"
                                type="checkbox" id="gridCheck2"
                                {{ in_array("Email", explode(' - ', $PhanC->PhuongTienTruyenThong)) ? 'checked' : '' }}>
                            <label class="form-check-label">
                                E-mail
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="PhuongTienTruyenThong[]" value="Website" class="form-check-input"
                                type="checkbox" id="gridCheck2"
                                {{ in_array("Website", explode(' - ', $PhanC->PhuongTienTruyenThong)) ? 'checked' : '' }}>
                            <label class="form-check-label">
                                Website
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="PhuongTienTruyenThong[]" value="Mạng xã hội" class="form-check-input"
                                type="checkbox" id="gridCheck2"
                                {{ in_array("Mạng xã hội", explode(' - ', $PhanC->PhuongTienTruyenThong)) ? 'checked' : '' }}>
                            <label class="form-check-label">
                                Mạng xã hội
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="PhuongTienTruyenThong[]" value="Không có" class="form-check-input"
                                type="checkbox" id="gridCheck2"
                                {{ in_array("Không có", explode(' - ', $PhanC->PhuongTienTruyenThong)) ? 'checked' : '' }}>
                            <label class="form-check-label">
                                Không có
                            </label>
                        </div>

                        <label for="" class="col-md-4 col-lg-3 col-form-label">Khác:</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="PhuongTienTruyenThong[]" type="text" class="form-control" id="" value="">
                        </div>

                        <div class="col-sm-12">
                            <label for="" class="col-md-12 col-lg-12 col-form-label">
                                Bạn đã chọn: {!!$PhanC->PhuongTienTruyenThong!!}
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
                    <input name="KetQuaBanHang" type="file" class="form-control" id="KetQuaBanHang" multiple>
                </div>

                <label for="" class="col-md-4 col-lg-3 col-form-label">
                </label>
                <div class="col-md-8 col-lg-9">
                    <div class="col-sm-10">
                        <div class="col-sm-12">
                            @if ( $PhanC ->KetQuaBanHang!=NULL)
                            <label for="" class="col-md-12 col-lg-12 col-form-label">
                                File bạn đã tải lên: <a href="{{ asset('file_doanhnghiep/'.$PhanC ->KetQuaBanHang) }}"
                                    target="_blank">Bấm vào để tải</a>
                            </label>
                            @else
                            <label for="" class="col-md-12 col-lg-12 col-form-label">
                                Bạn chưa tải lên file
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
                    <input name="ChiPhi" type="file" class="form-control" id="ChiPhi" multiple>
                </div>

                <label for="" class="col-md-4 col-lg-3 col-form-label">
                </label>
                <div class="col-md-8 col-lg-9">
                    <div class="col-sm-10">
                        <div class="col-sm-12">
                            @if ( $PhanC ->ChiPhi!=NULL)
                            <label for="" class="col-md-12 col-lg-12 col-form-label">
                                File bạn đã tải lên: <a href="{{ asset('file_doanhnghiep/'.$PhanC ->ChiPhi) }}"
                                    target="_blank">Bấm vào để tải</a>
                            </label>
                            @else
                            <label for="" class="col-md-12 col-lg-12 col-form-label">
                                Bạn chưa tải lên file
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
                    <input name="DoanhThu" type="file" class="form-control" id="DoanhThu" multiple>
                </div>

                <label for="" class="col-md-4 col-lg-3 col-form-label">
                </label>
                <div class="col-md-8 col-lg-9">
                    <div class="col-sm-10">
                        <div class="col-sm-12">
                            
                            @if ( $PhanC ->DoanhThu!=NULL)
                            <label for="" class="col-md-12 col-lg-12 col-form-label">
                                File bạn đã tải lên: <a href="{{ asset('file_doanhnghiep/'.$PhanC ->DoanhThu) }}"
                                    target="_blank">Bấm vào để tải</a>
                            </label>
                            @else
                            <label for="" class="col-md-12 col-lg-12 col-form-label">
                                Bạn chưa tải lên file
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
                    <input name="NhanLuc" type="file" class="form-control" id="NhanLuc" multiple>
                </div>

                <label for="" class="col-md-4 col-lg-3 col-form-label">
                </label>
                <div class="col-md-8 col-lg-9">
                    <div class="col-sm-10">
                        <div class="col-sm-12">
                            
                            @if ( $PhanC ->NhanLuc!=NULL)
                            <label for="" class="col-md-12 col-lg-12 col-form-label">
                                File bạn đã tải lên: <a href="{{ asset('file_doanhnghiep/'.$PhanC ->NhanLuc) }}"
                                    target="_blank">Bấm vào để tải</a>
                            </label>
                            @else
                            <label for="" class="col-md-12 col-lg-12 col-form-label">
                                Bạn chưa tải lên file
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
                    <input name="NguonCungCapNguyenLieu" type="file" class="form-control" id="NguonCungCapNguyenLieu"
                        multiple>
                </div>

                <label for="" class="col-md-4 col-lg-3 col-form-label">
                </label>
                <div class="col-md-8 col-lg-9">
                    <div class="col-sm-10">
                        <div class="col-sm-12">
                            
                            @if ( $PhanC ->NguonCungCapNguyenLieu!=NULL)
                            <label for="" class="col-md-12 col-lg-12 col-form-label">
                                File bạn đã tải lên: <a
                                    href="{{ asset('file_doanhnghiep/'.$PhanC ->NguonCungCapNguyenLieu) }}"
                                    target="_blank">Bấm vào để tải</a>
                            </label>
                            @else
                            <label for="" class="col-md-12 col-lg-12 col-form-label">
                                Bạn chưa tải lên file
                            </label>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @else
            <input value="{{$PhanC->id}}" type="text" class="form-control" name="id" hidden>
            <div class="row mb-3" hidden>
                <label for="" class="col-md-4 col-lg-3 col-form-label">Tên chủ thể:</label>
                <div class="col-md-8 col-lg-9">
                    <input name="TenDonVi" type="text" class="form-control" id="" value="{{$PhanC-> TenDonVi}}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Đất và văn phòng: rỗng
                </label>
                <div class="col-md-8 col-lg-9">
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input name="DatvaVanPhong[]" id="DatvaVanPhong" value="Thuê" class="form-check-input"
                                type="checkbox">
                            <label class="form-check-label" for="">
                                Thuê
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="DatvaVanPhong[]" id="DatvaVanPhong" value="Sở hữu" class="form-check-input"
                                type="checkbox">
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
                            <input name="DatSanXuat[]" value="Thuê" class="form-check-input" type="checkbox"
                                id="DatSanXuat">
                            <label class="form-check-label" for="">
                                Thuê
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="DatSanXuat[]" value="Sở hữu" class="form-check-input" type="checkbox"
                                id="DatSanXuat">
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
                            <input name="NguonDien[]" value="Đã mắc" class="form-check-input" type="checkbox"
                                id="NguonDien">
                            <label class="form-check-label">
                                Đã mắc
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="NguonDien[]" value="Đang có kế hoạch" class="form-check-input" type="checkbox"
                                id="NguonDien">
                            <label class="form-check-label">
                                Đang có kế hoạch
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="NguonDien[]" value="Không có" class="form-check-input" type="checkbox"
                                id="NguonDien">
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
                            <input name="NguonNuoc[]" value="Nước sạch" class="form-check-input" type="checkbox" id="">
                            <label class="form-check-label">
                                Nước sạch
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="NguonNuoc[]" value="Nước giếng khoan" class="form-check-input" type="checkbox"
                                id="">
                            <label class="form-check-label">
                                Nước giếng khoan
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="NguonNuoc[]" value="Không có" class="form-check-input" type="checkbox" id="">
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
                            <input name="PhuongTienVanTai[]" value="Có xe ô tô" class="form-check-input" type="checkbox"
                                id="gridCheck1">
                            <label class="form-check-label">
                                Có xe ô tô
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="PhuongTienVanTai[]" value="Xe máy" class="form-check-input" type="checkbox"
                                id="gridCheck2">
                            <label class="form-check-label">
                                Xe máy
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="PhuongTienVanTai[]" value="Xe trâu/bò kéo" class="form-check-input"
                                type="checkbox" id="gridCheck2">
                            <label class="form-check-label">
                                Xe trâu/bò kéo
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="PhuongTienVanTai[]" value="Không có" class="form-check-input" type="checkbox"
                                id="gridCheck2">
                            <label class="form-check-label">
                                Không có
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="PhuongTienVanTai[]" value="Thuê" class="form-check-input" type="checkbox"
                                id="gridCheck2">
                            <label class="form-check-label">
                                Thuê
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="PhuongTienVanTai[]" value="Phương tiện công cộng" class="form-check-input"
                                type="checkbox" id="gridCheck2">
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
                            <input name="PhuongTienTruyenThong[]" value="Điện thoại để bàn" class="form-check-input"
                                type="checkbox" id="gridCheck1">
                            <label class="form-check-label">
                                Điện thoại để bàn
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="PhuongTienTruyenThong[]" value="Điện thoại di động" class="form-check-input"
                                type="checkbox" id="gridCheck2">
                            <label class="form-check-label">
                                Điện thoại di động
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="PhuongTienTruyenThong[]" value="Bưu điện" class="form-check-input"
                                type="checkbox" id="gridCheck2">
                            <label class="form-check-label">
                                Bưu điện
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="PhuongTienTruyenThong[]" value="E-mail" class="form-check-input"
                                type="checkbox" id="gridCheck2">
                            <label class="form-check-label">
                                E-mail
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="PhuongTienTruyenThong[]" value="Website" class="form-check-input"
                                type="checkbox" id="gridCheck2">
                            <label class="form-check-label">
                                Website
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="PhuongTienTruyenThong[]" value="Mạng xã hội" class="form-check-input"
                                type="checkbox" id="gridCheck2">
                            <label class="form-check-label">
                                Mạng xã hội
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="PhuongTienTruyenThong[]" value="Không có" class="form-check-input"
                                type="checkbox" id="gridCheck2">
                            <label class="form-check-label">
                                Không có
                            </label>
                        </div>

                        <label for="" class="col-md-4 col-lg-3 col-form-label">Khác:</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="PhuongTienTruyenThong[]" type="text" class="form-control" id="" value="">
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
                    <input name="KetQuaBanHang" type="file" class="form-control" id="KetQuaBanHang" multiple>
                </div>

            </div>
            <br>
            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Chi phí:
                </label>
                <div class="col-md-8 col-lg-9">
                    <input name="ChiPhi" type="file" class="form-control" id="ChiPhi" multiple>
                </div>

            </div>
            <br>
            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Lãi/lỗ: tháng 04/2021 đến nay…
                </label>
                <div class="col-md-8 col-lg-9">
                    <input name="DoanhThu" type="file" class="form-control" id="DoanhThu" multiple>
                </div>

            </div>
            <br>
            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Nhân lực:
                </label>
                <div class="col-md-8 col-lg-9">
                    <input name="NhanLuc" type="file" class="form-control" id="NhanLuc" multiple>
                </div>

            </div>
            <br>
            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Nguồn cung cấp nguyên vật liệu đầu vào:
                </label>
                <div class="col-md-8 col-lg-9">
                    <input name="NguonCungCapNguyenLieu" type="file" class="form-control" id="NguonCungCapNguyenLieu"
                        multiple>
                </div>

            </div>
            @endif
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </div>

        </form>
    </div> <!-- HẾT PHẦN C -->
</main>
@endsection