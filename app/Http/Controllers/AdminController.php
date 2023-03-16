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
   public function getdashboardAdmin(Request $request){
    $request->user()->authorizeRoles(['admin']);
    $user = $request->user();
    Session::put('name',$user->name);
    Session::put('role',"admin");

        return view('admin.trangchuAdmin');
    }
    public function getdashboardUser(Request $request){
        $request->user()->authorizeRoles(['user']);
        $user = $request->user();
        Session::put('name',$user->name);
        Session::put('role',"client");

            return view('nguoidung.trangchuUser');
        }

        public function getProfile(Request $request){
            $request->user()->authorizeRoles(['Admin']);
            $user = $request->user();

                return view('admin.hoso');
        }

        public function getUserList(Request $request){
            $request->user()->authorizeRoles(['Admin']);
            $user = $request->user();

            Session::put('email',$user->email);
    
            $HoSo=DB::table('tblHoSo')
                ->leftJoin('tblnguoidaidien','tblnguoidaidien.idtblnguoidaidien','=','tblHoSo.tblNguoiDaiDien_idtblNguoiDaiDien')
                ->get();
                
                return view('admin.quanlytaikhoan.danhsachtaikhoan')->with('HoSo',$HoSo);
        }

        public function getDS_CanBoQuanLy(Request $request){
            $request->user()->authorizeRoles(['Admin']);
            $user = $request->user();

            Session::put('email',$user->email);
    
            $CanBoQuanLy=DB::table('can_bo_quan_lies')
                ->get();
                
                return view('admin.canboquanly.xemhoso')->with('CanBoQuanLy',$CanBoQuanLy);
        }
}
