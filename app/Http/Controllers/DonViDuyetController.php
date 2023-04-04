<?php

namespace App\Http\Controllers;

use App\Models\DonViDuyet;
use App\Http\Requests\StoreDonViDuyetRequest;
use App\Http\Requests\UpdateDonViDuyetRequest;
use Illuminate\Http\Request;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;
class DonViDuyetController extends Controller
{
    public function __construct()
   {
       $this->middleware('auth');
   }
    public function getDS_DonViDuyet(Request $request){
        $request->user()->authorizeRoles(['Admin']);
        $user = $request->user();

        $DonViDuyet=DB::table('don_vi_duyets')
        ->leftJoin('cap_duyets','cap_duyets.id','=','don_vi_duyets.cap_duyet_id')
        ->select('cap_duyets.id as CapDuyet_id','cap_duyets.*','don_vi_duyets.id as DonViDuyet_id','don_vi_duyets.*')
        ->get();
            
        return view('admin.donviduyet.ds_donviduyet')->with('DonViDuyet',$DonViDuyet);
    }

    public function get_Them_DonViDuyet(Request $request){

        $DonViDuyet=DB::table('don_vi_duyets')
        ->leftJoin('cap_duyets','cap_duyets.id','=','don_vi_duyets.cap_duyet_id')
        ->select('don_vi_duyets.id as DonViDuyet_id','don_vi_duyets.*')
        ->get();
        $CapDuyet = DB::table('cap_duyets')
        ->get();
            
        return view('admin.donviduyet.them')->with('DonViDuyet',$DonViDuyet)->with('CapDuyet',$CapDuyet);
    }

    public function post_Them_DonViDuyet(Request $request){
 
        $DonViDuyet = array();
        $DonViDuyet['tendonvi']=$request->tendonvi;
        $DonViDuyet['diachi']=$request->diachi;
        $DonViDuyet['sodienthoai']=$request->sodienthoai;
        $DonViDuyet['cap_duyet_id']=$request->cap_duyet_id;
        $save=DB::table('don_vi_duyets')->insertGetId($DonViDuyet);

        return redirect::to('/admin/dsdonviduyet');
    }

    public function get_Sua_DonViDuyet(Request $request,$id){

        $DonViDuyet=DB::table('don_vi_duyets')
        ->leftJoin('cap_duyets','cap_duyets.id','=','don_vi_duyets.cap_duyet_id')
        ->select('don_vi_duyets.*','don_vi_duyets.id as DonViDuyet_id','cap_duyets.*')
        ->first();
        $CapDuyet = DB::table('cap_duyets')
        ->get();
            
        return view('admin.donviduyet.sua')->with('DonViDuyet',$DonViDuyet)->with('CapDuyet',$CapDuyet);
    }

    public function post_Sua_DonViDuyet(Request $request,$id){

        $DonViDuyet = array();
        $DonViDuyet['tendonvi']=$request->tendonvi;
        $DonViDuyet['diachi']=$request->diachi;
        $DonViDuyet['sodienthoai']=$request->sodienthoai;
        $DonViDuyet['cap_duyet_id']=$request->cap_duyet_id;
        $save=DB::table('don_vi_duyets')->where('don_vi_duyets.id',$id)->update($DonViDuyet);
            
        return redirect::to('/admin/dsdonviduyet');
    }

    public function get_Xoa_DonViDuyet($id){
        DB::table('don_vi_duyets')->delete($id);
            
        return redirect::to('/admin/dsdonviduyet');
    }


    
}
