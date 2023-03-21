<?php

namespace App\Http\Controllers;

use App\Models\HoSo;
use App\Http\Requests\StoreHoSoRequest;
use App\Http\Requests\UpdateHoSoRequest;
use Illuminate\Http\Request;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;

class HoSoController extends Controller
{
    public function __construct()
   {
       $this->middleware('auth');
   }
    public function getHoSo(Request $request){
        $request->user()->authorizeRoles(['user']);
        $user = $request->user();

        $HoSo=DB::table('ho_sos')
        ->leftJoin('nguoi_dai_diens','nguoi_dai_diens.id','=','ho_sos.nguoi_dai_dien_id')
        ->leftJoin('loai_hinh_to_chucs','loai_hinh_to_chucs.id','=','ho_sos.loai_hinh_to_chuc_id')
        ->leftJoin('phieu_dang_kies','phieu_dang_kies.id','=','ho_sos.phieu_dang_ki_id')
        ->first();
            
        return view('nguoidung.hoso.hoso')->with('HoSo',$HoSo);
    }

    public function getDS_HoSo(Request $request){
        $request->user()->authorizeRoles(['admin']);
        $user = $request->user();

        $HoSo=DB::table('ho_sos')
        ->leftJoin('nguoi_dai_diens','nguoi_dai_diens.id','=','ho_sos.nguoi_dai_dien_id')
        ->leftJoin('loai_hinh_to_chucs','loai_hinh_to_chucs.id','=','ho_sos.loai_hinh_to_chuc_id')
        ->select('ho_sos.id as HoSo_id','ho_sos.*','nguoi_dai_diens.*','loai_hinh_to_chucs.*')
        ->get();
            
        return view('admin.quanlyhoso.danhsachhosodangky')->with('HoSo',$HoSo);
    }

    public function getXemChiTiet(Request $request,$id){
        $request->user()->authorizeRoles(['admin']);
        $user = $request->user();

        $HoSo=DB::table('ho_sos')
        ->leftJoin('nguoi_dai_diens','nguoi_dai_diens.id','=','ho_sos.nguoi_dai_dien_id')
        ->leftJoin('loai_hinh_to_chucs','loai_hinh_to_chucs.id','=','ho_sos.loai_hinh_to_chuc_id')
        ->leftJoin('phieu_dang_kies','phieu_dang_kies.id','=','ho_sos.phieu_dang_ki_id')
        ->where('ho_sos.id',$id)
        ->first();
            
        return view('admin.quanlyhoso.chitiethoso')->with('HoSo',$HoSo);
    }


    public function get_Them_HoSo(Request $request){
        $request->user()->authorizeRoles(['user']);
        $user = $request->user();

        return view('nguoidung.capnhathoso');
    }
    
    public function post_Them_HoSo(Request $request){


        return redirect()->route('nguoidung.capnhathoso');
    }

    public function get_Xoa_HoSo($id){
        DB::table('ho_sos')->delete($id);

        return redirect::to('/admin/dshoso');
    }
}
