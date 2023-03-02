<?php

namespace Domain\Product\Models;

use Support\Traits\Gallery;
use Support\Traits\HasSlug;
use Support\Traits\CreateSeo;
use Support\Traits\ScopeActive;
use Support\Traits\HasThumbnail;
use Support\Traits\DateForHumman;
use Illuminate\Database\Eloquent\Model;
use Support\Traits\ResolveRouteBindingSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Domain\Product\QueryBuilders\AdditionalServiceQueryBuilder;

class AdditionalService extends Model
{
    use HasFactory, HasSlug, ScopeActive, ResolveRouteBindingSlug, HasThumbnail, DateForHumman, Gallery, CreateSeo;

    public function services()
    {
        return $this->belongsToMany(Service::class);
    }

    protected function thumbnailDir():string
    {
        return 'additional-service';
    }

    protected function makeUrl():string
    {
       return route('additional-service.show', ['slug' => $this->slug] );
    }

    public function newEloquentBuilder($query): AdditionalServiceQueryBuilder 
    {
         return new AdditionalServiceQueryBuilder($query);
    }
}
