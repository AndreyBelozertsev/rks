<?php
namespace Domain\Case\QueryBuilders;

use Illuminate\Database\Eloquent\Builder;

class PortfolioQueryBuilder extends Builder
{
    public function activeItem($slug): PortfolioQueryBuilder
    {
        return $this->active()
            ->where('slug',$slug)
            ->with([
                'services' => fn ($query) => $query
                    ->active()
                    ->whereHas('category',fn ($query) => $query->active())
                    ->select(['title','slug','description','sort','thumbnail','service_category_id'])
                    ->orderBy('sort', 'asc')
                    ->with([
                        'category' => fn ($query) => $query
                            ->active()
                            ->select(['id','title','slug'])
                    ])
            ])
            ->with([
                'posts' => fn ($query) => $query
                    ->active()
                    ->select(['title','slug','description','thumbnail'])
            ])
            ->select(['id','title','thumbnail','images','content','slug','service_description','result','techology','branch','view']);
    }
}