@extends( 'nguoidung.mau2.mau2')
@section ('content')
<main>
    <!--  PHẦN E -->
    <div class="" id="phanE">
        <h3 style="text-align:center;">THÔNG TIN CHUNG</h3>
        <hr>
        <br>
        <form action="{{ URL::to('/nguoidung/capnhatmau2phanE') }}" enctype="multipart/form-data" class="row g-3"
            method="POST">
            {{ csrf_field() }}
            @if ($PhanE != NULL)
            <input value="{{$PhanE->id}}" type="text" class="form-control" name="id" hidden>
            <div class="row mb-3" hidden>
                <label for="" class="col-md-4 col-lg-3 col-form-label">Tên chủ thể:</label>
                <div class="col-md-8 col-lg-9">
                    <input name="TenDonVi" type="text" class="form-control" id="" value="{{$PhanE-> TenDonVi}}">
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Mô tả vắn tắt phương án kinh doanh; hoạt động kinh doanh và quy mô sản xuất:
                </label>
                <div class="col-md-8 col-lg-9">
                    <textarea name="PhuongAnKinhDoanh" type="text" class="form-control" id="PhuongAnKinhDoanh" value="">
                    {!! $PhanE->PhuongAnKinhDoanh!!}
                    </textarea>
                </div>
            </div>
            <br>
            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Sơ đồ tóm tắt quy trình sản xuất tạo sản phẩm
                </label>
                <div class="col-md-8 col-lg-9">
                    <input name="QuyTrinhSanXuat" type="file" class="form-control" id="QuyTrinhSanXuat" value="">
                </div>

                <label for="" class="col-md-4 col-lg-3 col-form-label">
                </label>
                <div class="col-md-8 col-lg-9">
                    <div class="col-sm-10">
                        <div class="col-sm-12">
                            
                            @if ( $PhanE ->QuyTrinhSanXuat!=NULL)
                            <label for="" class="col-md-12 col-lg-12 col-form-label">
                                File bạn đã tải lên: <a href="{{ asset('file_doanhnghiep/'.$PhanE ->QuyTrinhSanXuat) }}" target="_blank">Bấm vào để tải</a>
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
                    Có nhận được hỗ trợ về đào tạo nào không?:
                </label>
                <div class="col-md-8 col-lg-9">
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input name="HoTroDaoTao[]" value="Có" class="form-check-input" type="checkbox" id=""
                            {{ in_array("Có", explode(' - ', $PhanE->HoTroDaoTao)) ? 'checked' : '' }}>
                            <label class="form-check-label" for="gridCheck1">
                                Có
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="HoTroDaoTao[]" value="Không" class="form-check-input" type="checkbox" id=""
                            {{ in_array("Không", explode(' - ', $PhanE->HoTroDaoTao)) ? 'checked' : '' }}>
                            <label class="form-check-label" for="gridCheck2">
                                Không
                            </label>
                        </div>

                        <div class="col-md-10 col-lg-12">
                            <label for="" class=" col-form-label">
                                Nếu có, trình bày ngắn gọn loại hình đào tạo và tổ chức thực
                                hiện đào tạo:
                            </label>
                            <input name="HoTroDaoTao[]" type="text" class="form-control" id="" value="{{ $PhanE->HoTroDaoTao}}">
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

                        <div class="col-md-10 col-lg-12">
                            <label for="" class=" col-form-label">
                                Nếu có, trình bày vắn tắt bằng file:
                            </label>
                            <input name="HoTroKhac" type="file" class="form-control">
                        </div>
                    </div>
                </div>

                <label for="" class="col-md-4 col-lg-3 col-form-label">
                </label>
                <div class="col-md-8 col-lg-9">
                    <div class="col-sm-10">
                        <div class="col-sm-12">
                            
                            @if ( $PhanE ->HoTroKhac!=NULL)
                            <label for="" class="col-md-12 col-lg-12 col-form-label">
                                File bạn đã tải lên: <a href="{{ asset('file_doanhnghiep/'.$PhanE ->HoTroKhac) }}" target="_blank">Bấm vào để tải</a>
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
                Chủ thể có tổ chứcc gặp mặt/họp thường xuyên không (ghi số lần họp/tháng, quý, năm nếu có):
                </label>
                <div class="col-md-8 col-lg-9">
                    <textarea name="TanSuatHopMat" type="text" class="form-control" id="TanSuatHopMat" value="">
                    {!! $PhanE->TanSuatHopMat!!}
                    </textarea>
                </div>
            </div>
            <br>
            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Cách chia số tiền, lợi nhuận thu được:
                </label>
                <div class="col-md-8 col-lg-9">
                    <textarea name="CachChiaTien" type="text" class="form-control" id="CachChiaTien" value="">
                    {!! $PhanE->CachChiaTien!!}
                    </textarea>
                </div>
            </div>
            <br>
            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Liệt kê các thách thức chính của doanh nghiệp/hợp tác xã/tổ hợp tác/hộ gặp phải:
                </label>
                <div class="col-md-8 col-lg-9">
                    <textarea name="ThachThuc" type="text" class="form-control" id="ThachThuc" value="">
                    {!! $PhanE->ThachThuc!!}
                    </textarea>
                </div>
            </div>
            <br>
            @else
            <input value="{{$PhanE->id}}" type="text" class="form-control" name="id" hidden>
            <div class="row mb-3" hidden>
                <label for="" class="col-md-4 col-lg-3 col-form-label">Tên chủ thể:</label>
                <div class="col-md-8 col-lg-9">
                    <input name="TenDonVi" type="text" class="form-control" id="" value="{{$PhanE-> TenDonVi}}">
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Mô tả vắn tắt phương án kinh doanh; hoạt động kinh doanh và quy mô sản xuất:
                </label>
                <div class="col-md-8 col-lg-9">
                    <textarea name="PhuongAnKinhDoanh" type="text" class="form-control" id="PhuongAnKinhDoanh" value="">
                    </textarea>
                </div>
            </div>
            <br>
            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Sơ đồ tóm tắt quy trình sản xuất tạo sản phẩm
                </label>
                <div class="col-md-8 col-lg-9">
                    <input name="QuyTrinhSanXuat" type="file" class="form-control" id="QuyTrinhSanXuat" value="">
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
                            <input name="HoTroDaoTao[]" value="Có" class="form-check-input" type="checkbox" id="gridCheck1"
                            >
                            <label class="form-check-label" for="gridCheck1">
                                Có
                            </label>
                        </div>

                        <div class="form-check">
                            <input name="HoTroDaoTao[]" value="Không" class="form-check-input" type="checkbox" id="gridCheck2"
                            xxxxx>
                            <label class="form-check-label" for="gridCheck2">
                                Không
                            </label>
                        </div>

                        <div class="col-md-10 col-lg-12">
                            <label for="" class=" col-form-label">
                                Nếu có, trình bày ngắn gọn loại hình đào tạo và tổ chức thực
                                hiện đào tạo:
                            </label>
                            <input name="HoTroDaoTao[]" type="text" class="form-control" id="" value="">
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

                        <div class="col-md-10 col-lg-12">
                            <label for="" class=" col-form-label">
                                Nếu có, trình bày vắn tắt bằng file:
                            </label>
                            <input name="HoTroKhac" type="file" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                Chủ thể có tổ chứcc gặp mặt/họp thường xuyên không (ghi số lần họp/tháng, quý, năm nếu có):
                </label>
                <div class="col-md-8 col-lg-9">
                    <textarea name="TanSuatHopMat" type="text" class="form-control" id="TanSuatHopMat" value="">
 
                    </textarea>
                </div>
            </div>
            <br>
            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Cách chia số tiền, lợi nhuận thu được:
                </label>
                <div class="col-md-8 col-lg-9">
                    <textarea name="CachChiaTien" type="text" class="form-control" id="CachChiaTien" value="">

                    </textarea>
                </div>
            </div>
            <br>
            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Liệt kê các thách thức chính của doanh nghiệp/hợp tác xã/tổ hợp tác/hộ gặp phải:
                </label>
                <div class="col-md-8 col-lg-9">
                    <textarea name="ThachThuc" type="text" class="form-control" id="ThachThuc" value="">

                    </textarea>
                </div>
            </div>
            <br>
            @endif
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </div>
        </form>

    </div>
    <script src="//cdn.ckeditor.com/4.16.2/full-all/ckeditor.js"></script>
    <script>
    CKEDITOR.replace('PhuongAnKinhDoanh');
    CKEDITOR.replace('TanSuatHopMat');
    CKEDITOR.replace('CachChiaTien');
    CKEDITOR.replace('ThachThuc');
    </script>
</main>
@endsection