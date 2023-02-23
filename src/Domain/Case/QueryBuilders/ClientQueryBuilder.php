<?php
namespace Domain\Case\QueryBuilders;

use Illuminate\Database\Eloquent\Builder;

class ClientQueryBuilder extends Builder
{
    public function activeItems(): ClientQueryBuilder
    {
        return $this->active()
            ->orderBy('sort', 'asc')
            ->select(['title','thumbnail','sort']);
    }
}