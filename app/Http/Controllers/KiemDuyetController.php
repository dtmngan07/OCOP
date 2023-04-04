<?php

namespace App\Http\Controllers;
use App\Models\DonViDuyet;
use Illuminate\Http\Request;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;
class KiemDuyetController extends Controller
{
    public function __construct()
   {
       $this->middleware('auth');
   }

   public function get_ThongTinCaNhan(Request $request){
    $user = $request->user();
    $ThongTinCaNhan = DB::table('users')
    ->leftJoin('can_bo_quan_lies','can_bo_quan_lies.user_id','=','users.id')
    ->leftJoin('don_vi_duyets','don_vi_duyets.can_bo_quan_li_id','=','can_bo_quan_lies.id')
    ->select('can_bo_quan_lies.*','can_bo_quan_lies.id as CBQLID', 'can_bo_quan_lies.diachi as diachiCBQL', 'can_bo_quan_lies.sodienthoai as sodienthoaiCBQL',
            'don_vi_duyets.*','don_vi_duyets.id as donviduyetID','don_vi_duyets.diachi as diachidonvi','don_vi_duyets.sodienthoai as sodienthoaidonvi')
    ->where('users.id',$user->id)
    ->first();

    if ( $ThongTinCaNhan!=NULL && $ThongTinCaNhan->CBQLID != NULL)
    {
        return view('kiemduyet.thongtintaikhoan')->with('ThongTinCaNhan',$ThongTinCaNhan)->with('user',$user);
    }
    else
    {
        return view('kiemduyet.sua_thongtintaikhoan')->with('ThongTinCaNhan',$ThongTinCaNhan)->with('user',$user);
    }
   
}

    public function get_Sua_ThongTinCaNhan(Request $request){
        $user = $request->user();
        $ThongTinCaNhan = DB::table('users')
            ->leftJoin('can_bo_quan_lies','can_bo_quan_lies.user_id','=','users.id')
            ->leftJoin('don_vi_duyets','don_vi_duyets.can_bo_quan_li_id','=','can_bo_quan_lies.id')
            ->select('can_bo_quan_lies.*','can_bo_quan_lies.id as CBQLID', 'can_bo_quan_lies.diachi as diachiCBQL', 'can_bo_quan_lies.sodienthoai as sodienthoaiCBQL',
            'don_vi_duyets.*','don_vi_duyets.id as donviduyetID','don_vi_duyets.diachi as diachidonvi','don_vi_duyets.sodienthoai as sodienthoaidonvi')
            ->where('user_id',$user->id)
            ->first();

        return view('kiemduyet.sua_thongtintaikhoan')->with('ThongTinCaNhan',$ThongTinCaNhan)->with('user',$user);
    }
    public function post_Sua_ThongTinCaNhan(Request $request){

        $request->user()->authorizeRoles(['admin','kiemduyet']);
        $user = $request->user();
        $id = $request->CBQLID;
        $ThongTinCaNhan = array();
        $ThongTinCaNhan['hoten']=$request->hoten;
        $ThongTinCaNhan['diachi']=$request->diachiCBQL;
        $ThongTinCaNhan['sodienthoai']=$request->sodienthoaiCBQL;
        $ThongTinCaNhan['user_id']=$user->id;

        if($id == NULL){
            DB::table('can_bo_quan_lies')->insert($ThongTinCaNhan);
        }else{
        $save = DB::table('can_bo_quan_lies')->where('id',$request->CBQLID)->update($ThongTinCaNhan);
        }
        return redirect::to('/kiemduyet/thongtintaikhoancanhan');
    }

    public function get_ThongTinDonVi(Request $request){
        $user = $request->user();
        $ThongTin = DB::table('users')
        ->leftJoin('can_bo_quan_lies','can_bo_quan_lies.user_id','=','users.id')
        ->leftJoin('don_vi_duyets','don_vi_duyets.can_bo_quan_li_id','=','can_bo_quan_lies.id')
        ->select('can_bo_quan_lies.*','can_bo_quan_lies.diachi as diachiCBQL','can_bo_quan_lies.id as IDCBQL','can_bo_quan_lies.sodienthoai as sodienthoaiCBQL',
                'don_vi_duyets.*')
        ->where('users.id',$user->id)
        ->first();

        
        if ( $ThongTin!=NULL && $ThongTin->id != NULL)
        {
            return view('kiemduyet.thongtindonvi')->with('ThongTin',$ThongTin)->with('user',$user);
        }
        else
        {
            return view('kiemduyet.sua_thongtindonvi')->with('ThongTin',$ThongTin)->with('user',$user);
        }
       
    }
    
        public function get_Sua_ThongTinDonVi(Request $request){
            $user = $request->user();
            $ThongTin = DB::table('users')
                ->leftJoin('can_bo_quan_lies','can_bo_quan_lies.user_id','=','users.id')
                ->leftJoin('don_vi_duyets','don_vi_duyets.can_bo_quan_li_id','=','can_bo_quan_lies.id')
                ->select('can_bo_quan_lies.*','can_bo_quan_lies.id as IDCBQL','can_bo_quan_lies.diachi as diachiCBQL','can_bo_quan_lies.sodienthoai as sodienthoaiCBQL',
                    'don_vi_duyets.*')
                ->where('user_id',$user->id)
                ->first();

            return view('kiemduyet.sua_thongtindonvi')->with('ThongTin',$ThongTin)->with('user',$user);
        }
        public function post_Sua_ThongTinDonVi(Request $request){
    
            $request->user()->authorizeRoles(['admin','kiemduyet']);
            $user = $request->user();
            $id = $request->id;
            $ThongTin = array();
            $ThongTin['tendonvi']=$request->tendonvi;
            $ThongTin['diachi']=$request->diachi;
            $ThongTin['sodienthoai']=$request->sodienthoai;
            $ThongTin['cap_duyet_id']=$request->cap_duyet_id;
            $ThongTin['can_bo_quan_li_id']=$request->idcanboquanly;
    
            if($id == NULL){
                DB::table('don_vi_duyets')->insert($ThongTin);
            }else{
            $save = DB::table('don_vi_duyets')->where('id',$request->id)->update($ThongTin);
            }
            return redirect::to('/kiemduyet/thongtindonvi');
        }

}