@extends( 'admin.AdminHome')
@section ('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Danh sách đơn vị duyệt</h5>
        <a href="" class="btn btn-info"><i class="fal fa-plus"></i>Thêm</a>
        <hr>
        <table class="table table-bordered">
            <thead>
            
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Họ tên</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Cấp duyệt</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
            @php
            $i = 0;
            @endphp
            @foreach($DonViDuyet as $iteam)
                <tr>
                @csrf
                    <td>{{$iteam->id}}</td>
                    <td>{{ $iteam -> tendonvi }}</td>
                    <td>{{ $iteam -> diachi }}</td>
                    <td>{{ $iteam -> sodienthoai }}</td>
                    <td>{{ $iteam -> ten }}</td>
                    <td><a>Xóa</a></td>
                    <td><a>Sửa</a></td>
                </tr>
                @endforeach
            </tbody>
            
        </table>
@endsection