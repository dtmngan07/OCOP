<?php

namespace App\Http\Controllers;

use App\Models\DonViDuyet;
use App\Http\Requests\StoreDonViDuyetRequest;
use App\Http\Requests\UpdateDonViDuyetRequest;
use Illuminate\Http\Request;
use Session;
use DB;
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
        ->get();
            
        return view('admin.donviduyet.xemhoso')->with('DonViDuyet',$DonViDuyet);
    }
}
