@extends( 'admin.AdminHome')
@section ('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Danh sách phiểu đăng ký đã cấp</h5>
        <a href="{{ URL::to('/admin/phieudangky/them') }}" class="btn btn-info"><i class="bi bi-plus-lg"></i>Thêm phiếu đăng ký</a>
        <hr>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">id phiếu</th>
                    <th scope="col">Số phiếu đăng ký</th>
                    <th scope="col">Ngày đăng ký</th>
                    <th scope="col">Tên đơn vị</th>
                    <th scope="col">id hs</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
            @php
            $i = 0;
            @endphp
            @foreach($PhieuDangKy as $iteam)
                <tr>
                @csrf
                    <td>{{ ++$i }}</td>
                    <td>{{ $iteam->Phieu_id }}</td>
                    <td>{{ $iteam->sophieu }}</td>
                    <td>{{ $iteam->ngaydangky}}</td>
                    <td>{{ $iteam->TenDonVi}}</td>
                    <td>{{ $iteam->ho_so_id}}</td>
                    <td><a href="{{ URL::to('/admin/phieudangky/sua',['id' => $iteam->Phieu_id]) }}" class="btn btn-info"><i class="bi bi-pencil-fill"></i></a></td>
                    <td><a href="{{ URL::to('/admin/phieudangky/xoa',['id' => $iteam->Phieu_id]) }}" class="btn btn-info"><i class="bi bi-x-lg"></i></a></td>
                </tr>
                @endforeach
            </tbody>
            
        </table>
@endsection