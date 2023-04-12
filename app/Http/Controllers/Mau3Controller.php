<?php

namespace App\Http\Controllers;

use App\Models\HoSo;
use App\Http\Requests\StoreHoSoRequest;
use App\Http\Requests\UpdateHoSoRequest;
use Illuminate\Http\Request;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;

class Mau3Controller extends Controller
{
    public function __construct()
   {
       $this->middleware('auth');
   }
   //CẬP NHẬT THÔNG TIN THEO MẪU 3
   public function getMau3(Request $request){
    $user = $request->user();


    return view('nguoidung.mau3.index_mau3')

    ->with('user',$user);
    }   
    public function get_capnhat_Mau3_PhanI(Request $request){
    $user = $request->user();

    $PhanI=DB::table('ho_sos')
    ->leftJoin('nguoi_dai_diens','nguoi_dai_diens.ho_so_id','=','ho_sos.id')
    ->leftJoin('loai_hinh_to_chucs','loai_hinh_to_chucs.id','=','ho_sos.loai_hinh_to_chuc_id')
    ->leftJoin('phieu_dang_kies','phieu_dang_kies.id','=','ho_sos.phieu_dang_ki_id')
    ->leftJoin('users','users.id','=','ho_sos.user_id')
    ->where('users.id',$user->id)
    ->first();

    
    return view('nguoidung.mau3.phanI')
    ->with('PhanI',$PhanI)
    ->with('user',$user);
    }
    public function post_capnhat_Mau3_PhanI(Request $request){
        $user = $request->user();

        $id = $request->id;
        $PhanI = array();
        $PhanI['TenDonVi'] = $request->TenDonVi;
        $PhanI['SoLuongThanhVien'] = $request-> SoLuongThanhVien;
        $PhanI['NganhNghe'] = $request->NganhNghe ;
        $PhanI['NhanSu'] = $request-> NhanSu;
        $PhanI['TongDienTichDat'] = $request->TongDienTichDat ;

        if($request->file('SoDoToChuc'))
        {
            if($request->id != null){
                $data = DB::table('ho_sos')
                ->where('user_id',$user->id)
                ->first();

                $file_name ='file_doanhnghiep/'. $data->SoDoToChuc;

                unlink(public_path($file_name));
            }
            $file= $request->file('SoDoToChuc');
            $filename= $PhanI['TenDonVi'].'_Sơ đồ tổ chức_'.date('YmdHis').$file->getClientOriginalName();
            $file->move(public_path('file_doanhnghiep'), $filename);
            $PhanI['SoDoToChuc'] = $filename;
        }

        if($request->file('ChucNangNhiemVuNhanSu'))
        {
            if($request->id != null){
                $data = DB::table('ho_sos')
                ->where('user_id',$user->id)
                ->first();

                $file_name ='file_doanhnghiep/'. $data->ChucNangNhiemVuNhanSu;

                unlink(public_path($file_name));
            }
            $file= $request->file('ChucNangNhiemVuNhanSu');
            $filename= $PhanI['TenDonVi'].'_Chức năng/nhiệm vụ nhân sự_'.date('YmdHis').$file->getClientOriginalName();
            $file->move(public_path('file_doanhnghiep'), $filename);
            $PhanI['ChucNangNhiemVuNhanSu'] = $filename;
        }


        $PhanI['user_id']=$user->id;

        if($id == NULL){
            DB::table('ho_sos')->insert($PhanI);
        }else{
        $save = DB::table('ho_sos')->where('user_id',$request->id)->update($PhanI);
        }
        return redirect::to('/nguoidung/capnhatmau3phanI');
    }

