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
        
        $CanBoQuanLy = new CanBoQuanLy();
        $CanBoQuanLy['hoten']=$request->hoten;
        $CanBoQuanLy['diachi']=$request->diachi;
        $CanBoQuanLy['sodienthoai']=$request->sodienthoai;
        $CanBoQuanLy->save();
            
        return redirect::to('/admin/dscanboquanly');
    }

    public function get_Sua_CanBoQuanLy(Request $request, $id){
        $CanBoQuanLy = DB::table('can_bo_quan_lies')
        ->where('can_bo_quan_lies.id',$id)
        ->first();

        return view('admin.canboquanly.sua')->with('CanBoQuanLy',$CanBoQuanLy);
    }
    public function post_Sua_CanBoQuanLy(Request $request){

        $CanBoQuanLy = new CanBoQuanLy();
        $CanBoQuanLy['hoten']=$request->hoten;
        $CanBoQuanLy['diachi']=$request->diachi;
        $CanBoQuanLy['sodienthoai']=$request->sodienthoai;
        $CanBoQuanLy->save();
            
        return redirect::to('/admin/dscanboquanly');
    }

    public function get_Xoa_CanBoQuanLy($id){
        DB::table('can_bo_quan_lies')->delete($id);

        /* storage::delete($canboquanly->hinh); */

        return redirect::to('/admin/dscanboquanly');
    }

}
