<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonViDuyet extends Model
{
    use HasFactory;

    protected $table = 'DonViDuyet';

    protected $fillable = [
        'id',
        'tendonvi',
        'diachi',
        'sodienthoai',
    ];
}
