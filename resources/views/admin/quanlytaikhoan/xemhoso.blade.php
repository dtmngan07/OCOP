@extends( 'admin.AdminHome')
@section ('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Danh sách cán bộ quản lý</h5>
        <a href="{{ URL::to('/admin/canboquanly/them') }}" class="btn btn-info"><i class="bi bi-plus-lg"></i>Thêm cán bộ
            quản lý</a>
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
                            class="btn btn-success btn-sm">Tài khoản admin</a>
                        @elseif ($iteam->role_name === 'user')
                        <a href="#"
                            class="btn btn-warning btn-sm">Tài khoản doanh nghiệp</a>
                        @elseif ($iteam->role_name === 'kiemduyet')
                        <a href="#"
                            class="btn btn-danger btn-sm">Tài khoản kiểm duyệt</a>
                        @endif
                        <!-- 
                        <div class="dropdown">
                            <button class="nav-link btn btn-primary dropdown-toggle" type="button"
                                id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Chọn quyền
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item d-flex align-items-center" data-id=""
                                    href="{{ URL::to('/admin/quanlytaikhoan/sua', $iteam->user_id) }}">Admin</a>
                                <a class="dropdown-item d-flex align-items-center"
                                    href="{{ URL::to('/admin/quanlytaikhoan/sua', $iteam->user_id) }}">User</a>
                                <a class="dropdown-item d-flex align-items-center"
                                    href="{{ URL::to('/admin/quanlytaikhoan/sua', $iteam->user_id) }}">Kiểm duyệt</a>
                            </div>
                        </div> -->
                        <!--                         <form action="{{ URL::to('/admin/quanlytaikhoan/sua', $iteam->user_id) }}" method="POST">
                            @csrf
                            <select class="form-control" name="role_name">
                                <option value="admin" {{ $iteam->role_name === 'admin' ? 'selected' : '' }}>Admin
                                </option>
                                <option value="user" {{ $iteam->role_name === 'user' ? 'selected' : '' }}>User</option>
                                <option value="kiemduyet" {{ $iteam->role_name === 'kiemduyet' ? 'selected' : '' }}>Kiểm
                                    duyệt</option>
                            </select>
                            <button type="submit" class="btn btn-primary btn-sm mt-2">Chuyển</button>
                        </form> -->
                        @endif
                    </td>
                    <td><a href="{{ URL::to('/admin/quanlytaikhoan/sua',['id' => $iteam->userID]) }}"
                            class="btn btn-info"><i class="bi bi-pencil-fill"></i></a></td>
                    <td><a href="{{ URL::to('/admin/quanlytaikhoan/xoa',['id' => $iteam->userID]) }}"
                            class="btn btn-info"><i class="bi bi-x-lg"></i></a></td>
                </tr>
                @endforeach
            </tbody>

        </table>
        @endsection