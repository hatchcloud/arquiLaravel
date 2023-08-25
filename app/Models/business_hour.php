<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class business_hour extends Model
{
    use HasFactory;
    protected $table = 'business_hours';
    protected $fillable = [
        'busines_hour'
    ];
}
