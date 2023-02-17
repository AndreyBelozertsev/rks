<?php

namespace Domain\Product\Models;

use Support\Traits\Gallery;
use Support\Traits\HasSlug;
use Domain\Post\Models\Post;
use Support\Traits\CreateSeo;
use Support\Traits\HasThumbnail;
use Support\Traits\DateForHumman;
use Illuminate\Database\Eloquent\Model;
use Support\Traits\ResolveRouteBindingSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory, HasSlug, ResolveRouteBindingSlug, HasThumbnail, DateForHumman, Gallery, CreateSeo;

    public function category()
    {
        return $this->belongsTo(ServiceCategory::class, 'service_category_id', 'id');
    }


    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }


    protected function thumbnailDir():string
    {
        return 'service';
    }

    protected function makeUrl():string
    {
       return route('service.show', ['category'=> $this->category->slug ,'slug' => $this->slug] );
    }
}


