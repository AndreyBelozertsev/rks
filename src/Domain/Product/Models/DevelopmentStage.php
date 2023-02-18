<?php

namespace Domain\Product\Models;

use Support\Traits\Gallery;
use Support\Traits\HasSlug;
use Domain\Post\Models\Post;
use Support\Traits\CreateSeo;
use Support\Traits\ScopeActive;
use Support\Traits\HasThumbnail;
use Support\Traits\DateForHumman;
use Illuminate\Database\Eloquent\Model;
use Support\Traits\ResolveRouteBindingSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Domain\Product\QueryBuilders\DevelopmentStageQueryBuilder;

class DevelopmentStage extends Model
{
    use HasFactory, ScopeActive, HasSlug, ResolveRouteBindingSlug, HasThumbnail, DateForHumman, Gallery, CreateSeo;

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

    public function newEloquentBuilder($query): DevelopmentStageQueryBuilder 
    {
         return new DevelopmentStageQueryBuilder($query);
    }

    protected function thumbnailDir():string
    {
        return 'development-stage';
    }

    protected function makeUrl():string
    {
       return route('development-stage.show',$this->slug);
    }

}