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
            ->select(['id','title','thumbnail','images','content','slug','url','service_description','result','techology','branch','view']);
    }

    public function activeItems(): PortfolioQueryBuilder
    {
        return $this->active()
            ->with([
                'category' => fn ($query) => $query
                    ->active()
                    ->select(['id', 'title'])
            ])
            ->when(request()->has('category'), function($query){
                $query->whereRelation('serviceCategories','slug','=',request()->get('category'));
            })
            ->with([
                'serviceCategories' => fn ($query) => $query
                    ->active()
                    ->select(['title', 'slug'])
            ])
            ->orderBy('created_at', 'desc')
            ->select(['id','title','slug','thumbnail','portfolio_category_id']);
    }

}