<?php

namespace Domain\Post\Models;

use Support\Traits\Gallery;
use Support\Traits\HasSlug;
use Support\Traits\CreateSeo;
use Support\Traits\ScopeActive;
use Support\Traits\HasThumbnail;
use Domain\Case\Models\Portfolio;
use Support\Traits\DateForHumman;
use Domain\Product\Models\Service;
use Domain\Post\Models\PostCategory;
use Illuminate\Database\Eloquent\Model;
use Support\Traits\ResolveRouteBindingSlug;
use Domain\Post\QueryBuilders\PostQueryBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory, HasSlug, ScopeActive,ResolveRouteBindingSlug, HasThumbnail, DateForHumman, Gallery, CreateSeo;

    protected $routeName = 'article.show';
    
    public function category()
    {
        return $this->belongsTo(PostCategory::class, 'post_category_id', 'id');
    }

    public function services()
    {
        return $this->belongsToMany(Service::class);
    }

    public function portfolios()
    {
        return $this->belongsToMany(Portfolio::class);
    }

    protected function thumbnailDir():string
    {
        return 'post';
    }

    protected function makeUrl():string
    {
       return route('article.show', ['slug' => $this->slug] );
    }

    public function newEloquentBuilder($query): PostQueryBuilder 
    {
        return new PostQueryBuilder($query);
    }
}
