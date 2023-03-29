@extends( 'nguoidung.mau2.mau2')
@section ('content')
<main><!-- PHẦN A -->

<div class="tab-pane fade show active pt-3" id="phanA">
    <h3 style="text-align:center;">DÀNH CHO CÁN BỘ QUẢN LÝ CHƯƠNG TRÌNH OCOP</h3>
    <hr>
    <form>
        @if ($PhanA != NULL)
        <div class="row mb-3">
            <label for="" class="col-md-4 col-lg-3 col-form-label">Phiếu số:</label>
            <div class="col-md-8 col-lg-9">
                <input name="sophieu" type="text" class="form-control" id="" value="{{$PhanA ->sophieu}}" readonly>
            </div>
        </div>

        <div class="row mb-3">
            <label for="" class="col-md-4 col-lg-3 col-form-label">Ngày nhận:</label>
            <div class="col-md-8 col-lg-9">
                <input name="ngaydangky" type="text" class="form-control" id="" value="{{$PhanA ->ngaydangky}}" readonly>
            </div>
        </div>

        <div class="row mb-3">
            <label for="" class="col-md-4 col-lg-3 col-form-label">Đơn vị tiếp nhận tiếp nhận:</label>
            <div class="col-md-8 col-lg-9">
                <input name="TenDonVi" type="text" class="form-control" id="" value="{{$PhanA ->TenDonVi}}" readonly>
            </div>
        </div>
        @else
        <div class="row mb-3">
            <label for="" class="col-md-4 col-lg-3 col-form-label">Phiếu số:</label>
            <div class="col-md-8 col-lg-9">
                <input name="sophieu" type="text" class="form-control" id="" value="" readonly>
            </div>
        </div>

        <div class="row mb-3">
            <label for="" class="col-md-4 col-lg-3 col-form-label">Ngày nhận:</label>
            <div class="col-md-8 col-lg-9">
                <input name="ngaydangky" type="text" class="form-control" id="" value="" readonly>
            </div>
        </div>

        <div class="row mb-3">
            <label for="" class="col-md-4 col-lg-3 col-form-label">Đơn vị tiếp nhận tiếp nhận:</label>
            <div class="col-md-8 col-lg-9">
                <input name="" type="text" class="form-control" id="" value="" readonly>
            </div>
        </div>
        @endif
    </form>

</div>
</main>
@endsection