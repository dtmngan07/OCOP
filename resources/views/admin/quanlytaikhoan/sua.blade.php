@extends( 'admin.AdminHome')
@section ('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Sửa tài khoản</h5>

        <!-- Vertical Form -->
        <form action="{{ URL::to('admin/quanlytaikhoan/sua',['id' => $TaiKhoan->userID]) }}"
            enctype="multipart/form-data" class="row g-3" method="POST">
            {{ csrf_field() }}
            <div class="col-12">
                <label for="" class="form-label">Email đăng nhập</label>
                <input type="text" class="form-control" value="{{$TaiKhoan->email}}" id="email" name="email" readonly>
            </div>

            <div class="col-12">
                <label for="" class="form-label">Tên tài khoản</label>
                <input type="text" class="form-control" value="{{$TaiKhoan->name}}" id="name" name="name" readonly>
            </div>

            <div class="col-12">
                <label for="" class="form-label">Quyền</label>
                <select class="" id="roleID" name="roleID" required>
                    <option value="">-- Chọn --</option>
                    @foreach($Role as $value)
                        @if ($value->id == $TaiKhoan->roleID)
                        <option value="{{ $value->id }}" selected>{{ $value->role_name }}</option>
                        @else
                        <option value="{{ $value->id }}">{{ $value->role_name }}</option>
                        @endif

                    @endforeach
                </select>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Sửa</button>
            </div>
        </form><!-- Vertical Form -->

    </div>
</div>

@endsection