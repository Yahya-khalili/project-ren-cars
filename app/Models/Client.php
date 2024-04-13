<?php

namespace App\Models;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model implements AuthenticatableContract
{
    use HasFactory, AuthenticatableTrait;
    use SoftDeletes;
    protected $fillable = [
        'fullName',
        'cin',
        'email',
        'password',
        'phone',
    ];
}
