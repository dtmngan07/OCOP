<?php

namespace App\Http\Controllers;

use App\Models\NguoiDaiDien;
use App\Http\Requests\StoreNguoiDaiDienRequest;
use App\Http\Requests\UpdateNguoiDaiDienRequest;
use Illuminate\Http\Request;
use Session;
use DB;

class NguoiDaiDienController extends Controller
{
    public function __construct()
   {
       $this->middleware('auth');
   }
    public function getDS_HoSo(Request $request){
        $request->user()->authorizeRoles(['admin','kiemduyet']);
/*         $user = $request->user(); */

        $HoSo=DB::table('ho_sos')
        ->leftJoin('nguoi_dai_diens','nguoi_dai_diens.id','=','ho_sos.nguoi_dai_dien_id')
        ->get();
            
        return view('admin.quanlyhoso.danhsachhosodangky')->with('HoSo',$HoSo);
    }

    public function getHoSo_NguoiDaiDien(Request $request){
        $request->user()->authorizeRoles(['user']);
/*         $user = $request->user(); */

        $HoSo_NguoiDaiDien=DB::table('ho_sos')
        ->rightJoin('nguoi_dai_diens','nguoi_dai_diens.id','=','ho_sos.nguoi_dai_dien_id')
        ->first();
            
        return view('nguoidung.nguoidaidien.thongtinnguoidaidien')->with('HoSo_NguoiDaiDien',$HoSo_NguoiDaiDien);
    }

    public function getThemHoSo_NguoiDaiDien(Request $request){
        $request->user()->authorizeRoles(['user']);
/*         $user = $request->user(); */

        return view('nguoidung.nguoidaidien.them_thongtinnguoidaidien');
    }

    public function postThemHoSo_NguoiDaiDien(Request $request){

        $add = [
            'TenNguoiDaiDien'=>$request->TenNguoiDaiDien,
            'DiaChi'=>$request->DiaChi,
            'SoDienThoai'=>$request->SoDienThoai,
        ];
        $this->users->add_NguoiDaiDien($add);    

        return redirect()->route('nguoidung.nguoidaidien.thongtinnguoidaidien')->with();
    }



}
