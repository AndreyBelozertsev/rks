<?php

namespace Domain\Product\Models;


use Support\Traits\Gallery;
use Support\Traits\HasSlug;
use Domain\Post\Models\Post;
use Support\Traits\CreateSeo;
use Support\Traits\ScopeActive;
use Support\Traits\HasThumbnail;
use Domain\Case\Models\Portfolio;
use Support\Traits\DateForHumman;
use Illuminate\Database\Eloquent\Model;
use Support\Traits\ResolveRouteBindingSlug;
use Domain\Product\QueryBuilders\ServiceQueryBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory, HasSlug, ScopeActive, ResolveRouteBindingSlug, HasThumbnail, DateForHumman, Gallery, CreateSeo;

    public function category()
    {
        return $this->belongsTo(ServiceCategory::class, 'service_category_id', 'id');
    }

    public function portfolios()
    {
        return $this->belongsToMany(Portfolio::class);
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

    public function additionalServices()
    {
        return $this->belongsToMany(AdditionalService::class);
    }

    public function childServices()
    {
        return $this->hasMany(Service::class, 'parent_id');
    }

    public function parentService()
    {
        return $this->hasOne(Service::class, 'id', 'parent_id');
    }


    protected function thumbnailDir():string
    {
        return 'service';
    }

    protected function makeUrl():string
    {
       return route('service.show', ['category'=> $this->category->slug ,'slug' => $this->slug] );
    }

    public function newEloquentBuilder($query): ServiceQueryBuilder 
    {
         return new ServiceQueryBuilder($query);
    }
}


