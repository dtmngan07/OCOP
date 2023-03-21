<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhieuDangKy extends Model
{
    use HasFactory;
    protected $table = 'phieu_dang_kies';

    protected $fillable = [
        'id',
        'sophieu',
        'ngaydangky',
    ];
}
