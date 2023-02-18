<?php
namespace Domain\Product\QueryBuilders;

use Illuminate\Database\Eloquent\Builder;

class DevelopmentStageQueryBuilder extends Builder
{
    public function activeStages(): DevelopmentStageQueryBuilder
    {
        return $this->active()
            ->orderBy('sort', 'asc')
            ->select(['title','slug','description','sort','thumbnail']);
    }

    public function serviceCategoryPage($slug): DevelopmentStageQueryBuilder
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
            ->select(['id','title','thumbnail','content']);
    }
}
