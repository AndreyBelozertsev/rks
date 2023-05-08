<?php
namespace Domain\Product\QueryBuilders;

use Illuminate\Database\Eloquent\Builder;

class ServiceQueryBuilder extends Builder
{
    public function activeItem($slug): ServiceQueryBuilder
    {
        return $this->active()
            ->where('slug',$slug)
            ->whereHas('category',fn ($query) => $query->active())
            ->with([
                'category' =>  fn ($query) => $query
                    ->active()
                    ->select(['id','title','slug'])
            ])
            ->with([
                'portfolios' => fn ($query) => $query
                    ->active()
                    ->whereHas('category',fn ($query) => $query->active())
                    ->select(['title','slug','description','sort','thumbnail','portfolio_category_id'])
                    ->orderBy('sort', 'asc')
            ])
            ->with([
                'posts' => fn ($query) => $query
                    ->active()
                    ->select(['title','slug','description','thumbnail'])
            ])
            ->with([
                'additionalServices' => fn ($query) => $query
                    ->active()
                    ->select(['title','description','thumbnail'])
            ])
            ->select(['id','title','thumbnail','icon','images','content', 'additional_content','slug','view', 'price','service_category_id']);
    }
}
