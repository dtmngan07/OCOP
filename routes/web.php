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
    Route::get('/nguoidung/capnhathoso','App\Http\Controllers\HoSoController@get_Them_HoSo' );
    Route::post('/nguoidung/capnhathoso','App\Http\Controllers\HoSoController@post_Them_HoSo' );

    Route::get('/nguoidung/hosonguoidaidien','App\Http\Controllers\NguoiDaiDienController@getHoSo_NguoiDaiDien' );
    Route::get('/nguoidung/hosonguoidaidien','App\Http\Controllers\NguoiDaiDienController@getHoSo_NguoiDaiDien' );
    Route::get('/nguoidung/themhosonguoidaidien','App\Http\Controllers\NguoiDaiDienController@getThemHoSo_NguoiDaiDien' );
    Route::post('/nguoidung/themhosonguoidaidien','App\Http\Controllers\NguoiDaiDienController@postThemHoSo_NguoiDaiDien' );


    Route::get('/nguoidung/xemmau2','App\Http\Controllers\HoSoControllerr@getMau2' );

    Route::get('/nguoidung/mau3','App\Http\Controllers\HoSoController@getMau3' );
    Route::get('/nguoidung/mau3','App\Http\Controllers\HoSoController@postMau3' );

    Route::get('/nguoidung/mau4','App\Http\Controllers\HoSoController@getMau4' );
    Route::get('/nguoidung/mau4','App\Http\Controllers\HoSoController@postMau4' );

    Route::get('/nguoidung/uploadfile','App\Http\Controllers\HoSoController@getuploadfile' );
    Route::get('/nguoidung/uploadfile','App\Http\Controllers\HoSoController@postuploadfile' );
});

require_once __DIR__ . '../jetstream.php';