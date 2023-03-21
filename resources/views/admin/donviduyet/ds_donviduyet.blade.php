@extends( 'admin.AdminHome')
@section ('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Danh sách đơn vị duyệt</h5>
        <a href="{{ URL::to('/admin/donviduyet/them') }}" class="btn btn-info"><i class="fal fa-plus"></i>Thêm</a>
        <hr>
        <table class="table table-bordered">
            <thead>
            
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">id đơn vị duyệt</th>
                    <th scope="col">Đơn vị</th>
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
                    <td>{{++$i}}</td>
                    <td>{{$iteam->DonViDuyet_id}}</td>
                    <td>{{ $iteam -> tendonvi }}</td>
                    <td>{{ $iteam -> diachi }}</td>
                    <td>{{ $iteam -> sodienthoai }}</td>
                    <td>{{ $iteam -> tencapduyet}}</td>
                    <td><a href="{{ URL::to('/admin/donviduyet/sua',['id' => $iteam->DonViDuyet_id]) }}" class="btn btn-info"><i class="bi bi-pencil-fill"></i></a></td>
                    <td><a href="{{ URL::to('/admin/donviduyet/xoa',['id' => $iteam->DonViDuyet_id]) }}" class="btn btn-info"><i class="bi bi-x-lg"></i></a></td>
                </tr>
                @endforeach
            </tbody>
            
        </table>
@endsection