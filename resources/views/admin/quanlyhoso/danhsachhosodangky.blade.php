@extends( 'admin.AdminHome')
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
                    <th scope="col">Website</th>
                    <th scope="col">Người đại diện</th>
                    <th scope="col">Xem chi tiết</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
            @php
            $i = 0;
            @endphp
            @foreach($HoSo as $iteam)
                <tr>
                @csrf
                    <td>{{ ++$i }}</td>
                    <td>{{ $iteam->TenDonVi }}</td>
                    <td>{{ $iteam->SanPham }}</td>
                    <td>{{ $iteam->DiaChiCty}}</td>
                    <td>{{ $iteam->DienThoai }}</td>
                    <td>{{ $iteam->Email }}</td>
                    <td>{{ $iteam->Website }}</td>
                    <td>{{ $iteam->TenNguoiDaiDien}}</td>
                    <td><a href="{{ URL::to('/admin/xemchitiet/',['id' => $iteam->id]) }}" class="btn btn-info">Xem chi tiết</a></td>
                    <td><a>Xóa</a></td>
                </tr>
                @endforeach
            </tbody>
            
        </table>
@endsection