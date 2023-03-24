<?php

namespace App\Http\Controllers;

use App\Models\HoSo;
use App\Http\Requests\StoreHoSoRequest;
use App\Http\Requests\UpdateHoSoRequest;
use Illuminate\Http\Request;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;

class Mau2Controller extends Controller
{
    public function __construct()
   {
       $this->middleware('auth');
   }
   //CẬP NHẬT THÔNG TIN THEO MẪU 2
   public function getMau2(Request $request){
    $user = $request->user();


    return view('nguoidung.mau2.index_mau2')

    ->with('user',$user);
    }   
    public function get_capnhat_Mau2_PhanB(Request $request){
    $user = $request->user();

    $PhanB=DB::table('ho_sos')
    ->leftJoin('nguoi_dai_diens','nguoi_dai_diens.id','=','ho_sos.nguoi_dai_dien_id')
    ->leftJoin('loai_hinh_to_chucs','loai_hinh_to_chucs.id','=','ho_sos.loai_hinh_to_chuc_id')
    ->leftJoin('phieu_dang_kies','phieu_dang_kies.id','=','ho_sos.phieu_dang_ki_id')
    ->leftJoin('users','users.id','=','ho_sos.user_id')
    ->where('users.id',$user->id)
    ->first();

    
    return view('nguoidung.mau2.phanB')
    ->with('PhanB',$PhanB)
    ->with('user',$user);
    }
    public function post_capnhat_Mau2_PhanB(Request $request){
        $user = $request->user();

        $id = $request->id;
        $PhanB = array();
        $PhanB['MoTaQuyCachSanPham']= $request->MoTaQuyCachSanPham;
        $PhanB['TinhTrangCongBo'] = implode(' - ',$request->TinhTrangCongBo);
        $PhanB['LoaiHinhDangKySoHuuTriTue'] = implode(' - ',$request->LoaiHinhDangKySoHuuTriTue);
        $PhanB['LyDoThanhLap'] = $request->LyDoThanhLap;
        $PhanB['LichSuHinhThanh'] = $request->LichSuHinhThanh;
        $PhanB['GiaTriSanPham'] = $request->GiaTriSanPham;
        $PhanB['user_id']=$user->id;

        if($id == NULL){
            DB::table('ho_sos')->insert($PhanB);
        }else{
        $save = DB::table('ho_sos')->where('user_id',$request->id)->update($PhanB);
        }
        return redirect::to('/nguoidung/capnhatmau2phanB');
    }

    public function get_capnhat_Mau2_PhanC(Request $request){
        $user = $request->user();
    
        $PhanC=DB::table('ho_sos')
        ->leftJoin('nguoi_dai_diens','nguoi_dai_diens.id','=','ho_sos.nguoi_dai_dien_id')
        ->leftJoin('loai_hinh_to_chucs','loai_hinh_to_chucs.id','=','ho_sos.loai_hinh_to_chuc_id')
        ->leftJoin('phieu_dang_kies','phieu_dang_kies.id','=','ho_sos.phieu_dang_ki_id')
        ->leftJoin('users','users.id','=','ho_sos.user_id')
        ->where('users.id',$user->id)
        ->first();
        
        return view('nguoidung.mau2.phanC')
        ->with('PhanC',$PhanC)
        ->with('user',$user);
        }
        public function post_capnhat_Mau2_PhanC(Request $request){
            $user = $request->user();

            $HoSo = new HoSo();
            $id = $request->id;
            $PhanC = array();
            $PhanC['TenDonVi'] = $request->TenDonVi;
            $PhanC['DatvaVanPhong'] =implode(' - ',$request->DatvaVanPhong);
            $PhanC['DatSanXuat'] = implode(' - ',$request->DatSanXuat);
            $PhanC['NguonDien'] = implode(' - ',$request->NguonDien);
            $PhanC['NguonNuoc'] = implode(' - ',$request->NguonNuoc);
            $PhanC['PhuongTienVanTai'] = implode(' - ',$request->PhuongTienVanTai);
            $PhanC['PhuongTienTruyenThong'] = implode(' - ',$request->PhuongTienTruyenThong);

            if($request->file('KetQuaBanHang'))
            {
                $file= $request->file('KetQuaBanHang');
                $filename= $PhanC['TenDonVi'].'.'.$file->getClientOriginalName();
                $file->move(public_path('file_doanhnghiep'), $filename);
                $PhanC['KetQuaBanHang'] = $filename;
            }

            if($request->file('ChiPhi'))
            {
                $file= $request->file('ChiPhi');
                $filename= $PhanC['TenDonVi'].'.'.$file->getClientOriginalName();
                $file->move(public_path('file_doanhnghiep'), $filename);
                $PhanC['ChiPhi'] = $filename;
            }

            if($request->file('DoanhThu'))
            {
                $file= $request->file('DoanhThu');
                $filename= $PhanC['TenDonVi'].'.'.$file->getClientOriginalName();
                $file->move(public_path('file_doanhnghiep'), $filename);
                $PhanC['DoanhThu'] = $filename;
            }

            if($request->file('NhanLuc'))
            {
                $file= $request->file('NhanLuc');
                $filename= $PhanC['TenDonVi'].'.'.$file->getClientOriginalName();
                $file->move(public_path('file_doanhnghiep'), $filename);
                $PhanC['NhanLuc'] = $filename;
            }

            if($request->file('NguonCungCapNguyenLieu'))
            {
                $file= $request->file('KetQuaBanHang');
                $filename= $PhanC['TenDonVi'].'.'.$file->getClientOriginalName();
                $file->move(public_path('file_doanhnghiep'), $filename);
                $PhanC['NguonCungCapNguyenLieu'] = $filename;
            }

            $PhanC['user_id']=$user->id;
    
            if($id == NULL){
                DB::table('ho_sos')->insert($PhanC);
            }else{
            $save = DB::table('ho_sos')->where('user_id',$request->id)->update($PhanC);
            }
            return redirect::to('nguoidung/capnhatmau2phanC');
        }

