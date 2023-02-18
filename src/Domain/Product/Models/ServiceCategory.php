<?php

namespace Domain\Product\Models;

use Support\Traits\HasSlug;
use Support\Traits\ScopeActive;
use Domain\Case\Models\Portfolio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Domain\Product\QueryBuilders\ServiceCategoryQueryBuilder;


class ServiceCategory extends Model
{
    use HasFactory, HasSlug, ScopeActive;

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function portfolios()
    {
        return $this->belongsToMany(Portfolio::class);
    }

    public function newEloquentBuilder($query): ServiceCategoryQueryBuilder 
    {
         return new ServiceCategoryQueryBuilder($query);
    }

}