    public function get_capnhat_Mau3_PhanII(Request $request){
        $user = $request->user();
    
        $PhanII=DB::table('ho_sos')
        ->leftJoin('nguoi_dai_diens','nguoi_dai_diens.ho_so_id','=','ho_sos.id')
        ->leftJoin('loai_hinh_to_chucs','loai_hinh_to_chucs.id','=','ho_sos.loai_hinh_to_chuc_id')
        ->leftJoin('phieu_dang_kies','phieu_dang_kies.id','=','ho_sos.phieu_dang_ki_id')
        ->leftJoin('users','users.id','=','ho_sos.user_id')
        ->where('users.id',$user->id)
        ->first();
        
        return view('nguoidung.mau3.phanII')
        ->with('PhanII',$PhanII)
        ->with('user',$user);
        }
    public function post_capnhat_Mau3_PhanII(Request $request){
        $user = $request->user();

        $id = $request->id;
        $PhanII = array();
        $PhanII['DanhGiaThiTruong'] = $request->DanhGiaThiTruong;
        $PhanII['DanhGiaKhaNangThamGiaThiTruong'] = $request->DanhGiaKhaNangThamGiaThiTruong;
        $PhanII['CanCuPhapLy'] = $request->CanCuPhapLy;
        

        $PhanII['user_id']=$user->id;

        if($id == NULL){
            DB::table('ho_sos')->insert($PhanII);
        }else{
        $save = DB::table('ho_sos')->where('user_id',$request->id)->update($PhanII);
        }
        return redirect::to('nguoidung/capnhatmau3phanII');
    }

