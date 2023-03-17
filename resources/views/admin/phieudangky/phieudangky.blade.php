@extends( 'admin.AdminHome')
@section ('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Danh sách phiểu đăng ký đã cấp</h5>
        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Số phiếu đăng ký</th>
                    <th scope="col">Ngày đăng ký</th>
                    <th scope="col">Cấp cho đơn vị</th>
                    <th scope="col">Sửa</th>
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
                    <td>{{ $iteam->sophieu }}</td>
                    <td>{{ $iteam->ngaydangky}}</td>
                    <td>{{ $iteam->TenDonVi}}</td>
                    <td><a>Xóa</a></td>
                    <td><a>Sửa</a></td>
                </tr>
                @endforeach
            </tbody>
            
        </table>
@endsection