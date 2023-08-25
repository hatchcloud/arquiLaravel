<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_package extends Model
{
    use HasFactory;
    protected $table = 'product_package';
    protected $fillable = [
        'package_name',
        'range',
        'description',
        'status'
    ];
}


