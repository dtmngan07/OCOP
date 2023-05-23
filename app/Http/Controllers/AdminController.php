<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;

use Illuminate\Support\Facades\Redirect;
class AdminController extends Controller
{
    public function __construct()
   {
       $this->middleware('auth');
   }

   public function getdashboard(Request $request){
        $user = $request->user();
        $role = DB::table('role_user')
        ->leftJoin('users','users.id','=','role_user.user_id')
        ->leftJoin('roles','roles.id','=','role_user.role_id')
        ->where('user_id',$user->id)
        ->first();
        $HoSo=DB::table('ho_sos')
        ->leftJoin('nguoi_dai_diens','nguoi_dai_diens.ho_so_id','=','ho_sos.id')
        ->leftJoin('loai_hinh_to_chucs','loai_hinh_to_chucs.id','=','ho_sos.loai_hinh_to_chuc_id')
        ->leftJoin('phieu_dang_kies','phieu_dang_kies.ho_so_id','=','ho_sos.id')
        ->leftJoin('don_vi_duyets','don_vi_duyets.id','=','ho_sos.don_vi_duyet_id')
        ->select('ho_sos.id as HoSo_id','ho_sos.*','don_vi_duyets.*','phieu_dang_kies.*','nguoi_dai_diens.*','loai_hinh_to_chucs.*')
        ->get();

        $DaDuyet = DB::table('ho_sos')
        ->leftJoin('nguoi_dai_diens','nguoi_dai_diens.ho_so_id','=','ho_sos.id')
        ->leftJoin('loai_hinh_to_chucs','loai_hinh_to_chucs.id','=','ho_sos.loai_hinh_to_chuc_id')
        ->leftJoin('phieu_dang_kies','phieu_dang_kies.ho_so_id','=','ho_sos.id')
        ->leftJoin('don_vi_duyets','don_vi_duyets.id','=','ho_sos.don_vi_duyet_id')
        ->select('ho_sos.id as HoSo_id','ho_sos.*','don_vi_duyets.*','phieu_dang_kies.*','nguoi_dai_diens.*','loai_hinh_to_chucs.*')
        ->where('TrangThai',2)
        ->get();

        $ChuaDuyet = DB::table('ho_sos')
        ->leftJoin('nguoi_dai_diens','nguoi_dai_diens.ho_so_id','=','ho_sos.id')
        ->leftJoin('loai_hinh_to_chucs','loai_hinh_to_chucs.id','=','ho_sos.loai_hinh_to_chuc_id')
        ->leftJoin('phieu_dang_kies','phieu_dang_kies.ho_so_id','=','ho_sos.id')
        ->leftJoin('don_vi_duyets','don_vi_duyets.id','=','ho_sos.don_vi_duyet_id')
        ->select('ho_sos.id as HoSo_id','ho_sos.*','don_vi_duyets.*','phieu_dang_kies.*','nguoi_dai_diens.*','loai_hinh_to_chucs.*')
        ->where('TrangThai',0)
        ->get();

        $BoSungHS = DB::table('ho_sos')
        ->leftJoin('nguoi_dai_diens','nguoi_dai_diens.ho_so_id','=','ho_sos.id')
        ->leftJoin('loai_hinh_to_chucs','loai_hinh_to_chucs.id','=','ho_sos.loai_hinh_to_chuc_id')
        ->leftJoin('phieu_dang_kies','phieu_dang_kies.ho_so_id','=','ho_sos.id')
        ->leftJoin('don_vi_duyets','don_vi_duyets.id','=','ho_sos.don_vi_duyet_id')
        ->select('ho_sos.id as HoSo_id','ho_sos.*','don_vi_duyets.*','phieu_dang_kies.*','nguoi_dai_diens.*','loai_hinh_to_chucs.*')
        ->where('TrangThai',1)
        ->get();

        $PhieuDangKy = DB::table('ho_sos')
        ->leftJoin('nguoi_dai_diens','nguoi_dai_diens.ho_so_id','=','ho_sos.id')
        ->leftJoin('loai_hinh_to_chucs','loai_hinh_to_chucs.id','=','ho_sos.loai_hinh_to_chuc_id')
        ->leftJoin('phieu_dang_kies','phieu_dang_kies.ho_so_id','=','ho_sos.id')
        ->leftJoin('don_vi_duyets','don_vi_duyets.id','=','ho_sos.don_vi_duyet_id')
        ->select('ho_sos.id as HoSo_id','ho_sos.*','don_vi_duyets.*','phieu_dang_kies.*','nguoi_dai_diens.*','loai_hinh_to_chucs.*')
        ->where('phieu_dang_ki_id',"")
        ->get();

        $DonViDuyet = DB::table('users')
        ->leftJoin('can_bo_quan_lies','can_bo_quan_lies.user_id','=','users.id')
        ->leftJoin('don_vi_duyets','don_vi_duyets.can_bo_quan_li_id','=','can_bo_quan_lies.id')
        ->select('can_bo_quan_lies.*','can_bo_quan_lies.id as IDCBQL','can_bo_quan_lies.diachi as diachiCBQL','can_bo_quan_lies.sodienthoai as sodienthoaiCBQL',
            'don_vi_duyets.*','don_vi_duyets.id as DonViDuyetID')
        ->where('user_id',$user->id)
        ->first();

        if ($role->role_name == 'admin')
            return view('admin.trangchuAdmin')->with('HoSo',$HoSo)
            ->with('DaDuyet', $DaDuyet)
            ->with('ChuaDuyet', $ChuaDuyet)
            ->with('BoSungHS',$BoSungHS)
            ->with('PhieuDangKy',$PhieuDangKy);
        else if ($role->role_name == 'kiemduyet')
            return view('kiemduyet.trangchuKiemDuyet')
            ->with('HoSo',$HoSo)->with('DonViDuyet', $DonViDuyet)
            ->with('DaDuyet', $DaDuyet)
            ->with('ChuaDuyet', $ChuaDuyet)
            ->with('BoSungHS',$BoSungHS)
            ->with('PhieuDangKy',$PhieuDangKy);
        else
            return view('nguoidung.trangchuUser');

/*         return view('Home.home')->with('role',$role); */
    }
   public function getdashboardAdmin(Request $request){
        $request->user()->authorizeRoles(['admin']);
        $user = $request->user();

        $HoSo=DB::table('ho_sos')
        ->leftJoin('nguoi_dai_diens','nguoi_dai_diens.ho_so_id','=','ho_sos.id')
        ->leftJoin('loai_hinh_to_chucs','loai_hinh_to_chucs.id','=','ho_sos.loai_hinh_to_chuc_id')
        ->leftJoin('phieu_dang_kies','phieu_dang_kies.ho_so_id','=','ho_sos.id')
        ->leftJoin('don_vi_duyets','don_vi_duyets.id','=','ho_sos.don_vi_duyet_id')
        ->select('ho_sos.id as HoSo_id','ho_sos.*','don_vi_duyets.*','phieu_dang_kies.*','nguoi_dai_diens.*','loai_hinh_to_chucs.*')
        ->get();

        $DaDuyet = DB::table('ho_sos')
        ->leftJoin('nguoi_dai_diens','nguoi_dai_diens.ho_so_id','=','ho_sos.id')
        ->leftJoin('loai_hinh_to_chucs','loai_hinh_to_chucs.id','=','ho_sos.loai_hinh_to_chuc_id')
        ->leftJoin('phieu_dang_kies','phieu_dang_kies.ho_so_id','=','ho_sos.id')
        ->leftJoin('don_vi_duyets','don_vi_duyets.id','=','ho_sos.don_vi_duyet_id')
        ->select('ho_sos.id as HoSo_id','ho_sos.*','don_vi_duyets.*','phieu_dang_kies.*','nguoi_dai_diens.*','loai_hinh_to_chucs.*')
        ->where('TrangThai',2)
        ->get();

        $ChuaDuyet = DB::table('ho_sos')
        ->leftJoin('nguoi_dai_diens','nguoi_dai_diens.ho_so_id','=','ho_sos.id')
        ->leftJoin('loai_hinh_to_chucs','loai_hinh_to_chucs.id','=','ho_sos.loai_hinh_to_chuc_id')
        ->leftJoin('phieu_dang_kies','phieu_dang_kies.ho_so_id','=','ho_sos.id')
        ->leftJoin('don_vi_duyets','don_vi_duyets.id','=','ho_sos.don_vi_duyet_id')
        ->select('ho_sos.id as HoSo_id','ho_sos.*','don_vi_duyets.*','phieu_dang_kies.*','nguoi_dai_diens.*','loai_hinh_to_chucs.*')
        ->where('TrangThai',0)
        ->get();

        $BoSungHS = DB::table('ho_sos')
        ->leftJoin('nguoi_dai_diens','nguoi_dai_diens.ho_so_id','=','ho_sos.id')
        ->leftJoin('loai_hinh_to_chucs','loai_hinh_to_chucs.id','=','ho_sos.loai_hinh_to_chuc_id')
        ->leftJoin('phieu_dang_kies','phieu_dang_kies.ho_so_id','=','ho_sos.id')
        ->leftJoin('don_vi_duyets','don_vi_duyets.id','=','ho_sos.don_vi_duyet_id')
        ->select('ho_sos.id as HoSo_id','ho_sos.*','don_vi_duyets.*','phieu_dang_kies.*','nguoi_dai_diens.*','loai_hinh_to_chucs.*')
        ->where('TrangThai',1)
        ->get();

        $PhieuDangKy = DB::table('ho_sos')
        ->leftJoin('nguoi_dai_diens','nguoi_dai_diens.ho_so_id','=','ho_sos.id')
        ->leftJoin('loai_hinh_to_chucs','loai_hinh_to_chucs.id','=','ho_sos.loai_hinh_to_chuc_id')
        ->leftJoin('phieu_dang_kies','phieu_dang_kies.ho_so_id','=','ho_sos.id')
        ->leftJoin('don_vi_duyets','don_vi_duyets.id','=','ho_sos.don_vi_duyet_id')
        ->select('ho_sos.id as HoSo_id','ho_sos.*','don_vi_duyets.*','phieu_dang_kies.*','nguoi_dai_diens.*','loai_hinh_to_chucs.*')
        ->where('phieu_dang_ki_id',0)
        ->get();

        return view('admin.trangchuAdmin')->with('HoSo',$HoSo)
        ->with('DaDuyet', $DaDuyet)
        ->with('ChuaDuyet', $ChuaDuyet)
        ->with('BoSungHS',$BoSungHS)
        ->with('PhieuDangKy',$PhieuDangKy);
    }
    public function getdashboardUser(Request $request){
        
            return view('nguoidung.trangchuUser');
    }
    public function getdashboardKiemDuyet(Request $request){
        $request->user()->authorizeRoles(['kiemduyet']);
        $user = $request->user();

        $HoSo=DB::table('ho_sos')
        ->leftJoin('nguoi_dai_diens','nguoi_dai_diens.ho_so_id','=','ho_sos.id')
        ->leftJoin('loai_hinh_to_chucs','loai_hinh_to_chucs.id','=','ho_sos.loai_hinh_to_chuc_id')
        ->leftJoin('phieu_dang_kies','phieu_dang_kies.ho_so_id','=','ho_sos.id')
        ->leftJoin('don_vi_duyets','don_vi_duyets.id','=','ho_sos.don_vi_duyet_id')
        ->select('ho_sos.id as HoSo_id','ho_sos.*','don_vi_duyets.*','phieu_dang_kies.*','nguoi_dai_diens.*','loai_hinh_to_chucs.*')
        ->get();

        $DaDuyet = DB::table('ho_sos')
        ->leftJoin('nguoi_dai_diens','nguoi_dai_diens.ho_so_id','=','ho_sos.id')
        ->leftJoin('loai_hinh_to_chucs','loai_hinh_to_chucs.id','=','ho_sos.loai_hinh_to_chuc_id')
        ->leftJoin('phieu_dang_kies','phieu_dang_kies.ho_so_id','=','ho_sos.id')
        ->leftJoin('don_vi_duyets','don_vi_duyets.id','=','ho_sos.don_vi_duyet_id')
        ->select('ho_sos.id as HoSo_id','ho_sos.*','don_vi_duyets.*','phieu_dang_kies.*','nguoi_dai_diens.*','loai_hinh_to_chucs.*')
        ->where('TrangThai',2)
        ->get();

        $ChuaDuyet = DB::table('ho_sos')
        ->leftJoin('nguoi_dai_diens','nguoi_dai_diens.ho_so_id','=','ho_sos.id')
        ->leftJoin('loai_hinh_to_chucs','loai_hinh_to_chucs.id','=','ho_sos.loai_hinh_to_chuc_id')
        ->leftJoin('phieu_dang_kies','phieu_dang_kies.ho_so_id','=','ho_sos.id')
        ->leftJoin('don_vi_duyets','don_vi_duyets.id','=','ho_sos.don_vi_duyet_id')
        ->select('ho_sos.id as HoSo_id','ho_sos.*','don_vi_duyets.*','phieu_dang_kies.*','nguoi_dai_diens.*','loai_hinh_to_chucs.*')
        ->where('TrangThai',0)
        ->get();

        $BoSungHS = DB::table('ho_sos')
        ->leftJoin('nguoi_dai_diens','nguoi_dai_diens.ho_so_id','=','ho_sos.id')
        ->leftJoin('loai_hinh_to_chucs','loai_hinh_to_chucs.id','=','ho_sos.loai_hinh_to_chuc_id')
        ->leftJoin('phieu_dang_kies','phieu_dang_kies.ho_so_id','=','ho_sos.id')
        ->leftJoin('don_vi_duyets','don_vi_duyets.id','=','ho_sos.don_vi_duyet_id')
        ->select('ho_sos.id as HoSo_id','ho_sos.*','don_vi_duyets.*','phieu_dang_kies.*','nguoi_dai_diens.*','loai_hinh_to_chucs.*')
        ->where('TrangThai',1)
        ->get();
        
        $DonViDuyet = DB::table('users')
        ->leftJoin('can_bo_quan_lies','can_bo_quan_lies.user_id','=','users.id')
        ->leftJoin('don_vi_duyets','don_vi_duyets.can_bo_quan_li_id','=','can_bo_quan_lies.id')
        ->select('can_bo_quan_lies.*','can_bo_quan_lies.id as IDCBQL','can_bo_quan_lies.diachi as diachiCBQL','can_bo_quan_lies.sodienthoai as sodienthoaiCBQL',
            'don_vi_duyets.*','don_vi_duyets.id as DonViDuyetID')
        ->where('user_id',$user->id)
        ->first();
        
        return view('kiemduyet.trangchuKiemDuyet')->with('HoSo',$HoSo)->with('DonViDuyet', $DonViDuyet)
        ->with('DaDuyet', $DaDuyet)
        ->with('ChuaDuyet', $ChuaDuyet)
        ->with('BoSungHS',$BoSungHS);
}

