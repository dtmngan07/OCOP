@extends( 'kiemduyet.KiemDuyetHome')
@section ('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Danh sách doanh nghiệp đăng ký</h5>
        <br>
        <table class="table table-bordered">
            <thead>
            
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên doanh nghiệp</th>
                    <th scope="col">Sản phẩm đăng ký</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Email</th>
                    <th scope="col">Người đại diện</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col">Xem chi tiết</th>
                    <th scope="col">Xóa</th>

                </tr>
            </thead>
            <tbody>
            @php
            $i = 0;
            @endphp
            @if ($DonViDuyet->DonViDuyetID == null)
                <h5>Bạn phải cập nhật thông tin đơn vị!</h5>
            @endif
            @foreach($HoSo as $iteam)
                @if ($DonViDuyet->DonViDuyetID == $iteam->don_vi_duyet_id)
                <tr>
                @csrf
                    <td>{{ ++$i }}</td>
                    <td>{{ $iteam->TenDonVi }}</td>
                    <td>{{ $iteam->SanPham }}</td>
                    <td>{{ $iteam->DiaChiCty}}</td>
                    <td>{{ $iteam->DienThoai }}</td>
                    <td>{{ $iteam->Email }}</td>
                    <td>{{ $iteam->TenNguoiDaiDien}}</td>
                    <td>
                        @if ($iteam->TrangThai === 0)
                        <a href="#"
                            class="btn btn-danger">Chưa duyệt</a>
                        @elseif ($iteam->TrangThai === 1)
                        <a href="#"
                            class="btn btn-warning">Bổ sung hồ sơ</a>
                        @elseif ($iteam->TrangThai === 2)
                        <a href="#"
                            class="btn btn-success">Đã duyệt</a>
                        @endif
                    </td>
                    <td><a href="{{ URL::to('/kiemduyet/xemchitiet',['id' => $iteam->HoSo_id]) }}" class="btn btn-warning"><i class="bi bi-collection"></i></a></td>
                    <td><a href="{{ URL::to('/kiemduyet/xoa',['id' => $iteam->HoSo_id]) }}" class="btn btn-danger"><i class="bi bi-x-lg"></i></a></td>
                </tr>
                @endif
            @endforeach
            </tbody>
            
        </table>
@endsection