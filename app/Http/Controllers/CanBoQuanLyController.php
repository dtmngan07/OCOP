<?php

namespace App\Http\Controllers;

use App\Models\CanBoQuanLy;
use App\Http\Requests\StoreCanBoQuanLyRequest;
use App\Http\Requests\UpdateCanBoQuanLyRequest;
use Illuminate\Http\Request;
use Session;
use DB;

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
        $request->user()->authorizeRoles(['Admin']);
        $user = $request->user();
        
        return view('admin.canboquanly.them');
    }
    public function post_Them_CanBoQuanLy(Request $request){
        
        $CanBoQuanLy = new CanBoQuanLy();
        $CanBoQuanLy->hoten=$request->input('hoten');
        $CanBoQuanLy->diachi=$request->input('diachi');
        $CanBoQuanLy->sodienthoai=$request->input('sodienthoai');
        $CanBoQuanLy->save();
            
        return redirect()->route('admin.canboquanly.xemhoso')->with('success', 'thêm thành công.');
    }

    public function get_Sua_CanBoQuanLy(Request $request, $id){
        $request->user()->authorizeRoles(['Admin']);
        $user = $request->user();
        
        $CanBoQuanLy = CanBoQuanLy::find($id);

        return view('admin.canboquanly.sua');
    }
    public function post_Sua_CanBoQuanLy(Request $request,$id){

        $CanBoQuanLy = new CanBoQuanLy();
        $CanBoQuanLy->hoten=$request->input('hoten');
        $CanBoQuanLy->diachi=$request->input('diachi');
        $CanBoQuanLy->sodienthoai=$request->input('sodienthoai');
        $CanBoQuanLy->save();
            
        return redirect()->route('admin.canboquanly.xemhoso')->with('success', 'sửa thành công.');
    }

    public function post_Xoa_CanBoQuanLy($id){
        $CanBoQuanLy = CanBoQuanLy::find($id);
        $CanBoQuanLy->delete();

        /* storage::delete($canboquanly->hinh); */

        return redirect()->route('admin.canboquanly.xemhoso')->with('success', 'xóa thành công.');
    }

}
