@extends( 'nguoidung.mau2.mau2')
@section ('content')
<main>
    <!--  PHẦN G -->
    <div class="" id="phanG">
        <h3 style="text-align:center;">NHU CẦU HỖ TRỢ</h3>
        <hr><br>
        <form action="{{ URL::to('/nguoidung/capnhatmau2phanG') }}" enctype="multipart/form-data" class="row g-3"
            method="POST">
            {{ csrf_field() }}
            @if ($PhanG != NULL)
            <input value="{{$PhanG->id}}" type="text" class="form-control" name="id" hidden>
            <div class="row mb-3" hidden>
                <label for="" class="col-md-4 col-lg-3 col-form-label">Tên chủ thể:</label>
                <div class="col-md-8 col-lg-9">
                    <input name="TenDonVi" type="text" class="form-control" id="" value="{{$PhanG-> TenDonVi}}">
                </div>
            </div>
            <br>
            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Trình bày ngắn gọn về lĩnh vực và yêu cầu các cơ quan thực hiện: Tải file trình bày lên
                </label>
                <div class="col-md-8 col-lg-9">
                    <input name="NhuCauHoTro" type="file" class="form-control" id="NhuCauHoTro" value="">
                </div>

                <label for="" class="col-md-4 col-lg-3 col-form-label">
                </label>
                <div class="col-md-8 col-lg-9">
                    <div class="col-sm-10">
                        <div class="col-sm-12">
                            
                            @if ( $PhanG ->NhuCauHoTro!=NULL)
                            <label for="" class="col-md-12 col-lg-12 col-form-label">
                                File bạn đã tải lên: <a href="{{ asset('file_doanhnghiep/'.$PhanG ->NhuCauHoTro) }}" target="_blank">Bấm vào để tải</a>
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
            <div class="row mb-3" hidden>
                <label for="" class="col-md-4 col-lg-3 col-form-label">Tên chủ thể:</label>
                <div class="col-md-8 col-lg-9">
                    <input name="TenDonVi" type="text" class="form-control" id="" value="">
                </div>
            </div>
            <br>
            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Trình bày ngắn gọn về lĩnh vực và yêu cầu các cơ quan thực hiện: Tải file trình bày lên
                </label>
                <div class="col-md-8 col-lg-9">
                    <input name="NhuCauHoTro" type="file" class="form-control" id="NhuCauHoTro" value="">
                </div>
            </div>
            @endif
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </div>

        </form>
    </div>
</main>
@endsection