@extends( 'nguoidung.mau2.mau2')
@section ('content')
<main>
    <!--  PHẦN G -->
    <div class="tab-pane fade pt-3" id="phanG">
        <h3 style="text-align:center;">NHU CẦU HỖ TRỢ</h3>
        <hr>
        <form>
            {{ csrf_field() }}
            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Trình bày ngắn gọn trong bảng dưới đây về lĩnh vực và yêu cầu các cơ quan
                    thực hiện:
                </label>
                <div class="col-md-8 col-lg-9">
                    <input name="" type="file" class="form-control" id="" value="">
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Lưu</button>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </div>

        </form>
    </div>
</main>
@endsection