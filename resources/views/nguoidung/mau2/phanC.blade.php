@extends( 'nguoidung.mau2.mau2')
@section('content')
<main>
    <!--  PHẦN C -->
    <div lass="tab-pae fade pt-3" id="phanC">
        <h3 style="text-align:center;">PHẦN C. MÔI TRƯỜNG KINH DOANH </h3>
        <hr>
        <br>
        <form action="{{ URL::to('/nguoidung/capnhatmau2phanC') }}" enctype="multipart/form-data" class="row g-3" method="POST">
            {{ csrf_field() }}
            @if ($PhanC != NULL)
            <input value="{{$PhanC->id}}" type="text" class="form-control" name="id" hidden>
            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Đất và văn phòng: rỗng  
                </label>
                <div class="col-md-8 col-lg-9">
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input name="DatvaVanPhong[]" id="DatvaVanPhong" value="Thuê" class="form-check-input" type="checkbox">
                            <label class="form-check-label" for="">
                                Thuê
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="DatvaVanPhong[]" id="DatvaVanPhong" value="Sở hữu" class="form-check-input" type="checkbox">
                            <label class="form-check-label" for="">
                                Sở hữu
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <label for="" class="col-md-12 col-lg-12 col-form-label">
                            Bạn đã chọn: {!!$PhanC->DatvaVanPhong!!}</label>
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
                            <input name="DatSanXuat[]" value="Thuê" class="form-check-input" type="checkbox" id="DatSanXuat">
                            <label class="form-check-label" for="">
                                Thuê
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="DatSanXuat[]" value="Sở hữu" class="form-check-input" type="checkbox" id="DatSanXuat">
                            <label class="form-check-label" for="">
                                Sở hữu
                            </label>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <label for="" class="col-md-12 col-lg-12 col-form-label">
                        Bạn đã chọn: {!!$PhanC->DatSanXuat!!}
                        </label>
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
                            <input name="NguonDien[]" value="Đã mắc" class="form-check-input" type="checkbox" id="NguonDien">
                            <label class="form-check-label">
                                Đã mắc
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="NguonDien[]" value="Đang có kế hoạch" class="form-check-input" type="checkbox" id="NguonDien">
                            <label class="form-check-label">
                                Đang có kế hoạch
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="NguonDien[]" value="Không có" class="form-check-input" type="checkbox" id="NguonDien">
                            <label class="form-check-label">
                                Không có
                            </label>
                        </div>

                        <div class="col-sm-12">
                            <label for="" class="col-md-12 col-lg-12 col-form-label">
                            Bạn đã chọn: {!!$PhanC->NguonDien!!}
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
                            <label class="form-check-label" >
                                Nước sạch
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="NguonNuoc[]" value="Nước giếng khoan" class="form-check-input" type="checkbox" id="">
                            <label class="form-check-label" >
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

                        <div class="col-sm-12">
                            <label for="" class="col-md-12 col-lg-12 col-form-label">
                            Bạn đã chọn: {!!$PhanC->NguonNuoc!!}
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Phương tiện vận tải:
                </label>
                <div class="col-md-8 col-lg-9">
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input name="PhuongTienVanTai[]" value="Có xe ô tô" class="form-check-input" type="checkbox" id="gridCheck1">
                            <label class="form-check-label">
                                Có xe ô tô
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="PhuongTienVanTai[]" value="Xe máy" class="form-check-input" type="checkbox" id="gridCheck2">
                            <label class="form-check-label">
                                Xe máy
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="PhuongTienVanTai[]" value="Xe trâu/bò kéo" class="form-check-input" type="checkbox" id="gridCheck2">
                            <label class="form-check-label">
                                Xe trâu/bò kéo
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="PhuongTienVanTai[]" value="Không có" class="form-check-input" type="checkbox" id="gridCheck2">
                            <label class="form-check-label">
                                Không có
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="PhuongTienVanTai[]" value="Thuê" class="form-check-input" type="checkbox" id="gridCheck2">
                            <label class="form-check-label">
                                Thuê
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="PhuongTienVanTai[]" value="Phương tiện công cộng" class="form-check-input" type="checkbox" id="gridCheck2">
                            <label class="form-check-label">
                                Phương tiện công cộng
                            </label>
                        </div>

                        <div class="col-sm-12">
                            <label for="" class="col-md-12 col-lg-12 col-form-label">
                            Bạn đã chọn: {!!$PhanC->PhuongTienVanTai!!}
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
                            <input name="PhuongTienTruyenThong[]" value="Điện thoại để bàn" class="form-check-input" type="checkbox" id="gridCheck1">
                            <label class="form-check-label">
                                Điện thoại để bàn
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="PhuongTienTruyenThong[]" value="Điện thoại di động" class="form-check-input" type="checkbox" id="gridCheck2">
                            <label class="form-check-label">
                                Điện thoại di động
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="PhuongTienTruyenThong[]" value="Bưu điện" class="form-check-input" type="checkbox" id="gridCheck2">
                            <label class="form-check-label">
                                Bưu điện
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="PhuongTienTruyenThong[]" value="E-mail" class="form-check-input" type="checkbox" id="gridCheck2">
                            <label class="form-check-label">
                                E-mail
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="PhuongTienTruyenThong[]" value="Website" class="form-check-input" type="checkbox" id="gridCheck2">
                            <label class="form-check-label">
                                Website
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="PhuongTienTruyenThong[]" value="Mạng xã hội" class="form-check-input" type="checkbox" id="gridCheck2">
                            <label class="form-check-label">
                                Mạng xã hội
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="PhuongTienTruyenThong[]" value="Không có" class="form-check-input" type="checkbox" id="gridCheck2">
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
                    <input name="" type="file" class="form-control" id="" value="">
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Chi phí:
                </label>
                <div class="col-md-8 col-lg-9">
                    <input name="" type="file" class="form-control" id="" value="">
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Lãi/lỗ: tháng 04/2021 đến nay…
                </label>
                <div class="col-md-8 col-lg-9">
                    <input name="" type="file" class="form-control" id="" value="">
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Nhân lực:
                </label>
                <div class="col-md-8 col-lg-9">
                    <input name="" type="file" class="form-control" id="" value="">
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Nguồn cung cấp nguyên vật liệu đầu vào:
                </label>
                <div class="col-md-8 col-lg-9">
                    <input name="" type="file" class="form-control" id="" value="">
                </div>
            </div>
            @else
            <input value="" type="text" class="form-control" name="id" hidden>
            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Đất và văn phòng:
                </label>
                <div class="col-md-8 col-lg-9">
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input name="DatvaVanPhong[]" value="Thuê" class="form-check-input" type="checkbox">
                            <label class="form-check-label" for="">
                                Thuê
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="DatvaVanPhong[]" value="Sở hữu" class="form-check-input" type="checkbox">
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
                            <input name="DatSanXuat[]" value="Thuê" class="form-check-input" type="checkbox">
                            <label class="form-check-label" for="">
                                Thuê
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="DatSanXuat[]" value="Sỡ hữu" class="form-check-input" type="checkbox">
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
                            <input name='NguonDien[]' value='Đã mắc' class="form-check-input" type="checkbox">
                            <label class="form-check-label" for="gridCheck1">
                                Đã mắc
                            </label>
                        </div>

                        <div class="form-check">
                            <input name='NguonDien[]' value='Đang có kế hoạch' class="form-check-input" type="checkbox">
                            <label class="form-check-label" for="gridCheck2">
                                Đang có kế hoạch
                            </label>
                        </div>

                        <div class="form-check">
                            <input name='NguonDien[]' value='Không có' class="form-check-input" type="checkbox">
                            <label class="form-check-label" for="gridCheck2">
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
                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">
                                Nước sạch
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck2">
                            <label class="form-check-label" for="gridCheck2">
                                Nước giếng khoan
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck2">
                            <label class="form-check-label" for="gridCheck2">
                                Không có
                            </label>
                        </div>

                        <label for="" class="col-md-4 col-lg-3 col-form-label">Nguồn
                            khác:</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="" type="text" class="form-control" id="" value="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Phương tiện vận tải:
                </label>
                <div class="col-md-8 col-lg-9">
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">
                                Có xe ô tô
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck2">
                            <label class="form-check-label" for="gridCheck2">
                                Xe máy
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck2">
                            <label class="form-check-label" for="gridCheck2">
                                Xe trâu/bò kéo
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck2">
                            <label class="form-check-label" for="gridCheck2">
                                Không có
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck2">
                            <label class="form-check-label" for="gridCheck2">
                                Thuê
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck2">
                            <label class="form-check-label" for="gridCheck2">
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
                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">
                                Điện thoại để bàn
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck2">
                            <label class="form-check-label" for="gridCheck2">
                                Điện thoại di động
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck2">
                            <label class="form-check-label" for="gridCheck2">
                                Bưu điện
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck2">
                            <label class="form-check-label" for="gridCheck2">
                                E-mail
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck2">
                            <label class="form-check-label" for="gridCheck2">
                                Website
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck2">
                            <label class="form-check-label" for="gridCheck2">
                                Mạng xã hội
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck2">
                            <label class="form-check-label" for="gridCheck2">
                                Không có
                            </label>
                        </div>

                        <label for="" class="col-md-4 col-lg-3 col-form-label">Khác:</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="" type="text" class="form-control" id="" value="">
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
                    <input name="" type="file" class="form-control" id="" value="">
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Chi phí:
                </label>
                <div class="col-md-8 col-lg-9">
                    <input name="" type="file" class="form-control" id="" value="">
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Lãi/lỗ: tháng 04/2021 đến nay…
                </label>
                <div class="col-md-8 col-lg-9">
                    <input name="" type="file" class="form-control" id="" value="">
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Nhân lực:
                </label>
                <div class="col-md-8 col-lg-9">
                    <input name="" type="file" class="form-control" id="" value="">
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Nguồn cung cấp nguyên vật liệu đầu vào:
                </label>
                <div class="col-md-8 col-lg-9">
                    <input name="" type="file" class="form-control" id="" value="">
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