    public function get_capnhat_Mau3_PhanIII(Request $request){
        $user = $request->user();
    
        $PhanIII=DB::table('ho_sos')
        ->leftJoin('nguoi_dai_diens','nguoi_dai_diens.ho_so_id','=','ho_sos.id')
        ->leftJoin('loai_hinh_to_chucs','loai_hinh_to_chucs.id','=','ho_sos.loai_hinh_to_chuc_id')
        ->leftJoin('phieu_dang_kies','phieu_dang_kies.id','=','ho_sos.phieu_dang_ki_id')
        ->leftJoin('users','users.id','=','ho_sos.user_id')
        ->where('users.id',$user->id)
        ->first();
        
        return view('nguoidung.mau3.phanIII')
        ->with('PhanIII',$PhanIII)
        ->with('user',$user);
        }
    public function post_capnhat_Mau3_PhanIII(Request $request){
        $user = $request->user();

        $id = $request->id;   
        $PhanIII = array();
        $PhanIII['TenDonVi'] = $request->TenDonVi;
        $PhanIII['PhanTichChung'] = $request->PhanTichChung;
        $PhanIII['PhanTichCanhTranh'] = $request->PhanTichCanhTranh;
        $PhanIII['MucTieuChienLuoc'] = $request->MucTieuChienLuoc;

        if($request->file('HoatDongSanXuat'))
        {
            if($request->id != null){
                $data = DB::table('ho_sos')
                ->where('user_id',$user->id)
                ->first();

                $file_name ='file_doanhnghiep/'. $data->HoatDongSanXuat;

                unlink(public_path($file_name));
            }
            $file= $request->file('HoatDongSanXuat');
            $filename= $PhanIII['TenDonVi'].'_Hoạt động sản xuất_'.date('YmdHis').$file->getClientOriginalName();
            $file->move(public_path('file_doanhnghiep'), $filename);
            $PhanIII['HoatDongSanXuat'] = $filename;
        }

        if($request->file('KenhPhanPhoi'))
        {
            if($request->id != null){
                $data = DB::table('ho_sos')
                ->where('user_id',$user->id)
                ->first();

                $file_name ='file_doanhnghiep/'. $data->KenhPhanPhoi;

                unlink(public_path($file_name));
            }
            $file= $request->file('KenhPhanPhoi');
            $filename= $PhanIII['TenDonVi'].'_Phân phối bán hàng_'.date('YmdHis').$file->getClientOriginalName();
            $file->move(public_path('file_doanhnghiep'), $filename);
            $PhanIII['KenhPhanPhoi'] = $filename;
        }

        if($request->file('KeHoachXucTienThuongMai'))
        {
            if($request->id != null){
                $data = DB::table('ho_sos')
                ->where('user_id',$user->id)
                ->first();

                $file_name ='file_doanhnghiep/'. $data->KeHoachXucTienThuongMai;

                unlink(public_path($file_name));
            }
            $file= $request->file('KeHoachXucTienThuongMai');
            $filename= $PhanIII['TenDonVi'].'_Kế hoạch xúc tiến thương mại_'.date('YmdHis').$file->getClientOriginalName();
            $file->move(public_path('file_doanhnghiep'), $filename);
            $PhanIII['KeHoachXucTienThuongMai'] = $filename;
        }

        if($request->file('KeHoachMarketing'))
        {
            if($request->id != null){
                $data = DB::table('ho_sos')
                ->where('user_id',$user->id)
                ->first();

                $file_name ='file_doanhnghiep/'. $data->KeHoachMarketing;

                unlink(public_path($file_name));
            }
            $file= $request->file('KeHoachMarketing');
            $filename= $PhanIII['TenDonVi'].'_Kế hoạch Marketing_'.date('YmdHis').$file->getClientOriginalName();
            $file->move(public_path('file_doanhnghiep'), $filename);
            $PhanIII['KeHoachMarketing'] = $filename;
        }

        if($request->file('CoSoHaTang'))
        {
            if($request->id != null){
                $data = DB::table('ho_sos')
                ->where('user_id',$user->id)
                ->first();

                $file_name ='file_doanhnghiep/'. $data->CoSoHaTang;

                unlink(public_path($file_name));
            }
            $file= $request->file('CoSoHaTang');
            $filename= $PhanIII['TenDonVi'].'_Cơ sở hạ tầng_'.date('YmdHis').$file->getClientOriginalName();
            $file->move(public_path('file_doanhnghiep'), $filename);
            $PhanIII['CoSoHaTang'] = $filename;
        }

        if($request->file('TrangThietBi'))
        {
            if($request->id != null){
                $data = DB::table('ho_sos')
                ->where('user_id',$user->id)
                ->first();

                $file_name ='file_doanhnghiep/'. $data->TrangThietBi;

                unlink(public_path($file_name));
            }
            $file= $request->file('TrangThietBi');
            $filename= $PhanIII['TenDonVi'].'_Trang thiết bị_'.date('YmdHis').$file->getClientOriginalName();
            $file->move(public_path('file_doanhnghiep'), $filename);
            $PhanIII['TrangThietBi'] = $filename;
        }

        if($request->file('NhanLucDieuChinh'))
        {
            if($request->id != null){
                $data = DB::table('ho_sos')
                ->where('user_id',$user->id)
                ->first();

                $file_name ='file_doanhnghiep/'. $data->NhanLucDieuChinh;

                unlink(public_path($file_name));
            }
            $file= $request->file('NhanLucDieuChinh');
            $filename= $PhanIII['TenDonVi'].'_Phân phối nhân lực điều chỉnh_'.date('YmdHis').$file->getClientOriginalName();
            $file->move(public_path('file_doanhnghiep'), $filename);
            $PhanIII['NhanLucDieuChinh'] = $filename;
        }

        if($request->file('DieuKienKhac'))
        {
            if($request->id != null){
                $data = DB::table('ho_sos')
                ->where('user_id',$user->id)
                ->first();

                $file_name ='file_doanhnghiep/'. $data->DieuKienKhac;

                unlink(public_path($file_name));
            }
            $file= $request->file('DieuKienKhac');
            $filename= $PhanIII['TenDonVi'].'_Điều kiện khác_'.date('YmdHis').$file->getClientOriginalName();
            $file->move(public_path('file_doanhnghiep'), $filename);
            $PhanIII['DieuKienKhac'] = $filename;
        }

        $PhanIII['user_id']=$user->id;

        if($id == NULL){
            DB::table('ho_sos')->insert($PhanIII);
        }else{
        $save = DB::table('ho_sos')->where('user_id',$request->id)->update($PhanIII);
        }
        return redirect::to('nguoidung/capnhatmau3phanIII');
    }
    public function get_capnhat_Mau3_PhanIV(Request $request){
        $user = $request->user();
    
        $PhanIV=DB::table('ho_sos')
        ->leftJoin('nguoi_dai_diens','nguoi_dai_diens.ho_so_id','=','ho_sos.id')
        ->leftJoin('loai_hinh_to_chucs','loai_hinh_to_chucs.id','=','ho_sos.loai_hinh_to_chuc_id')
        ->leftJoin('phieu_dang_kies','phieu_dang_kies.id','=','ho_sos.phieu_dang_ki_id')
        ->leftJoin('users','users.id','=','ho_sos.user_id')
        ->where('users.id',$user->id)
        ->first();
        
        return view('nguoidung.mau3.phanIV')
        ->with('PhanIV',$PhanIV)
        ->with('user',$user);
        }
    public function post_capnhat_Mau3_PhanIV(Request $request){
        $user = $request->user();

        $id = $request->id;
        $PhanIV = array();
        $PhanIV['TenDonVi'] = $request->TenDonVi;

        if($request->file('NhuCauVon'))
        {
            if($request->id != null){
                $data = DB::table('ho_sos')
                ->where('user_id',$user->id)
                ->first();

                $file_name ='file_doanhnghiep/'. $data->NhuCauVon;

                unlink(public_path($file_name));
            }

            $file= $request->file('NhuCauVon');
            $filename= $PhanIV['TenDonVi'].'_Nhu cầu vốn_'.date('YmdHis').$file->getClientOriginalName();
            $file->move(public_path('file_doanhnghiep'), $filename);
            $PhanIV['NhuCauVon'] = $filename;
        }

        if($request->file('PhuongAnHuyDong'))
        {
            if($request->id != null){
                $data = DB::table('ho_sos')
                ->where('user_id',$user->id)
                ->first();

                $file_name ='file_doanhnghiep/'. $data->PhuongAnHuyDong;

                unlink(public_path($file_name));
            }

            $file= $request->file('PhuongAnHuyDong');
            $filename= $PhanIV['TenDonVi'].'_Phuong án huy động vốn_'.date('YmdHis').$file->getClientOriginalName();
            $file->move(public_path('file_doanhnghiep'), $filename);
            $PhanIV['PhuongAnHuyDong'] = $filename;
        }

        if($request->file('TongDoanhThu'))
        {
            if($request->id != null){
                $data = DB::table('ho_sos')
                ->where('user_id',$user->id)
                ->first();

                $file_name ='file_doanhnghiep/'. $data->TongDoanhThu;

                unlink(public_path($file_name));
            }
            $file= $request->file('TongDoanhThu');
            $filename= $PhanIV['TenDonVi'].'_Tổng doanh thu_'.date('YmdHis').$file->getClientOriginalName();
            $file->move(public_path('file_doanhnghiep'), $filename);
            $PhanIV['TongDoanhThu'] = $filename;
        }

        if($request->file('TongChiPhi'))
        {
            if($request->id != null){
            $data = DB::table('ho_sos')
            ->where('user_id',$user->id)
            ->first();

            $file_name ='file_doanhnghiep/'. $data->TongChiPhi;

            unlink(public_path($file_name));
        }
            $file= $request->file('TongChiPhi');
            $filename= $PhanIV['TenDonVi'].'_Tổng chi phí_'.date('YmdHis').$file->getClientOriginalName();
            $file->move(public_path('file_doanhnghiep'), $filename);
            $PhanIV['TongChiPhi'] = $filename;
        }

        if($request->file('LoiNhuan'))
        {
            if($request->id != null){
                $data = DB::table('ho_sos')
                ->where('user_id',$user->id)
                ->first();

                $file_name ='file_doanhnghiep/'. $data->LoiNhuan;

                unlink(public_path($file_name));
            }
            $file= $request->file('LoiNhuan');
            $filename= $PhanIV['TenDonVi'].'_Lợi nhuận_'.date('YmdHis').$file->getClientOriginalName();
            $file->move(public_path('file_doanhnghiep'), $filename);
            $PhanIV['LoiNhuan'] = $filename;
        }

        if($request->file('PhuongAnTaiChinhKhac'))
        {
            if($request->id != null){
                $data = DB::table('ho_sos')
                ->where('user_id',$user->id)
                ->first();

                $file_name ='file_doanhnghiep/'. $data->PhuongAnTaiChinhKhac;

                unlink(public_path($file_name));
            }

            $file= $request->file('PhuongAnTaiChinhKhac');
            $filename= $PhanIV['TenDonVi'].'_Phương án tài chính khác_'.date('YmdHis').$file->getClientOriginalName();
            $file->move(public_path('file_doanhnghiep'), $filename);
            $PhanIV['PhuongAnTaiChinhKhac'] = $filename;
        }

        
        $PhanIV['user_id']=$user->id;

        if($id == NULL){
            DB::table('ho_sos')->insert($PhanIV);
        }else{
        $save = DB::table('ho_sos')->where('user_id',$request->id)->update($PhanIV);
        }
        return redirect::to('nguoidung/capnhatmau3phanIV');
    }


}