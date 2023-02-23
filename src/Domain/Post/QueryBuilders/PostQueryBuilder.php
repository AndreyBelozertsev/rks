<?php

namespace Domain\Post\QueryBuilders;

use Illuminate\Database\Eloquent\Builder;

class PostQueryBuilder extends Builder
{

    public function activeItem($slug): PostQueryBuilder
    {
        return $this->active()
            ->where('slug', $slug)
            ->whereHas('category',fn ($query) => $query->active())
            ->with([
                'portfolios' => fn ($query) => $query
                    ->active()
                    ->whereHas('category',fn ($query) => $query->active())
                    ->select(['title','slug','description','sort','thumbnail','portfolio_category_id'])
                    ->orderBy('sort', 'asc')
            ])
            ->with([
                'services' => fn ($query) => $query
                    ->active()
                    ->whereHas('category',fn ($query) => $query->active())
                    ->with([
                        'category' => fn ($query) => $query
                            ->active()
                            ->select(['id','title','slug'])
                    ])
                    ->select(['title','slug','description','thumbnail','service_category_id'])
            ])
            ->select(['id','title','slug','content','thumbnail','images']);
    }

    public function activeItems(): PostQueryBuilder
    {
        return $this->active()
            ->whereHas('category',fn ($query) => $query->active())
            ->select(['title','slug','description','thumbnail']);
    }

}
