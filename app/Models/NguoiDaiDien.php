<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class NguoiDaiDien extends Model
{
    use HasFactory;
    protected $table = 'NguoiDaiDien';

    protected $fillable = [
        'id',
        'TenNguoiDaiDien',
        'DiaChi',
        'SoDienThoai'
        ];

    public function add_NguoiDaiDien ($data){
        return DB::table($this->table)->insert($data);
    }
}
