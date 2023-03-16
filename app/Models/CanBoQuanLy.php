<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CanBoQuanLy extends Model
{
    use HasFactory;
    protected $table = 'CanBoQuanLy';

    protected $fillable = [
        'id',
        'hoten',
        'diachi',
        'sodienthoai',
    ];
}
