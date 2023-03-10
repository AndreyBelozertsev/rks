<?php

namespace Domain\Post\Models;


use Support\Traits\HasSlug;
use Support\Traits\ScopeActive;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PostCategory extends Model
{
    use HasFactory, HasSlug, ScopeActive;

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

}
