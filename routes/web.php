<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Home.trangchu');
});
Route::get('/home', function () {
    return view('Home.trangchu');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard','App\Http\Controllers\AdminController@getdashboard');

    Route::get('/logout','Laravel\Fortify\Http\Controllers\AuthenticatedSessionController@destroy' );
    Route::get('/password.update','Laravel\Fortify\Http\Controllers\PasswordController@update' );

    Route::get('/admin','App\Http\Controllers\AdminController@getdashboardAdmin' );

    Route::get('/admin/quanlytaikhoan','App\Http\Controllers\AdminController@get_DS_TaiKhoan' );
    Route::get('/admin/quanlytaikhoan/sua/{id}','App\Http\Controllers\AdminController@get_Sua_TaiKhoan' );
    Route::post('/admin/quanlytaikhoan/sua/{id}','App\Http\Controllers\AdminController@post_Sua_TaiKhoan' );


    Route::get('/admin/thongtintaikhoancanhan','App\Http\Controllers\CanBoQuanLyController@get_ThongTinCaNhan' );
    Route::get('/admin/thongtintaikhoancanhan/sua','App\Http\Controllers\CanBoQuanLyController@get_Sua_ThongTinCaNhan' );
    Route::post('/admin/thongtintaikhoancanhan/sua','App\Http\Controllers\CanBoQuanLyController@post_Sua_ThongTinCaNhan' );

    Route::get('/admin/dshoso','App\Http\Controllers\HoSoController@getDS_HoSo' );
    Route::get('/admin/xemchitiet/{id}','App\Http\Controllers\HoSoController@getXemChiTiet' );
    Route::get('/admin/xoa/{id}','App\Http\Controllers\HoSoController@get_Xoa_HoSo' );

    Route::get('/admin/dscanboquanly','App\Http\Controllers\CanBoQuanLyController@getDS_CanBoQuanLy' );
    Route::get('/admin/canboquanly/them','App\Http\Controllers\CanBoQuanLyController@get_Them_CanBoQuanLy' );
    Route::post('/savethem','App\Http\Controllers\CanBoQuanLyController@post_Them_CanBoQuanLy' );
    Route::get('/admin/canboquanly/sua/{id}','App\Http\Controllers\CanBoQuanLyController@get_Sua_CanBoQuanLy' );
    Route::post('/admin/canboquanly/sua/{id}','App\Http\Controllers\CanBoQuanLyController@post_Sua_CanBoQuanLy' );
    Route::get('/admin/canboquanly/xoa/{id}','App\Http\Controllers\CanBoQuanLyController@get_Xoa_CanBoQuanLy' );

    Route::get('/admin/dsdonviduyet','App\Http\Controllers\DonViDuyetController@getDS_DonViDuyet' );
    Route::get('/admin/donviduyet/them','App\Http\Controllers\DonViDuyetController@get_Them_DonViDuyet' );
    Route::post('/admin/donviduyet/them','App\Http\Controllers\DonViDuyetController@post_Them_DonViDuyet' );
    Route::get('/admin/donviduyet/sua/{id}','App\Http\Controllers\DonViDuyetController@get_Sua_DonViDuyet' );
    Route::post('/admin/donviduyet/sua/{id}','App\Http\Controllers\DonViDuyetController@post_Sua_DonViDuyet' );
    Route::get('/admin/donviduyet/xoa/{id}','App\Http\Controllers\DonViDuyetController@get_Xoa_DonViDuyet' );

    Route::get('/admin/dsphieudangky','App\Http\Controllers\PhieuDangKyController@getDS_PhieuDangKy');
    Route::get('/admin/phieudangky/them','App\Http\Controllers\PhieuDangKyController@get_Them_PhieuDangKy' );
    Route::post('/admin/phieudangky/them','App\Http\Controllers\PhieuDangKyController@post_Them_PhieuDangKy' );
    Route::get('/admin/phieudangky/sua/{id}','App\Http\Controllers\PhieuDangKyController@get_Sua_PhieuDangKy' );
    Route::post('/admin/phieudangky/sua/{id}','App\Http\Controllers\PhieuDangKyController@post_Sua_PhieuDangKy' );
    Route::get('/admin/phieudangky/xoa/{id}','App\Http\Controllers\PhieuDangKyController@get_Xoa_PhieuDangKy' );

    /* PHẦN QUẢN LÝ TRANG NGƯỜI DÙNG */
    Route::get('/nguoidung','App\Http\Controllers\AdminController@getdashboardUser' );
    Route::get('/nguoidung/hoso','App\Http\Controllers\HoSoController@getHoSo' ); //xem hồ sơ doanh nghiệp
    Route::get('/nguoidung/hoso/sua','App\Http\Controllers\HoSoController@get_CapNhat_HoSo' );
    Route::post('/nguoidung/hoso/sua','App\Http\Controllers\HoSoController@post_CapNhat_HoSo' );

    Route::get('/nguoidung/hosonguoidaidien','App\Http\Controllers\NguoiDaiDienController@getHoSo_NguoiDaiDien' );
    Route::get('/nguoidung/hosonguoidaidien','App\Http\Controllers\NguoiDaiDienController@getHoSo_NguoiDaiDien' );
    Route::get('/nguoidung/capnhathosonguoidaidien','App\Http\Controllers\NguoiDaiDienController@getThemHoSo_NguoiDaiDien' );
    Route::post('/nguoidung/capnhathosonguoidaidien','App\Http\Controllers\NguoiDaiDienController@postThemHoSo_NguoiDaiDien' );

    //CẬP NHẬT THÔNG TIN CHO MẪU 2
    Route::get('nguoidung/mau2','App\Http\Controllers\Mau2Controller@getMau2' );

    Route::get('/nguoidung/capnhatmau2phanA','App\Http\Controllers\Mau2Controller@get_capnhat_Mau2_PhanA');

    Route::get('/nguoidung/capnhatmau2phanB','App\Http\Controllers\Mau2Controller@get_capnhat_Mau2_PhanB');
    Route::post('/nguoidung/capnhatmau2phanB','App\Http\Controllers\Mau2Controller@post_capnhat_Mau2_PhanB');

    Route::get('/nguoidung/capnhatmau2phanC','App\Http\Controllers\Mau2Controller@get_capnhat_Mau2_PhanC');
    Route::post('/nguoidung/capnhatmau2phanC','App\Http\Controllers\Mau2Controller@post_capnhat_Mau2_PhanC');

    Route::get('/nguoidung/capnhatmau2phanD','App\Http\Controllers\Mau2Controller@get_capnhat_Mau2_PhanD');
    Route::post('/nguoidung/capnhatmau2phanD','App\Http\Controllers\Mau2Controller@post_capnhat_Mau2_PhanD');

    Route::get('/nguoidung/capnhatmau2phanE','App\Http\Controllers\Mau2Controller@get_capnhat_Mau2_PhanE');
    Route::post('/nguoidung/capnhatmau2phanE','App\Http\Controllers\Mau2Controller@post_capnhat_Mau2_PhanE');

    Route::get('/nguoidung/capnhatmau2phanG','App\Http\Controllers\Mau2Controller@get_capnhat_Mau2_PhanG');
    Route::post('/nguoidung/capnhatmau2phanG','App\Http\Controllers\Mau2Controller@post_capnhat_Mau2_PhanG');

    Route::get('/nguoidung/capnhatmau2phanH','App\Http\Controllers\Mau2Controller@get_capnhat_Mau2_PhanH');
    Route::post('/nguoidung/capnhatmau2phanH','App\Http\Controllers\Mau2Controller@post_capnhat_Mau2_PhanH');

    //CẬP NHẬT THÔNG TIN CHO MẪU 3
    Route::get('/nguoidung/mau3','App\Http\Controllers\Mau3Controller@getMau3' );

    Route::get('/nguoidung/capnhatmau3phanI','App\Http\Controllers\Mau3Controller@get_capnhat_Mau3_PhanI' );
    Route::post('/nguoidung/capnhatmau3phanI','App\Http\Controllers\Mau3Controller@post_capnhat_Mau3_PhanI' );

    Route::get('/nguoidung/capnhatmau3phanII','App\Http\Controllers\Mau3Controller@get_capnhat_Mau3_PhanII' );
    Route::post('/nguoidung/capnhatmau3phanII','App\Http\Controllers\Mau3Controller@post_capnhat_Mau3_PhanII' );

    Route::get('/nguoidung/capnhatmau3phanIII','App\Http\Controllers\Mau3Controller@get_capnhat_Mau3_PhanIII' );
    Route::post('/nguoidung/capnhatmau3phanIII','App\Http\Controllers\Mau3Controller@post_capnhat_Mau3_PhanIII' );

    Route::get('/nguoidung/capnhatmau3phanIV','App\Http\Controllers\Mau3Controller@get_capnhat_Mau3_PhanIV' );
    Route::post('/nguoidung/capnhatmau3phanIV','App\Http\Controllers\Mau3Controller@post_capnhat_Mau3_PhanIV' );

    //CẬP NHẬT THÔNG TIN CHO MẪU 4
    Route::get('/nguoidung/capnhatmau4','App\Http\Controllers\Mau4Controller@get_capnhat_Mau4');
    Route::post('/nguoidung/capnhatmau4','App\Http\Controllers\Mau4Controller@post_capnhat_Mau4');

    Route::get('/nguoidung/uploadfile','App\Http\Controllers\HoSoController@getuploadfile' );
    Route::post('/nguoidung/uploadfile','App\Http\Controllers\HoSoController@postuploadfile' );
});

require_once __DIR__ . '../jetstream.php';