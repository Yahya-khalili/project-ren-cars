<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'type',
        'nameCar',
        'marque',
        'image',
        'price',
        'description',
        'brand_id',
    ];
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
