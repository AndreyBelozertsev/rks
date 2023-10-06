<?php

namespace Domain\Post\Models;

use Spatie\Feed\Feedable;
use Spatie\Feed\FeedItem;
use Support\Traits\Gallery;
use Support\Traits\HasSlug;
use Domain\Post\Models\Post;
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

class Post extends Model implements Feedable
{
    use HasFactory, HasSlug, ScopeActive,ResolveRouteBindingSlug, HasThumbnail, DateForHumman, Gallery, CreateSeo;

    protected $routeName = 'post.show';
    
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
       return route('post.show', ['slug' => $this->slug] );
    }

    public function newEloquentBuilder($query): PostQueryBuilder 
    {
        return new PostQueryBuilder($query);
    }

    public function toFeedItem(): FeedItem
    {
        return FeedItem::create([
            'id' => $this->id,
            'title' => $this->title,
            'thumbnail' => $this->makeThumbnail('650xnull'),
            'summary' => $this->content,
            'updated' => $this->updated_at,
            'link' => $this->makeUrl(),
            'authorName' => 'Компания Ракурс',
        ]);
    }

    public static function getFeedItems()
    {
        return Post::all();
    }
}
