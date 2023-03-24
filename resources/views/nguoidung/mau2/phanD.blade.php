@extends( 'nguoidung.mau2.mau2')
@section ('content')
<main>
    <!--  PHẦN D -->
    <div class="tab-pane fade pt-3" id="phanD">
        <h3 style="text-align:center;">THÔNG TIN VỀ KINH DOANH</h3>
        <hr>
        <form>
            {{ csrf_field() }}
            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Mức độ thường xuyên của hoạt động sản xuất sản phẩm:
                </label>
                <div class="col-md-8 col-lg-9">
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">
                                Thường xuyên hàng ngày
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck2">
                            <label class="form-check-label" for="gridCheck2">
                                Theo tuần
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck2">
                            <label class="form-check-label" for="gridCheck2">
                                Theo tháng
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Thị trường đích (nêu cụ thể địa điểm/khu vực đang phân phối tại địa phương
                    (tỉnh, huyện xã, thôn); ngoài tỉnh)
                </label>
                <div class="col-md-8 col-lg-9">
                    <input name="" type="text" class="form-control" id="" value="">
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Mức độ thường xuyên của bán sản phẩm ?
                </label>
                <div class="col-md-8 col-lg-9">
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">
                                Thường xuyên hàng ngày
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck2">
                            <label class="form-check-label" for="gridCheck2">
                                Theo tuần
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck2">
                            <label class="form-check-label" for="gridCheck2">
                                Theo tháng
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Khách hàng hướng tới:
                </label>
                <div class="col-md-8 col-lg-9">
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">
                                Khá giả
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck2">
                            <label class="form-check-label" for="gridCheck2">
                                Bình dân
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck2">
                            <label class="form-check-label" for="gridCheck2">
                                Nông thôn
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck2">
                            <label class="form-check-label" for="gridCheck2">
                                Thành thị
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Doanh nghiệp/hợp tác xã/tổ hợp tác/hộ đã tích lũy vốn cho kinh doanh như thế
                    nào, số vốn góp của người địa phương
                    (ghi rõ vốn cá nhân tự có, vốn tập thể (vốn thành viên góp)?; loại hình góp
                    vốn (bằng tiền, mặt bằng, đất, công lao động,...).
                </label>


                <div class="col-md-8 col-lg-9">
                    <label for="" class="col-md-4 col-lg-3 col-form-label">Vốn điều lệ:</label>
                    <input name="" type="text" class="form-control" id="" value="">

                    <label for="" class="col-md-4 col-lg-3 col-form-label">Loại hình góp
                        vốn:</label>
                    <input name="" type="text" class="form-control" id="" value="">
                </div>
            </div>

            <div class="row mb-3">
                <label for="" class="col-md-4 col-lg-3 col-form-label">
                    Nơi sản xuất, hoàn thiệnn sản phẩm (ghi rõ địa chỉ nơi sản xuất, hoàn thiện
                    sản phẩm):
                </label>
                <div class="col-md-8 col-lg-9">
                    <input name="" type="text" class="form-control" id="" value="">
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Lưu</button>
            </div>

        </form>
    </div>
</main>
@endsection