<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoanhNghiep extends Model
{
    use HasFactory;
    
    protected $table = 'doanhnghiep';
	
	protected $fillable = [
		'TenChuThe',
		'TenSanPhamDangKy',
		'BieuTuong',
        'MaSoThue',
        'NgayThanhLap',
        'VonDieuLe',
        'SoGiayDKKD',
        'LoaiHinhToChuc',
        'DiaChiDN',
        'SDT',
        'Email',
        'Website',
        'NguoiDaiDien_ID',
	];
    
    public function NguoiDaiDien() 
	{
		return $this->belongsTo(NguoiDaiDien::class, 'NguoiDaiDien_ID', 'id');
	}
}
