<?php

namespace App\Http\Controllers;

use App\Models\NguoiDaiDien;
use App\Http\Requests\StoreNguoiDaiDienRequest;
use App\Http\Requests\UpdateNguoiDaiDienRequest;
use Illuminate\Http\Request;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;

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

    public function get_NguoiDaiDien(Request $request){
        $request->user()->authorizeRoles(['user']);
        $user = $request->user();

        $NguoiDaiDien=DB::table('users')
        ->leftJoin('ho_sos','ho_sos.user_id','=','users.id')
        ->leftJoin('nguoi_dai_diens','nguoi_dai_diens.ho_so_id','=','ho_sos.id')
        ->select('ho_sos.*','ho_sos.id as HoSo_id','nguoi_dai_diens.*','nguoi_dai_diens.id as NguoiDaiDien_id')
        ->where('users.id',$user->id)
        ->first();


        if ( $NguoiDaiDien!=NULL && $NguoiDaiDien->id != NULL)
        {
            return view('nguoidung.nguoidaidien.thongtinnguoidaidien')->with('NguoiDaiDien',$NguoiDaiDien)->with('user',$user);
        }
        else
        {
            return view('nguoidung.nguoidaidien.capnhat_thongtinnguoidaidien')->with('NguoiDaiDien',$NguoiDaiDien)->with('user',$user);
        }
    }

    public function getHoSo_NguoiDaiDien(Request $request){
        $request->user()->authorizeRoles(['user']);
        $user = $request->user();

        $NguoiDaiDien=DB::table('users')
        ->leftJoin('ho_sos','ho_sos.user_id','=','users.id')
        ->leftJoin('nguoi_dai_diens','nguoi_dai_diens.ho_so_id','=','ho_sos.id')
        ->select('ho_sos.*','ho_sos.id as HoSo_id','nguoi_dai_diens.*','nguoi_dai_diens.id as NguoiDaiDien_id')
        ->where('users.id',$user->id)
        ->first();

        return view('nguoidung.nguoidaidien.capnhat_thongtinnguoidaidien')->with('NguoiDaiDien',$NguoiDaiDien)->with('user',$user);
    }

    public function postHoSo_NguoiDaiDien(Request $request){

        $request->user()->authorizeRoles(['user']);
        $user = $request->user();
            
        $id = $request->id;
        $NguoiDaiDien = array();
        $NguoiDaiDien['TenNguoiDaiDien']=$request->TenNguoiDaiDien;
        $NguoiDaiDien['SoDienThoai'] = $request->SoDienThoai ;
        $NguoiDaiDien['DiaChiNguoiDaiDien'] = $request-> DiaChiNguoiDaiDien;
        $NguoiDaiDien['ho_so_id'] = $request->idHoSo;

        if($id == NULL){
            DB::table('nguoi_dai_diens')->insert($NguoiDaiDien);
        }else{
        $save = DB::table('nguoi_dai_diens')->where('id',$request->id)->update($NguoiDaiDien);
        }
        return redirect::to('/nguoidung/nguoidaidien');
    }



}
