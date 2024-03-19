<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    use HasFactory;
    use SoftDeletes;



    protected $fillable = [
        'user_id',
        'car_id',
        'pick_up_date',
        'return_date',
        'pick_up_and_return_location',
        
    ];
    public function car() {
        return $this->belongsTo(Car::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
