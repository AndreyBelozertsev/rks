<?php
namespace Domain\Product\QueryBuilders;

use Illuminate\Database\Eloquent\Builder;

class ServiceCategoryQueryBuilder extends Builder
{
    public function activeItems(): ServiceCategoryQueryBuilder
    {
        return $this->active()
            ->orderBy('sort', 'asc')
            ->whereHas('services', fn ($query) => $query->active())
            ->select(['title','slug','description','sort','icon','thumbnail']);
    }

    public function activeItem($slug): ServiceCategoryQueryBuilder
    {

        return $this->active()
            ->where('slug',$slug)
            ->whereHas('services',fn ($query) => $query->active())
            ->with([
                'services' => fn ($query) => $query
                    ->active()
                    ->select(['title','slug','description','sort','thumbnail','icon','service_category_id'])
                    ->orderBy('sort', 'asc')
            ])
            ->with([
                'portfolios' => fn ($query) => $query
                    ->active()
                    ->select(['title','slug','description','sort','thumbnail',])
                    ->orderBy('sort', 'asc')
                    ->limit(6)
            ])
            ->select(['id','title','thumbnail','icon','content','images','slug']);
    }

    public function itemsWithAdditionalServices(): array
    {
        return $this->pluck('title', 'slug')
            ->merge(collect(config('constant.additional_services')))
            ->toArray();
    }

    public function serviceCategoriesInputs(): ServiceCategoryQueryBuilder
    {
        return $this->active()
            ->orderBy('sort', 'asc')
            ->select(['title','slug','sort']);
    }
}
