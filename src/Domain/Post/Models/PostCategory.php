<?php

namespace Domain\Post\Models;


use Support\Traits\HasSlug;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PostCategory extends Model
{
    use HasFactory, HasSlug;

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

}
