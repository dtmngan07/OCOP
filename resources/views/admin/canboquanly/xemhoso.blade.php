@extends( 'admin.AdminHome')
@section ('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Danh sách cán bộ quản lý</h5>
        <a href="{{ URL::to('/admin/canboquanly/them') }}" class="btn btn-info"><i class="bi bi-plus-lg"></i>Thêm cán bộ quản lý</a>
        <hr>
        <table class="table table-bordered">
            <thead>
            
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Họ tên</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Quyền</th>
                    <th scope="col">Xóa</th>
                    <th scope="col">Sửa</th>
                    
                </tr>
            </thead>
            <tbody>
            @php
            $i = 0;
            @endphp
            @foreach($CanBoQuanLy as $iteam)
                <tr>
                @csrf
                    <td>{{++$i}}</td>
                    <td>{{ $iteam -> hoten }}</td>
                    <td>{{ $iteam -> diachi }}</td>
                    <td>{{ $iteam -> sodienthoai }}</td>
                    <td>{{ $iteam -> role_name }}</td>
                    <td><a href="{{ URL::to('/admin/canboquanly/xoa',['id' => $iteam->CBQL_id]) }}" class="btn btn-info"><i class="bi bi-x-lg"></i></a></td>
                    <td><a href="{{ URL::to('/admin/canboquanly/sua',['id' => $iteam->CBQL_id]) }}" class="btn btn-info"><i class="bi bi-pencil-fill"></i></a></td>
                </tr>
                @endforeach
            </tbody>
            
        </table>
@endsection