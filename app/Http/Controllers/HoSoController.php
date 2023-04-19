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
        ->leftJoin('nguoi_dai_diens','nguoi_dai_diens.ho_so_id','=','ho_sos.id')
        ->leftJoin('loai_hinh_to_chucs','loai_hinh_to_chucs.id','=','ho_sos.loai_hinh_to_chuc_id')
        ->leftJoin('phieu_dang_kies','phieu_dang_kies.ho_so_id','=','ho_sos.id')
        ->leftJoin('users','users.id','=','ho_sos.user_id')
        ->where('users.id',$user->id)
        ->first();
        $LoaiHinhToChuc= DB::table('loai_hinh_to_chucs')
        ->select('loai_hinh_to_chucs.id as loaihinhtochuc_id','loai_hinh_to_chucs.*')
        ->get();


        if ( $HoSo!=NULL && $HoSo->id != NULL)
        {
            return view('nguoidung.hoso.hoso')->with('HoSo',$HoSo)->with('user',$user);
        }
        else
        {
            return view('nguoidung.hoso.capnhat_hoso')->with('HoSo',$HoSo)->with('LoaiHinhToChuc',$LoaiHinhToChuc)->with('user',$user);
        }

        
    }
        
    //cập nhật hồ sơ doanh nghiệp
    public function get_CapNhat_HoSo(Request $request){
        $user = $request->user();

        $HoSo=DB::table('ho_sos')
        ->leftJoin('nguoi_dai_diens','nguoi_dai_diens.ho_so_id','=','ho_sos.id')
        ->leftJoin('loai_hinh_to_chucs','loai_hinh_to_chucs.id','=','ho_sos.loai_hinh_to_chuc_id')
        ->leftJoin('phieu_dang_kies','phieu_dang_kies.ho_so_id','=','ho_sos.id')
        ->leftJoin('users','users.id','=','ho_sos.user_id')
        ->where('users.id',$user->id)
        ->first();
        $LoaiHinhToChuc= DB::table('loai_hinh_to_chucs')
        ->select('loai_hinh_to_chucs.id as loaihinhtochuc_id','loai_hinh_to_chucs.*')
        ->get();
        return view('nguoidung.hoso.capnhat_hoso')->with('HoSo',$HoSo)->with('LoaiHinhToChuc',$LoaiHinhToChuc)->with('user',$user);

    }

    public function post_CapNhat_HoSo(Request $request){
        $user = $request->user();

        $id = $request->id;
        $HoSo = array();
        $HoSo['SanPham'] = $request->SanPham;
        $HoSo['TenDonVi'] = $request->TenDonVi;
        $HoSo['GiayDKKD'] = $request->GiayDKKD ;
        $HoSo['NgayDKKD'] = $request->	NgayDKKD ;
        $HoSo['SoDKKD'] = $request->SoDKKD ;
        $HoSo['MaSoThue'] = $request->MaSoThue ;
        $HoSo['DienThoai'] = $request->DienThoai ;
        $HoSo['Email'] = $request->Email ;
        $HoSo['Website'] = $request->Website;
        $HoSo['DiaChiXuong'] = $request->DiaChiXuong;
        $HoSo['DiaChiCty'] = $request->DiaChiCty ;
        $HoSo['VonDieuLe'] = $request->VonDieuLe ;
        $HoSo['loai_hinh_to_chuc_id'] = $request->loai_hinh_to_chuc_id;
        $HoSo['user_id']=$user->id;
        if($request->file('BieuTuong')){

            $file= $request->file('BieuTuong');
            $filename= $HoSo['TenDonVi'].'_Biểu tượng_'.date('YmdHis').$file->getClientOriginalName();
            $file->move(public_path('bieutuong'), $filename);
            $HoSo['BieuTuong'] = $filename;
        }  
        if($id == NULL){
            DB::table('ho_sos')->insert($HoSo);
        }else{
        $save = DB::table('ho_sos')->where('user_id',$request->id)->update($HoSo);
        }

        return redirect::to('/nguoidung/hoso');;
    }
    
    //admin lấy xem thông tin
    public function getDS_HoSo(Request $request){
        $request->user()->authorizeRoles(['admin']);
        $user = $request->user();

        $HoSo=DB::table('ho_sos')
        ->leftJoin('nguoi_dai_diens','nguoi_dai_diens.ho_so_id','=','ho_sos.id')
        ->leftJoin('loai_hinh_to_chucs','loai_hinh_to_chucs.id','=','ho_sos.loai_hinh_to_chuc_id')
        ->select('ho_sos.id as HoSo_id','ho_sos.*','nguoi_dai_diens.*','loai_hinh_to_chucs.*')
        ->get();
            
        return view('admin.quanlyhoso.danhsachhosodangky')->with('HoSo',$HoSo);
    }

    public function getXemChiTiet(Request $request,$id){
        $request->user()->authorizeRoles(['admin']);
        $user = $request->user();

        $HoSo=DB::table('ho_sos')
        ->leftJoin('nguoi_dai_diens','nguoi_dai_diens.ho_so_id','=','ho_sos.id')
        ->leftJoin('loai_hinh_to_chucs','loai_hinh_to_chucs.id','=','ho_sos.loai_hinh_to_chuc_id')
        ->leftJoin('phieu_dang_kies','phieu_dang_kies.ho_so_id','=','ho_sos.id')
        ->leftJoin('don_vi_duyets','don_vi_duyets.id','=','ho_sos.don_vi_duyet_id')
        ->where('ho_sos.id',$id)
        ->first();
        
        return view('admin.quanlyhoso.chitiethoso')->with('HoSo',$HoSo);
    }

    public function DuyetHoSo(Request $request,$id){
        $request->user()->authorizeRoles(['admin','kiemduyet']);
        $user = $request->user();

        $HoSo= array();
        $HoSo['TrangThai'] = $request->TrangThai;

        $save = DB::table('ho_sos')->where('ho_sos.id',$id)->update($HoSo);
        
        return back();
    }

    public function get_Xoa_HoSo($id){
        DB::table('ho_sos')->delete($id);

        return redirect::to('/admin/dshoso');
    }

    
    
}
