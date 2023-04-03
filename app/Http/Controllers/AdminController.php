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

        if (($role->role_name == 'admin') || ($role->role_name == 'kiemduyet'))
            return view('admin.trangchuAdmin');
        else
        return view('nguoidung.trangchuUser');

/*         return view('Home.home')->with('role',$role); */
    }
   public function getdashboardAdmin(Request $request){

        return view('admin.trangchuAdmin');
    }
    public function getdashboardUser(Request $request){
        
            return view('nguoidung.trangchuUser');
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
