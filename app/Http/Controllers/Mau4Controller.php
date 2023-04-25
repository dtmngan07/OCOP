<?php

namespace App\Http\Controllers;

use App\Models\HoSo;
use App\Http\Requests\StoreHoSoRequest;
use App\Http\Requests\UpdateHoSoRequest;
use Illuminate\Http\Request;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;

class Mau4Controller extends Controller
{
    public function __construct()
   {
       $this->middleware('auth');
   }
   //CẬP NHẬT THÔNG TIN THEO MẪU 4 
    public function get_capnhat_Mau4(Request $request){
    $user = $request->user();

    $Mau4=DB::table('ho_sos')
    ->leftJoin('nguoi_dai_diens','nguoi_dai_diens.ho_so_id','=','ho_sos.id')
    ->leftJoin('loai_hinh_to_chucs','loai_hinh_to_chucs.id','=','ho_sos.loai_hinh_to_chuc_id')
    ->leftJoin('phieu_dang_kies','phieu_dang_kies.id','=','ho_sos.phieu_dang_ki_id')
    ->leftJoin('users','users.id','=','ho_sos.user_id')
    ->where('users.id',$user->id)
    ->first();

    
    return view('nguoidung.mau4.mau4')
    ->with('Mau4',$Mau4)
    ->with('user',$user);
    }
    public function post_capnhat_Mau4(Request $request){
        $user = $request->user();

        $id = $request->id;
        $Mau4 = array();
        $Mau4['TenDonVi'] = $request->TenDonVi;
        $Mau4['DiaChi_NguoiDaiDien'] = $request-> DiaChi_NguoiDaiDien;
        $Mau4['DiaChiXuong'] = $request-> DiaChiXuong;
        $Mau4['DienThoai'] = $request-> DienThoai;
        $Mau4['Email'] = $request->Email ;
        $Mau4['Website'] = $request->Website ;

        $Mau4['CongDong'] = $request-> CongDong;
        $Mau4['HoatDongKeToan'] = $request->HoatDongKeToan ;
        $Mau4['TinhHinhTiepThi'] = $request-> TinhHinhTiepThi;
        $Mau4['PhuongAnBaoVeMoiTruong'] = $request->PhuongAnBaoVeMoiTruong ;

        if($request->file('CoCauToChuc'))
        {
            /* if($request->id != null){
                $data = DB::table('ho_sos')
                ->where('user_id',$user->id)
                ->first();

                $file_name ='file_doanhnghiep/'. $data->CoCauToChuc;

                unlink(public_path($file_name));
            } */
            
            $file= $request->file('CoCauToChuc');
            $filename= $Mau4['TenDonVi'].'_Cơ cấu tổ chức_'.date('YmdHis').$file->getClientOriginalName();
            $file->move(public_path('file_doanhnghiep'), $filename);
            $Mau4['CoCauToChuc'] = $filename;
        }


        $Mau4['user_id']=$user->id;

        if($id == NULL){
            DB::table('ho_sos')->insert($Mau4);
        }else{
        $save = DB::table('ho_sos')->where('user_id',$request->id)->update($Mau4);
        }
        return redirect::to('/nguoidung/capnhatmau4');
    }

    

}