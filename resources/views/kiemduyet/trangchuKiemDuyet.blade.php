@extends( 'kiemduyet.KiemDuyetHome')
@section ('content')
<section class="section dashboard">
    <div class="row">
    
        <!-- Left side columns -->
        <div class="col-lg-12">
            <div class="row">
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card revenue-card">
                        <div class="card-body">
                            <h5 class="card-title">Hồ sơ đã duyệt</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-check-lg"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>
                                      {{$DaDuyet->count()}}
                                    </h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Hồ sơ chờ bổ sung</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-exclamation-lg"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>
                                        {{$BoSungHS->count()}}
                                    </h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                
                <div class="col-xxl-4 col-xl-12">

                    <div class="card info-card customers-card">
                        <div class="card-body">
                            <h5 class="card-title">Hồ sơ chưa duyệt</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-x-lg"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>
                                    {{$ChuaDuyet->count()}}
                                    </h6>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Left side columns -->
       
    </div>
</section>
@endsection