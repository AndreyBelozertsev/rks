<?php
namespace Domain\Product\QueryBuilders;

use Illuminate\Database\Eloquent\Builder;

class ServiceCategoryQueryBuilder extends Builder
{
    public function serviceCategories(): ServiceCategoryQueryBuilder
    {
        return $this->active()
            ->orderBy('sort', 'asc')
            ->whereHas('services', fn ($query) => $query->active())
            ->select(['title','slug','description','sort','thumbnail']);
    }

    public function serviceCategory($slug): ServiceCategoryQueryBuilder
    {
        return $this->active()
            ->where('slug',$slug)
            ->whereHas('services',fn ($query) => $query->active())
            ->with([
                'services' => fn ($query) => $query
                    ->active()
                    ->select(['title','slug','description','sort','thumbnail','service_category_id'])
                    ->orderBy('sort', 'asc')
            ])
            ->with([
                'portfolios' => fn ($query) => $query
                    ->active()
                    ->select(['title','slug','description','sort','thumbnail',])
                    ->orderBy('sort', 'asc')
                    ->limit(6)
            ])
            ->select(['id','title','thumbnail','content','slug']);
    }
}
