@extends( 'admin.AdminHome')
@section ('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Danh sách tài khoản người dùng</h5>
        <hr>
        <table class="table table-bordered">
            <thead>

                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Email đăng nhập</th>
                    <th scope="col">Tên tài khoản</th>
                    <th scope="col">Quyền</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>

                </tr>
            </thead>
            <tbody>
                @php
                $i = 0;
                @endphp
                @foreach($TaiKhoan as $iteam)
                <tr>
                    @csrf
                    <td>{{++$i}}</td>
                    <td>{{ $iteam -> email}}</td>
                    <td>{{ $iteam -> name }}</td>
                    <td>
                        @if (in_array($iteam->role_name, ['admin', 'user', 'kiemduyet']))

                            @if ($iteam->role_name === 'admin')
                            <a href="#"
                                class="btn btn-success">Tài khoản admin</a>
                            @elseif ($iteam->role_name === 'user')
                            <a href="#"
                                class="btn btn-warning">Tài khoản doanh nghiệp</a>
                            @elseif ($iteam->role_name === 'kiemduyet')
                            <a href="#"
                                class="btn btn-danger">Tài khoản kiểm duyệt</a>
                            @endif
                        @endif
                    </td>
                    <td><a href="{{ URL::to('/admin/quanlytaikhoan/sua',['id' => $iteam->userID]) }}"
                            class="btn btn-primary"><i class="bi bi-pencil-fill"></i></a></td>
                    <td><a href="{{ URL::to('/admin/quanlytaikhoan/xoa',['id' => $iteam->userID]) }}"
                            class="btn btn-secondary"><i class="bi bi-x-lg"></i></a></td>
                </tr>
                @endforeach
            </tbody>

        </table>
        @endsection