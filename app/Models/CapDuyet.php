<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CapDuyet extends Model
{
    use HasFactory;

    protected $table = 'CapDuyet';

    protected $fillable = [
        'id',
        'ten',
    ];
}
