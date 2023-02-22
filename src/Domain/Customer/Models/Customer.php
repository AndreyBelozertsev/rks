<?php

namespace Domain\Customer\Models;

use App\Casts\ServicesListCast;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'services',
        'url',
        'comment'
    ];

    protected $casts = [
       // 'services' => ServicesListCast::class
    ];
}
