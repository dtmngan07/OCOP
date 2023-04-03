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
        
        ->leftJoin('role_user','can_bo_quan_lies.user_id','=','role_user.user_id')
        ->leftJoin('roles','roles.id','=','role_user.role_id')
        ->select('can_bo_quan_lies.*','can_bo_quan_lies.id as CBQL_id','role_user.*','role_user.id as Roleuser_id','roles.*','roles.id as Role_id')
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
        ->leftJoin('role_user','can_bo_quan_lies.user_id','=','role_user.user_id')
        ->leftJoin('roles','roles.id','=','role_user.role_id')
        ->select('can_bo_quan_lies.*','can_bo_quan_lies.id as CBQL_id','role_user.*','role_user.id as Roleuser_id','roles.*')
        ->where('can_bo_quan_lies.id',$id)
        ->first();

        $Role = DB::table('roles')->get();

        return view('admin.canboquanly.sua')->with('CanBoQuanLy',$CanBoQuanLy)->with('Role', $Role);
    }
    public function post_Sua_CanBoQuanLy(Request $request,$id){

        $CanBoQuanLy = array();
        $CanBoQuanLy['hoten']=$request->hoten;
        $CanBoQuanLy['diachi']=$request->diachi;
        $CanBoQuanLy['sodienthoai']=$request->sodienthoai;
        $CanBoQuanLy['user_id']=$request->user_id;
        $save = DB::table('can_bo_quan_lies')->where('can_bo_quan_lies.id',$id)->update($CanBoQuanLy);
            
        return redirect::to('/admin/dscanboquanly');
    }

    public function get_Xoa_CanBoQuanLy($id){
        DB::table('can_bo_quan_lies')->delete($id);

        /* storage::delete($canboquanly->hinh); */

        return redirect::to('/admin/dscanboquanly');
    }

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
