<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
