<?php

namespace App\Http\Controllers;

use App\Models\CanBoQuanLy;
use App\Http\Requests\StoreCanBoQuanLyRequest;
use App\Http\Requests\UpdateCanBoQuanLyRequest;
use Illuminate\Http\Request;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;

class CanBoQuanLyController extends Controller
{

    public function __construct()
   {
       $this->middleware('auth');
   }
    public function getDS_CanBoQuanLy(Request $request){
        $request->user()->authorizeRoles(['Admin']);
        $user = $request->user();

        $CanBoQuanLy=DB::table('can_bo_quan_lies')
            ->get();
            
        return view('admin.canboquanly.xemhoso')->with('CanBoQuanLy',$CanBoQuanLy);
    }

    public function get_Them_CanBoQuanLy(Request $request){

        return view('admin.canboquanly.them');
    }
    public function post_Them_CanBoQuanLy(Request $request){
        
        $CanBoQuanLy = array();
        $CanBoQuanLy['hoten']=$request->hoten;
        $CanBoQuanLy['diachi']=$request->diachi;
        $CanBoQuanLy['sodienthoai']=$request->sodienthoai;
        $save = DB::table('can_bo_quan_lies')->insertGetId($CanBoQuanLy);

/*         $CanBoQuanLy = new CanBoQuanLy();
        $CanBoQuanLy['hoten']=$request->hoten;
        $CanBoQuanLy['diachi']=$request->diachi;
        $CanBoQuanLy['sodienthoai']=$request->sodienthoai;
        $CanBoQuanLy->save(); */
            
        return redirect::to('/admin/dscanboquanly');
    }

    public function get_Sua_CanBoQuanLy(Request $request, $id){
        $CanBoQuanLy = DB::table('can_bo_quan_lies')
        ->where('can_bo_quan_lies.id',$id)
        ->first();

        return view('admin.canboquanly.sua')->with('CanBoQuanLy',$CanBoQuanLy);
    }
    public function post_Sua_CanBoQuanLy(Request $request,$id){

        $CanBoQuanLy = array();
        $CanBoQuanLy['hoten']=$request->hoten;
        $CanBoQuanLy['diachi']=$request->diachi;
        $CanBoQuanLy['sodienthoai']=$request->sodienthoai;
        $save = DB::table('can_bo_quan_lies')->where('can_bo_quan_lies.id',$id)->update($CanBoQuanLy);
            
        return redirect::to('/admin/dscanboquanly');
    }

    public function get_Xoa_CanBoQuanLy($id){
        DB::table('can_bo_quan_lies')->delete($id);

        /* storage::delete($canboquanly->hinh); */

        return redirect::to('/admin/dscanboquanly');
    }

    public function get_Lay_ThongTinCaNhan(Request $request,$id){

        $ThongTinCaNhan=DB::table('can_bo_quan_lies')
            ->join('users','users.id','=','can_bo_quan_lies.user_id')
            ->select('users.id as User_id','users.*','can_bo_quan_lies.id as CanBoQuanLy_id','can_bo_quan_lies.*')
            ->where('users.id','=','can_bo_quan_lies.user_id')
            ->first();
            
        return view('admin.thongtintaikhoancanhan.AdminHome')->with('ThongTinCaNhan',$ThongTinCaNhan);
    }
    public function get_ThongTinCaNhan(Request $request){
/* 
        $ThongTinCaNhan=DB::table('can_bo_quan_lies')
            ->join('users','users.id','=','can_bo_quan_lies.user_id')
            ->select('users.id as User_id','users.*','can_bo_quan_lies.id as CanBoQuanLy_id','can_bo_quan_lies.*')
            ->where('users.id','=','can_bo_quan_lies.user_id',$id)
            ->first(); */
            $user = $request->user();
            $ThongTinCaNhan = DB::table('users')
            ->leftJoin('can_bo_quan_lies','can_bo_quan_lies.user_id','=','users.id')
            ->where('users.id',$user->id)
            ->first();
        return view('admin.thongtintaikhoancanhan.thongtinchitiet')->with('ThongTinCaNhan',$ThongTinCaNhan)->with('user',$user);
    }

    public function get_Sua_ThongTinCaNhan(Request $request){
        $user = $request->user();
        $ThongTinCaNhan = DB::table('users')
            ->leftJoin('can_bo_quan_lies','can_bo_quan_lies.user_id','=','users.id')
            ->where('user_id',$user->id)
            ->first();

        return view('admin.thongtintaikhoancanhan.sua')->with('ThongTinCaNhan',$ThongTinCaNhan)->with('user',$user);
    }
    public function post_Sua_ThongTinCaNhan(Request $request){

        $request->user()->authorizeRoles(['admin']);
        $user = $request->user();
/* 
        $CTDN = array();
        $id = $request->idCT;
        $CTDN['DoanhNghiep_id']=Session::get('DoanhNghiep_id');
        $CTDN['MaSoThue']=$request->MST;
        $CTDN['NgayHoatDong']=$request->NHD;
        $CTDN['LoaiHinhDN']=$request->LoaiHinh;
        $CTDN['TenVietTat'] = $request->TenVT;
        $CTDN['TenTiengAnh'] = $request->TenTA;
        $CTDN['VonDieuLe'] =$request->VonDieuLe;
        $CTDN['QuyMoNhanSu'] = $request->QuyMo;
        $CTDN['DC_ThanhPho'] = $request->DC_ThanhPho;
        $CTDN['DC_Huyen'] = $request->DC_Huyen;
        $CTDN['DC_Phuong'] = $request->DC_Phuong;
        $CTDN['DC_SoNha'] = $request->DC;
        $CTDN['SDT'] = $request->SDT;
        $CTDN['FAX'] = $request->Fax;
        $CTDN['Website'] = $request->Web;
        $CTDN['Zipcode'] =$request->Zip;
        if($id == NULL){
            $CTDN['created_at'] = Carbon::now();
            DB::table('chitiet_doanhnghiep')->insert($CTDN);
        }else{
            $CTDN['updated_at'] = Carbon::now();
            DB::table('chitiet_doanhnghiep')->update($CTDN);
        }
        // lấy bản số
            return Redirect::to('profile')->withSuccess('IT WORKS!');
 */     $id = $request->id;
        $ThongTinCaNhan = array();
        $ThongTinCaNhan['hoten']=$request->hoten;
        $ThongTinCaNhan['diachi']=$request->diachi;
        $ThongTinCaNhan['sodienthoai']=$request->sodienthoai;
        $ThongTinCaNhan['user_id']=$user->id;

        if($id == NULL){
            DB::table('can_bo_quan_lies')->insert($ThongTinCaNhan);
        }else{
        $save = DB::table('can_bo_quan_lies')->where('id',$request->id)->update($ThongTinCaNhan);
        }
        return redirect::to('/admin/thongtintaikhoancanhan');
    }

}
