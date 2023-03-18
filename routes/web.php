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

    Route::get('/admin/dscanboquanly','App\Http\Controllers\CanBoQuanLyController@getDS_CanBoQuanLy' );
    Route::get('/admin/canboquanly/them','App\Http\Controllers\CanBoQuanLyController@get_Them_CanBoQuanLy' );
    Route::post('/admin/canboquanly/them','App\Http\Controllers\CanBoQuanLyController@post_Them_CanBoQuanLy' );
    Route::get('/admin/canboquanly/sua/{id}','App\Http\Controllers\CanBoQuanLyController@get_Sua_CanBoQuanLy' );
    Route::post('/admin/canboquanly/sua/{id}','App\Http\Controllers\CanBoQuanLyController@post_Sua_CanBoQuanLy' );

    Route::get('/admin/dsdonviduyet','App\Http\Controllers\DonViDuyetController@getDS_DonViDuyet' );

    /* PHẦN QUẢN LÝ TRANG NGƯỜI DÙNG */
    Route::get('/nguoidung','App\Http\Controllers\AdminController@getdashboardUser' );
    Route::get('/nguoidung/hoso','App\Http\Controllers\HoSoController@getHoSo' ); //xem hồ sơ doanh nghiệp
    Route::get('/nguoidung/capnhathoso','App\Http\Controllers\HoSoController@get_Them_HoSo' );
    Route::post('/nguoidung/capnhathoso','App\Http\Controllers\HoSoController@post_Them_HoSo' );

    Route::get('/nguoidung/hosonguoidaidien','App\Http\Controllers\NguoiDaiDienController@getHoSo_NguoiDaiDien' );
    Route::get('/nguoidung/hosonguoidaidien','App\Http\Controllers\NguoiDaiDienController@getHoSo_NguoiDaiDien' );
    Route::get('/nguoidung/themhosonguoidaidien','App\Http\Controllers\NguoiDaiDienController@getThemHoSo_NguoiDaiDien' );
    Route::post('/nguoidung/themhosonguoidaidien','App\Http\Controllers\NguoiDaiDienController@postThemHoSo_NguoiDaiDien' );

/* 
    Route::get('/nguoidung/hosonguoidaidien','App\Http\Controllers\NguoiDaiDienController@getProfileNguoiDaiDien' );
    Route::get('/nguoidung/hosonguoidaidien/them','App\Http\Controllers\NguoiDaiDienController@getProfileNguoiDaiDien' );
    Route::post('/nguoidung/hosonguoidaidien/them','App\Http\Controllers\NguoiDaiDienController@getProfileNguoiDaiDien' );

    Route::get('/nguoidung/capnhathoso','App\Http\Controllers\DoanhNghiepController@updateProfile' );
    Route::post('/nguoidung/capnhathoso','App\Http\Controllers\DoanhNghiepController@postupdateProfile' );
 */


    Route::get('/nguoidung/mau2','App\Http\Controllers\DoanhNghiepController@getMau2' );
    Route::get('/nguoidung/mau2','App\Http\Controllers\DoanhNghiepController@postMau2' );

    Route::get('/nguoidung/mau3','App\Http\Controllers\DoanhNghiepController@getMau3' );
    Route::get('/nguoidung/mau3','App\Http\Controllers\DoanhNghiepController@postMau3' );

    Route::get('/nguoidung/mau4','App\Http\Controllers\DoanhNghiepController@getMau4' );
    Route::get('/nguoidung/mau4','App\Http\Controllers\DoanhNghiepController@postMau4' );

    Route::get('/nguoidung/uploadfile','App\Http\Controllers\DoanhNghiepController@getuploadfile' );
    Route::get('/nguoidung/uploadfile','App\Http\Controllers\DoanhNghiepController@postuploadfile' );
});

require_once __DIR__ . '../jetstream.php';