@extends( 'nguoidung.mau3.mau3')
@section ('content')
<main>
    <!-- PHẦN II -->
    <div class="" id="phanII">
        <h3 style="text-align:center;">
            PHẦN II. TỔNG QUAN VỀ TÌNH HÌNH THỊ TRƯỜNG VÀ KHẢ NĂNG THAM GIA CỦA DOANH NGHIỆP/HỢP TÁC XÃ/TỔ HỢP TÁC/HỘ
            KINH DOANH
        </h3>
        <hr><br>
        <form action="{{ URL::to('/nguoidung/capnhatmau3phanII') }}"
            enctype="multipart/form-data" class="row g-3" method="POST">
            {{ csrf_field() }}
            @if ($PhanII != NULL)
            <input value="{{$PhanII->id}}" type="text" class="form-control" name="id" hidden>
            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">Đánh giá chung về tình hình thị trường</label>
                <div class="col-md-8 col-lg-9">
                    <textarea name="DanhGiaThiTruong" type="text" class="form-control" id="DanhGiaThiTruong">{!!$PhanII->DanhGiaThiTruong!!}</textarea>
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">Đánh giá khả năng tham gia thị trường</label>
                <div class="col-md-8 col-lg-9">
                    <textarea name="DanhGiaKhaNangThamGiaThiTruong" type="text" class="form-control" id="DanhGiaKhaNangThamGiaThiTruong" >{!!$PhanII->DanhGiaKhaNangThamGiaThiTruong!!}</textarea>
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">Căn cứ pháp lý thành lập và hoạt động</label>
                <div class="col-md-8 col-lg-9">
                    <textarea name="CanCuPhapLy" type="text" class="form-control" id="CanCuPhapLy">{!!$PhanII->CanCuPhapLy!!}</textarea> 
                </div>
            </div>

            @else
            <input value="{{$PhanII->id}}" type="text" class="form-control" name="id" hidden>
            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">Đánh giá chung về tình hình thị trường</label>
                <div class="col-md-8 col-lg-9">
                    <textarea name="DanhGiaThiTruong" type="text" class="form-control" id="DanhGiaThiTruong">{!!$PhanII->DanhGiaThiTruong!!}</textarea>
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">Đánh giá khả năng tham gia thị trường</label>
                <div class="col-md-8 col-lg-9">
                    <textarea name="DanhGiaKhaNangThamGiaThiTruong" type="text" class="form-control" id="DanhGiaKhaNangThamGiaThiTruong" >{!!$PhanII->DanhGiaKhaNangThamGiaThiTruong!!}</textarea>
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">Căn cứ pháp lý thành lập và hoạt động</label>
                <div class="col-md-8 col-lg-9">
                    <textarea name="CanCuPhapLy" type="text" class="form-control" id="CanCuPhapLy">{!!$PhanII->CanCuPhapLy!!}</textarea> 
                </div>
            </div>
            @endif
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </div>
        </form>

    </div> <!-- hết phần II -->
    <script src="//cdn.ckeditor.com/4.16.2/full-all/ckeditor.js"></script>
    <script>
    CKEDITOR.replace('DanhGiaThiTruong');
    CKEDITOR.replace('DanhGiaKhaNangThamGiaThiTruong');
    CKEDITOR.replace('CanCuPhapLy');
    </script>
</main>
@endsection