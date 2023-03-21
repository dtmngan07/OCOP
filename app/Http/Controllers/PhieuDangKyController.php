<?php

namespace App\Http\Controllers;

use App\Models\PhieuDangKy;
use App\Http\Requests\StorePhieuDangKyRequest;
use App\Http\Requests\UpdatePhieuDangKyRequest;
use Illuminate\Http\Request;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;

class PhieuDangKyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
     public function getDS_PhieuDangKy(Request $request){
         $request->user()->authorizeRoles(['Admin']);
         $user = $request->user();
 

        $PhieuDangKy = DB::table('phieu_dang_kies')
        ->leftJoin('ho_sos','ho_sos.id','=','phieu_dang_kies.ho_so_id')
        ->select('ho_sos.id as HoSo_id','phieu_dang_kies.*','ho_sos.*','phieu_dang_kies.id as Phieu_id')
        ->get();
             
         return view('admin.phieudangky.ds_phieudangky')->with('PhieuDangKy',$PhieuDangKy);
     }

     public function get_Them_PhieuDangKy(Request $request){

        $PhieuDangKy = DB::table('phieu_dang_kies')
        ->leftJoin('ho_sos','ho_sos.id','=','phieu_dang_kies.ho_so_id')
        ->select('ho_sos.id as HoSo_id','phieu_dang_kies.*','ho_sos.*','phieu_dang_kies.id as Phieu_id')
        ->get();
        return view('admin.phieudangky.them')->with('PhieuDangKy',$PhieuDangKy);
    }

    public function post_Them_PhieuDangKy(Request $request){
        
        $PhieuDangKy = new PhieuDangKy();
        $PhieuDangKy['ho_so_id']=$request->ho_so_id;
        $PhieuDangKy['sophieu']=$request->sophieu;
        $PhieuDangKy['ngaydangky']=$request->ngaydangky;
        $PhieuDangKy->save();
            
        return redirect::to('/admin/dsphieudangky')->with('PhieuDangKy',$PhieuDangKy);
    }

    public function get_Sua_PhieuDangKy(Request $request,$id){
        $PhieuDangKy = DB::table('phieu_dang_kies')
        ->leftJoin('ho_sos','ho_sos.id','=','phieu_dang_kies.ho_so_id')
        ->select('ho_sos.id as HoSo_id','phieu_dang_kies.*','ho_sos.*','phieu_dang_kies.id as Phieu_id')
        ->where('phieu_dang_kies.id',$id)
        ->first();
        return view('admin.phieudangky.sua')->with('PhieuDangKy',$PhieuDangKy);
    }

    public function post_Sua_PhieuDangKy(Request $request){

        $PhieuDangKy = new PhieuDangKy();
        $PhieuDangKy['ho_so_id']=$request->ho_so_id;
        $PhieuDangKy['sophieu']=$request->sophieu;
        $PhieuDangKy['ngaydangky']=$request->ngaydangky;
        $PhieuDangKy->save();
            
        return redirect::to('/admin/dsphieudangky')->with('PhieuDangKy',$PhieuDangKy);
    }

    public function get_Xoa_PhieuDangKy($id){
        DB::table('phieu_dang_kies')->delete($id);

        return redirect::to('/admin/dsphieudangky');
    }
}
