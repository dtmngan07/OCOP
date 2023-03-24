@extends( 'nguoidung.mau2.mau2')
@sec ton ('content)
<main>
    <!--  PHẦN E -->
    <div lass="tab-pane fade pt
    -3" id="phanE">
        <h3 style="text-align:center;">THÔNG TIN CHUNG</h3>
        <hr>

        <form>
            {{ csrf_field() }}
            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Mô tả vắn tắt phương án kinh doanh; ho t động kinh doanh và quy mô sản xuất:
                </label>
                <div class="col-md-8 col-lg-9">
                    <input name="" type="text" class="form-control" id="ckeditor4" value="">
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Sơ đồ tóm tắt quy trình sản xuất tạo sản phẩm
                </label>
                <div class="col-md-8 col-lg-9">
                    <input name="" type="file" class="form-control" id="" value="">
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Có nhận được hỗ trợ về đào tạo nào không?:
                </label>
                <div class="col-md-8 col-lg-9">
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">
                                Có
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck2">
                            <label class="form-check-label" for="gridCheck2">
                                Không
                            </label>
                        </div>

                        <div class="col-md-10 col-lg-12">
                            <label for="" class=" col-form-label">
                                Nếu có, trình bày ngắn gọn loại hình đào tạo và tổ chức thực
                                hiện đào tạo:
                            </label>
                            <input name="" type="text" class="form-control" id="" value="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Có nhận được hỗ trợ nào khác không?:
                </label>
                <div class="col-md-8 col-lg-9">
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">
                                Có
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck2">
                            <label class="form-check-label" for="gridCheck2">
                                Không
                            </label>
                        </div>

                        <div class="col-md-10 col-lg-12">
                            <label for="" class=" col-form-label">
                                Nếu có, trình bày vắn tắt:
                            </label>
                            <input name="" type="file" class="form-control" id="" value="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Cách chia số tiền, lợi nhuận thu được:
                </label>
                <div class="col-md-8 col-lg-9">
                    <input name="" type="text" class="form-control" id="ckeditor5" value="">
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Liệt kê các thách thức chính của doanh nghiệp/hợp tác xã/tổ hợp tác/hộ gặp
                    phải:
                </label>
                <div class="col-md-8 col-lg-9">
                    <input name="" type="text" class="form-control" id="ckeditor6" value="">
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </div>
        </form>

    </div>
</main>
@endsection