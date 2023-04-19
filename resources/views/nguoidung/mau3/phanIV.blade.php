@extends( 'nguoidung.mau3.mau3')
@section ('content')
<main>
    <!-- PHẦN IV -->
    <div class="" id="phanIV">
        <h3 style="text-align:center;">
            PHẦN IV. PHƯƠNG ÁN TÀI CHÍNH
        </h3>
        <hr>
        <form action="{{ URL::to('/nguoidung/capnhatmau3phanIV') }}" enctype="multipart/form-data" class="row g-3"
            method="POST">
            {{ csrf_field() }}
            @if ($PhanIV != NULL)
            <input value="{{$PhanIV->id}}" type="text" class="form-control" name="id" hidden>
            <h4 style="text-align:center;">I. PHƯƠNG ÁN HUY ĐỘNG VÀ SỬ DỤNG VỐN</h4>
            <div class="row mb-3" hidden>
                <label for="" class="col-md-4 col-lg-3 col-form-label">Tên chủ thể:</label>
                <div class="col-md-8 col-lg-9">
                    <input name="TenDonVi" type="text" class="form-control" id="" value="{{$PhanIV-> TenDonVi}}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Tổng nhu cầu vốn:
                </label>
                <div class="col-md-8 col-lg-9">
                    <input name="NhuCauVon" type="file" class="form-control" id="" value="">
                </div>

                <label for="" class="col-md-4 col-lg-3 col-form-label">
                </label>
                <div class="col-md-8 col-lg-9">
                    <div class="col-sm-10">
                        <div class="col-sm-12">
                            
                            @if ( $PhanIV ->NhuCauVon!=NULL)
                            <label for="" class="col-md-12 col-lg-12 col-form-label">
                                File bạn đã tải lên: <a href="{{ asset('file_doanhnghiep/'.$PhanIV ->NhuCauVon) }}"
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
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Phương án huy dộng vốn:
                </label>
                <div class="col-md-8 col-lg-9">
                    <input name="PhuongAnHuyDong" type="file" class="form-control" id="" value="">
                </div>

                <label for="" class="col-md-4 col-lg-3 col-form-label">
                </label>
                <div class="col-md-8 col-lg-9">
                    <div class="col-sm-10">
                        <div class="col-sm-12">
                            
                            @if ( $PhanIV ->PhuongAnHuyDong!=NULL)
                            <label for="" class="col-md-12 col-lg-12 col-form-label">
                                File bạn đã tải lên: <a
                                    href="{{ asset('file_doanhnghiep/'.$PhanIV ->PhuongAnHuyDong) }}"
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

            <hr>
            <h4 style="text-align:center;">II. PHƯƠNG ÁN DOANH THU, CHI PHÍ, LỢI NHUẬN TRONG NĂM</h4>
            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Tổng doanh thu:
                </label>
                <div class="col-md-8 col-lg-9">
                    <input name="TongDoanhThu" type="file" class="form-control">
                </div>

                <label for="" class="col-md-4 col-lg-3 col-form-label">
                </label>
                <div class="col-md-8 col-lg-9">
                    <div class="col-sm-10">
                        <div class="col-sm-12">
                            
                            @if ( $PhanIV ->TongDoanhThu!=NULL)
                            <label for="" class="col-md-12 col-lg-12 col-form-label">
                                File bạn đã tải lên: <a href="{{ asset('file_doanhnghiep/'.$PhanIV ->TongDoanhThu) }}"
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
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Tổng chi phí:
                </label>
                <div class="col-md-8 col-lg-9">
                    <input name="TongChiPhi" type="file" class="form-control">
                </div>

                <label for="" class="col-md-4 col-lg-3 col-form-label">
                </label>
                <div class="col-md-8 col-lg-9">
                    <div class="col-sm-10">
                        <div class="col-sm-12">
                            
                            @if ( $PhanIV ->TongChiPhi!=NULL)
                            <label for="" class="col-md-12 col-lg-12 col-form-label">
                                File bạn đã tải lên: <a href="{{ asset('file_doanhnghiep/'.$PhanIV ->TongChiPhi) }}"
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
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Lợi nhuận:
                </label>
                <div class="col-md-8 col-lg-9">
                    <input name="LoiNhuan" type="file" class="form-control" id="" value="">
                </div>

                <label for="" class="col-md-4 col-lg-3 col-form-label">
                </label>
                <div class="col-md-8 col-lg-9">
                    <div class="col-sm-10">
                        <div class="col-sm-12">
                            
                            @if ( $PhanIV ->LoiNhuan!=NULL)
                            <label for="" class="col-md-12 col-lg-12 col-form-label">
                                File bạn đã tải lên: <a href="{{ asset('file_doanhnghiep/'.$PhanIV ->LoiNhuan) }}"
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

            <hr>
            <h4 style="text-align:center;">III. PHƯƠNG ÁN TÀI CHÍNH KHÁC</h4>
            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                </label>
                <div class="col-md-8 col-lg-9">
                    <input name="PhuongAnTaiChinhKhac" type="file" class="form-control">
                </div>

                <label for="" class="col-md-4 col-lg-3 col-form-label">
                </label>
                <div class="col-md-8 col-lg-9">
                    <div class="col-sm-10">
                        <div class="col-sm-12">
                            
                            @if ( $PhanIV ->PhuongAnTaiChinhKhac!=NULL)
                            <label for="" class="col-md-12 col-lg-12 col-form-label">
                                File bạn đã tải lên: <a
                                    href="{{ asset('file_doanhnghiep/'.$PhanIV ->PhuongAnTaiChinhKhac) }}"
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
            <input value="" type="text" class="form-control" name="id" hidden>
            <h4 style="text-align:center;">I. PHƯƠNG ÁN HUY ĐỘNG VÀ SỬ DỤNG VỐN</h4>
            <div class="row mb-3" hidden>
                <label for="" class="col-md-4 col-lg-3 col-form-label">Tên chủ thể:</label>
                <div class="col-md-8 col-lg-9">
                    <input name="TenDonVi" type="text" class="form-control" id="" value="">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Tổng nhu cầu vốn:
                </label>
                <div class="col-md-8 col-lg-9">
                    <input name="NhuCauVon" type="file" class="form-control" id="" value="">
                </div>

            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Phương án huy dộng vốn:
                </label>
                <div class="col-md-8 col-lg-9">
                    <input name="PhuongAnHuyDong" type="file" class="form-control" id="" value="">
                </div>

            </div>

            <hr>
            <h4 style="text-align:center;">II. PHƯƠNG ÁN DOANH THU, CHI PHÍ, LỢI NHUẬN TRONG NĂM</h4>
            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Tổng doanh thu:
                </label>
                <div class="col-md-8 col-lg-9">
                    <input name="TongDoanhThu" type="file" class="form-control">
                </div>

            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Tổng chi phí:
                </label>
                <div class="col-md-8 col-lg-9">
                    <input name="TongChiPhi" type="file" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Lợi nhuận:
                </label>
                <div class="col-md-8 col-lg-9">
                    <input name="LoiNhuan" type="file" class="form-control" id="" value="">
                </div>

            </div>

            <hr>
            <h4 style="text-align:center;">III. PHƯƠNG ÁN TÀI CHÍNH KHÁC</h4>
            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                </label>
                <div class="col-md-8 col-lg-9">
                    <input name="PhuongAnTaiChinhKhac" type="file" class="form-control">
                </div>
            </div>
            @endif
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </div>
        </form>

    </div> <!-- hết phần IV -->
</main>
@endsection