    public function get_DS_TaiKhoan(Request $request){

        $TaiKhoan = DB::table('users')
        ->leftJoin('can_bo_quan_lies','can_bo_quan_lies.user_id','=','users.id')
        ->leftJoin('ho_sos','ho_sos.user_id','=','users.id')
        ->leftJoin('role_user','users.id','=','role_user.user_id')
        ->leftJoin('roles','roles.id','=','role_user.role_id')
        ->select('users.*','users.id as userID', 'role_user.*','roles.*','roles.id as roleID')
        ->get();


            return view('admin.quanlytaikhoan.xemhoso')->with('TaiKhoan',$TaiKhoan);
    }

    public function get_Sua_TaiKhoan(Request $request, $id){

        $TaiKhoan = DB::table('users')
        ->leftJoin('role_user','users.id','=','role_user.user_id')
        ->leftJoin('roles','roles.id','=','role_user.role_id')
        ->select('users.*','users.id as userID', 'role_user.*','roles.*','roles.id as roleID')
        ->where('users.id',$id)
        ->first();

        $Role = DB::table('roles')->get();
            return view('admin.quanlytaikhoan.sua')->with('TaiKhoan',$TaiKhoan)->with('Role',$Role);
    }

    public function post_Sua_TaiKhoan(Request $request,$id){

        $TaiKhoan = array();
        $TaiKhoan['role_id'] = $request->roleID;

        $user_id = $request->id;
        DB::table('role_user')->where('id',$user_id)->update($TaiKhoan);


        return redirect::to('/admin/quanlytaikhoan');
    }

}
