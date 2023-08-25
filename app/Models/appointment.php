<?php

namespace App\Models;

use App\Models\product_package;
use App\Models\business_hour;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    use HasFactory;

    protected $table = 'appointments';
    protected $fillable = [
        'product_package_id',
        'business_hours_id',
        'date',
        'name',
        'email',
        'phone',
        'message',
        'status',
    ];

    public function productPackage()
    {
        return $this->belongsTo(product_package::class, 'product_package_id');
    }

    public function businessHours()
    {
        return $this->belongsTo(business_hour::class, 'business_hours_id');
    }
}
