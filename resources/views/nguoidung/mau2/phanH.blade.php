@extends( 'nguoidung.mau2.mau2')
@section ('content')
<main>
    <!--  PHẦN H -->
    <div class="tab-pane fade pt-3" id="phanH">
        <h3 style="text-align:center;">Dành cho tổ chức/cá nhân đề xuất:</h3>
        <hr>
        <form>
            {{ csrf_field() }}
            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Tên tổ chức/cá nhân:
                </label>
                <div class="col-md-8 col-lg-9">
                    <input name="" type="text" class="form-control" id="" value="">
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Xin gửi Phiếu đăng ký này đến OCOP:
                </label>
                <div class="col-md-8 col-lg-9">
                    <input name="" type="text" class="form-control" id="" value="">
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Địa chỉ:
                </label>
                <div class="col-md-8 col-lg-9">
                    <input name="" type="text" class="form-control" id="" value="">
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Điện thoại:
                </label>
                <div class="col-md-8 col-lg-9">
                    <input name="" type="text" class="form-control" id="" value="">
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </div>
        </form>
    </div>
</main>
@endsection