        public function get_capnhat_Mau2_PhanD(Request $request){
            $user = $request->user();
        
            $PhanD=DB::table('ho_sos')
            ->leftJoin('nguoi_dai_diens','nguoi_dai_diens.id','=','ho_sos.nguoi_dai_dien_id')
            ->leftJoin('loai_hinh_to_chucs','loai_hinh_to_chucs.id','=','ho_sos.loai_hinh_to_chuc_id')
            ->leftJoin('phieu_dang_kies','phieu_dang_kies.id','=','ho_sos.phieu_dang_ki_id')
            ->leftJoin('users','users.id','=','ho_sos.user_id')
            ->where('users.id',$user->id)
            ->first();
            
            return view('nguoidung.mau2.phanD')
            ->with('PhanD',$PhanD)
            ->with('user',$user);
            }
            public function post_capnhat_Mau2_PhanD(Request $request){
                $user = $request->user();
    
                $id = $request->id;
                $PhanD = array();
                $PhanD['TenDonVi'] = $request->TenDonVi;
                $PhanD['MucDoHoatDongSanXuat'] =implode(' - ',$request->MucDoHoatDongSanXuat);
                $PhanD['MucDoHoatDongSanXuat'] =implode(' - ',$request->MucDoHoatDongSanXuat);
                $PhanD['ThiTruong'] = $request->ThiTruong;
                $PhanD['MucDoBanSanPham'] =implode(' - ',$request->MucDoBanSanPham);
                $PhanD['DoiTuongKhachHang'] =implode(' - ',$request->DoiTuongKhachHang);
                $PhanD['LoaiHinhGopVon'] = $request->LoaiHinhGopVon;
                $PhanD['DiaChiSanXuat'] = $request->DiaChiSanXuat;
                $PhanD['VonDieuLe'] = $request->VonDieuLe;


                $PhanD['user_id']=$user->id;
        
                if($id == NULL){
                    DB::table('ho_sos')->insert($PhanD);
                }else{
                $save = DB::table('ho_sos')->where('user_id',$request->id)->update($PhanD);
                }
                return redirect::to('nguoidung/capnhatmau2phanD');
            }


            public function get_capnhat_Mau2_PhanE(Request $request){
                $user = $request->user();
            
                $PhanE=DB::table('ho_sos')
                ->leftJoin('nguoi_dai_diens','nguoi_dai_diens.id','=','ho_sos.nguoi_dai_dien_id')
                ->leftJoin('loai_hinh_to_chucs','loai_hinh_to_chucs.id','=','ho_sos.loai_hinh_to_chuc_id')
                ->leftJoin('phieu_dang_kies','phieu_dang_kies.id','=','ho_sos.phieu_dang_ki_id')
                ->leftJoin('users','users.id','=','ho_sos.user_id')
                ->where('users.id',$user->id)
                ->first();
                
                return view('nguoidung.mau2.phanE')
                ->with('PhanE',$PhanE)
                ->with('user',$user);
                }
                public function post_capnhat_Mau2_PhanE(Request $request){
                    $user = $request->user();
        
                    $id = $request->id;
                    $PhanE = array();
    
    
                    $PhanE['user_id']=$user->id;
            
                    if($id == NULL){
                        DB::table('ho_sos')->insert($PhanE);
                    }else{
                    $save = DB::table('ho_sos')->where('user_id',$request->id)->update($PhanE);
                    }
                    return redirect::to('nguoidung/capnhatmau2phanE ');
                }
}