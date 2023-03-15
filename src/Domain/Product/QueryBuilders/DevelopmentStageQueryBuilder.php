<?php
namespace Domain\Product\QueryBuilders;

use Illuminate\Database\Eloquent\Builder;

class DevelopmentStageQueryBuilder extends Builder
{
    public function activeItems(): DevelopmentStageQueryBuilder
    {
        return $this->active()
            ->orderBy('sort', 'asc')
            ->select(['title','slug','description','sort','thumbnail']);
    }

    public function activeItem($slug): DevelopmentStageQueryBuilder
    {
        return $this->active()
            ->where('slug', $slug)
            ->select(['title','slug','content','sort','thumbnail','images']);
    }

    public function prevItem($item): DevelopmentStageQueryBuilder
    {
        return $this->active()
            ->orderBy('sort', 'desc')
            ->where('sort', '<', $item->sort)
            ->select(['title','slug','sort']);
    }

    public function nextItem($item): DevelopmentStageQueryBuilder
    {
        return $this->active()
            ->where('sort', '>', $item->sort)
            ->select(['title','slug','sort']);
    }
    
}
