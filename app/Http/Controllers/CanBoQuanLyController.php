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

/*     public function get_Lay_ThongTinCaNhan(Request $request){
        $request->user()->authorizeRoles(['user']);
        $user = $request->user();

        $ThongTinCaNhan=DB::table('can_bo_quan_lies')
            ->join('users','users.id','=','can_bo_quan_lies.user_id')
            ->select('users.id as User_id','users.*','can_bo_quan_lies.id as CanBoQuanLy_id','can_bo_quan_lies.*')
            ->where('users.id',$user->id)
            ->first();
            
        return view('admin.thongtintaikhoancanhan.AdminHome')->with('ThongTinCaNhan',$ThongTinCaNhan);
    } */
    public function get_ThongTinCaNhan(Request $request){
        $user = $request->user();
        $ThongTinCaNhan = DB::table('users')
        ->leftJoin('can_bo_quan_lies','can_bo_quan_lies.user_id','=','users.id')
        ->where('users.id',$user->id)
        ->first();

        if ( $ThongTinCaNhan!=NULL && $ThongTinCaNhan->id != NULL)
        {
            return view('admin.thongtintaikhoancanhan.thongtinchitiet')->with('ThongTinCaNhan',$ThongTinCaNhan)->with('user',$user);
        }
        else
        {
            return view('admin.thongtintaikhoancanhan.sua')->with('ThongTinCaNhan',$ThongTinCaNhan)->with('user',$user);
        }
       
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
        $id = $request->id;
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
