<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonViDuyet extends Model
{
    use HasFactory;

    protected $table = 'don_vi_duyets';

    protected $fillable = [
        'id',
        'tendonvi',
        'diachi',
        'sodienthoai',
        'cap_duyet_id',
    ];
}
