@extends( 'nguoidung.mau4.index_mau4')
@section ('content')
<main id="" class="">
    <h1 style="text-align:center;">BIỂU SỐ 04: MẪU GIỚI THIỆU VỀ TỔ CHỨC THAM GIA CHƯƠNG TRÌNH OCOP</h1>
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body pt-3">
                <br>
                <form action="{{ URL::to('/nguoidung/capnhatmau4') }}" enctype="multipart/form-data" class="row g-3"
                    method="POST">
                    {{ csrf_field() }}
                    @if ($Mau4 != NULL)
                    <input value="{{$Mau4->id}}" type="text" class="form-control" name="id" hidden>
                    <div class="row mb-3">
                        <label for="" class="col-md-4 col-lg-3 col-form-label">Tên chủ thể:</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="TenDonVi" type="text" class="form-control" id="" value="{{$Mau4->TenDonVi}}" readonly>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-md-4 col-lg-3 col-form-label">Địa chỉ thường trú của người điều
                            hành:</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="DiaChi_NguoiDaiDien" type="text" class="form-control" id="DiaChi_NguoiDaiDien"
                                value="{{ $Mau4->DiaChi_NguoiDaiDien}}" readonly>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-md-4 col-lg-3 col-form-label">Địa chỉ xưởng sản xuất:</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="DiaChiXuong" type="text" class="form-control" id="DiaChiXuong"
                                value="{{ $Mau4->DiaChiXuong}}" readonly>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-md-4 col-lg-3 col-form-label">Số điện thoại:</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="DienThoai" type="text" class="form-control" id="" value="{{ $Mau4->DienThoai}}"
                                readonly>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-md-4 col-lg-3 col-form-label">Email:</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="Email" type="text" class="form-control" id="Email" value="{{ $Mau4->Email}}"
                                readonly>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-md-4 col-lg-3 col-form-label">Website:</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="Website" type="text" class="form-control" id="Website"
                                value="{{ $Mau4->Website}}" readonly>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-md-4 col-lg-3 col-form-label">Cơ cấu tổ chức, loại hình doanh
                            nghiệp:</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="CoCauToChuc" type="file" class="form-control" id="CoCauToChuc" value="">
                        </div>

                        <label for="" class="col-md-4 col-lg-3 col-form-label">
                        </label>
                        <div class="col-md-8 col-lg-9">
                            <div class="col-sm-10">
                                <div class="col-sm-12">
                                    
                                    @if ( $Mau4 ->CoCauToChuc!=NULL)
                                    <label for="" class="col-md-12 col-lg-12 col-form-label">
                                        File bạn đã tải lên: <a
                                            href="{{ asset('file_doanhnghiep/'.$Mau4 ->CoCauToChuc) }}"
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

                    <div class="row mb-3">
                        <label for="" class="col-md-4 col-lg-3 col-form-label">Sự tham gia của cộng đồng:</label>
                        <div class="col-md-8 col-lg-9">
                            <textarea name="CongDong" type="text" class="form-control"
                                id="CongDong">{!! $Mau4->CongDong !!}</textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-md-4 col-lg-3 col-form-label">Hoạt động kế toán của cơ sở:</label>
                        <div class="col-md-8 col-lg-9">
                            <textarea name="HoatDongKeToan" type="text" class="form-control"
                                id="HoatDongKeToan">{!! $Mau4->HoatDongKeToan!!}</textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-md-4 col-lg-3 col-form-label">Tình hình tiếp thị của sản phẩm:</label>
                        <div class="col-md-8 col-lg-9">
                            <textarea name="TinhHinhTiepThi" type="text" class="form-control"
                                id="TinhHinhTiepThi">{!! $Mau4->TinhHinhTiepThi!!}</textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-md-4 col-lg-3 col-form-label">Phương án bảo vệ môi trường:</label>
                        <div class="col-md-8 col-lg-9">
                            <textarea name="PhuongAnBaoVeMoiTruong" type="text" class="form-control"
                                id="PhuongAnBaoVeMoiTruong">{!! $Mau4->PhuongAnBaoVeMoiTruong !!}</textarea>
                        </div>
                    </div>
                    @else
                    <input value="{{$Mau4->id}}" type="text" class="form-control" name="id" hidden>
                    <div class="row mb-3">
                        <label for="" class="col-md-4 col-lg-3 col-form-label">Tên chủ thể:</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="" type="text" class="form-control" id="" value="{{$Mau4->TenDonVi}}" readonly>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-md-4 col-lg-3 col-form-label">Địa chỉ thường trú của người điều
                            hành:</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="DiaChi_NguoiDaiDien" type="text" class="form-control" id="DiaChi_NguoiDaiDien"
                                value="{{ $Mau4->DiaChi_NguoiDaiDien}}" readonly>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-md-4 col-lg-3 col-form-label">Địa chỉ xưởng sản xuất:</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="DiaChiXuong" type="text" class="form-control" id="DiaChiXuong"
                                value="{{ $Mau4->DiaChiXuong}}" readonly>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-md-4 col-lg-3 col-form-label">Số điện thoại:</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="DienThoai" type="text" class="form-control" id="" value="{{ $Mau4->DienThoai}}"
                                readonly>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-md-4 col-lg-3 col-form-label">Email:</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="Email" type="text" class="form-control" id="Email" value="{{ $Mau4->Email}}"
                                readonly>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-md-4 col-lg-3 col-form-label">Website:</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="Website" type="text" class="form-control" id="Website"
                                value="{{ $Mau4->Website}}" readonly>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-md-4 col-lg-3 col-form-label">Cơ cấu tổ chức, loại hình doanh
                            nghiệp:</label>
                        <div class="col-md-8 col-lg-9">
                            <input name="CoCauToChuc" type="file" class="form-control" id="CoCauToChuc" value="">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-md-4 col-lg-3 col-form-label">Sự tham gia của cộng đồng:</label>
                        <div class="col-md-8 col-lg-9">
                            <textarea name="CongDong" type="text" class="form-control"
                                id="CongDong">{!! $Mau4->CongDong !!}</textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-md-4 col-lg-3 col-form-label">Hoạt động kế toán của cơ sở:</label>
                        <div class="col-md-8 col-lg-9">
                            <textarea name="HoatDongKeToan" type="text" class="form-control"
                                id="HoatDongKeToan">{!! $Mau4->HoatDongKeToan!!}</textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-md-4 col-lg-3 col-form-label">Tình hình tiếp thị của sản phẩm:</label>
                        <div class="col-md-8 col-lg-9">
                            <textarea name="TinhHinhTiepThi" type="text" class="form-control"
                                id="TinhHinhTiepThi">{!! $Mau4->TinhHinhTiepThi!!}</textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-md-4 col-lg-3 col-form-label">Phương án bảo vệ môi trường:</label>
                        <div class="col-md-8 col-lg-9">
                            <textarea name="PhuongAnBaoVeMoiTruong" type="text" class="form-control"
                                id="PhuongAnBaoVeMoiTruong">{!! $Mau4->PhuongAnBaoVeMoiTruong !!}</textarea>
                        </div>
                    </div>
                    @endif
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Lưu</button>
                    </div>

                </form>
            </div>
        </div>

    </div>
    <script src="//cdn.ckeditor.com/4.16.2/full-all/ckeditor.js"></script>
    <script>
    CKEDITOR.replace('CongDong');
    CKEDITOR.replace('HoatDongKeToan');
    CKEDITOR.replace('TinhHinhTiepThi');
    CKEDITOR.replace('PhuongAnBaoVeMoiTruong');
    </script>
</main><!-- End #main -->
@endsection