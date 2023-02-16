<?php

namespace Domain\Post\Models;

use Support\Traits\Gallery;
use Support\Traits\HasSlug;
use Support\Traits\ScopeActive;
use Support\Traits\HasThumbnail;
use Support\Traits\DateForHumman;
use Domain\Post\Models\PostCategory;
use Illuminate\Database\Eloquent\Model;
use Support\Traits\ResolveRouteBindingSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory, HasSlug, ScopeActive,ResolveRouteBindingSlug, HasThumbnail, DateForHumman, Gallery;
    
    public function category()
    {
        return $this->belongsTo(PostCategory::class, 'post_category_id', 'id');
    }

    protected function thumbnailDir():string
    {
        return 'post';
    }

}
