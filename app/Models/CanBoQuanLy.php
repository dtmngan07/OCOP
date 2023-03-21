<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CanBoQuanLy extends Model
{
    use HasFactory;
    protected $table = 'can_bo_quan_lies';

    protected $fillable = [
        'id',
        'hoten',
        'diachi',
        'sodienthoai',
    ];

}
