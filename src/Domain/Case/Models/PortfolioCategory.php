<?php

namespace Domain\Case\Models;

use Support\Traits\HasSlug;
use Support\Traits\ScopeActive;
use Domain\Case\Models\Portfolio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PortfolioCategory extends Model
{
    use HasFactory, HasSlug, ScopeActive;

    public function posts()
    {
        return $this->hasMany(Portfolio::class);
    }
}
