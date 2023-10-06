<?php

namespace Domain\Vacancy\QueryBuilders;

use Illuminate\Database\Eloquent\Builder;

class VacancyQueryBuilder extends Builder
{

    public function activeItem($slug): VacancyQueryBuilder
    {
        return $this->active()
            ->orderBy('sort', 'asc')
            ->where('slug', $slug)
            ->select(['id','title','slug','content']);
    }

    public function activeItems(): VacancyQueryBuilder
    {
        return $this->active()
            ->select(['title','slug','description']);
    }

}
