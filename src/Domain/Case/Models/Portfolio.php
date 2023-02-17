<?php

namespace Domain\Case\Models;

use Support\Traits\Gallery;
use Support\Traits\HasSlug;
use Support\Traits\CreateSeo;
use Support\Traits\ScopeActive;
use Support\Traits\HasThumbnail;
use Support\Traits\DateForHumman;
use Domain\Product\Models\Service;
use Illuminate\Database\Eloquent\Model;
use Domain\Case\Models\PortfolioCategory;
use Domain\Product\Models\ServiceCategory;
use Support\Traits\ResolveRouteBindingSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Portfolio extends Model
{
    use HasFactory, HasSlug, ScopeActive,ResolveRouteBindingSlug, HasThumbnail, DateForHumman, Gallery, CreateSeo;

    public function category()
    {
        return $this->belongsTo(PortfolioCategory::class, 'post_category_id', 'id');
    }

    public function posts()
    {
        return $this->belongsToMany(Service::class);
    }

    public function services()
    {
        return $this->belongsToMany(Service::class);
    }

    public function service_categories()
    {
        return $this->belongsToMany(ServiceCategory::class);
    }

    protected function thumbnailDir():string
    {
        return 'case';
    }

    protected function makeUrl():string
    {
       return route('case.show', ['slug' => $this->slug] );
    }
}
