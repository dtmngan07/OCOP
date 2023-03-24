@extends( 'nguoidung.mau2.mau2')
@section ('content')
<main><!-- PHẦN A -->

<div class="tab-pane fade show active pt-3" id="phanA">
    <h3 style="text-align:center;">DÀNH CHO CÁN BỘ QUẢN LÝ CHƯƠNG TRÌNH OCOP</h3>
    <hr>
    <form>
        {{ csrf_field() }}
        <div class="row mb-3">
            <label for="" class="col-md-4 col-lg-3 col-form-label">Phiếu số:</label>
            <div class="col-md-8 col-lg-9">
                <input name="" type="text" class="form-control" id="" value="">
            </div>
        </div>

        <div class="row mb-3">
            <label for="" class="col-md-4 col-lg-3 col-form-label">Ngày nhận:</label>
            <div class="col-md-8 col-lg-9">
                <input name="" type="date" class="form-control" id="" value="">
            </div>
        </div>

        <div class="row mb-3">
            <label for="" class="col-md-4 col-lg-3 col-form-label">Người tiếp nhận:</label>
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