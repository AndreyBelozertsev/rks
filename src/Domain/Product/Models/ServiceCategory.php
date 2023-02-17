<?php

namespace Domain\Product\Models;

use Support\Traits\HasSlug;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ServiceCategory extends Model
{
    use HasFactory, HasSlug;

    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
